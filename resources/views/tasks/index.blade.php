<x-layout>
    <h4 class="page-title">My Tasks</h4>
    <div class="row mb-3">
        <div class="col-md-12">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form method="get" action="{{ route('tasks.list') }}">
                <div class="card">
                    <div class="row p-3">

                        <div class="col-md-2">
                            <input type="text" name='search' value="{{ request()->get('search') }}"
                                class="form-control" id="search" placeholder="">
                        </div>

                        <div class="col-md-2">

                            <select class="form-control" name="status" id="task-status">
                                <option value=""></option>
                                @foreach ($task_status as $status)
                                    <option value={{ $status->id }}
                                        {{ request()->get('status') == $status->id ? 'selected' : '' }}>
                                        {{ $status->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success">Search</button>
                            <a href="{{ route('tasks.list') }}"class="btn btn-secondary"><i
                                    class="la la-refresh"></i></a>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>









    <div class="row">
        <div class="col-md-12">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h4 class="card-title">Tasks List</h4>
                </div>
                <div class="card-body ">
                    <div class="table-full-width">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task</th>
                                    <th>Created Date</th>
                                    <th>Completion date</th>
                                    <th>Remaining days</th>
                                    <th>Status</th>
                                    <th>Alert</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    @php
                                        $diff_days = $task->created_at->diffInDays($task->completion_date);
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $task->task_description }}</td>
                                        <td>{{ $task->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $task->completion_date }}</td>
                                        <td>{{ $diff_days >= 0 ? $diff_days : 0 }}</td>
                                        <td>{{ optional($task->status)->name }}</td>
                                        <td>
                                            @if ($task->status_id == 3)
                                                <img src={{ asset('assets/img/done.png') }} alt='fire'
                                                    height="20px" />
                                            @elseif ($diff_days <= 2)
                                                <img src={{ asset('assets/img/fire.png') }} alt='fire'
                                                    height="20px" />
                                            @else
                                                <img src={{ asset('assets/img/timer.png') }} alt='fire'
                                                    height="20px" />
                                            @endif
                                        </td>
                                        <td class="td-actions">
                                            <div class="form-button-action">
                                                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                                                    data-toggle="tooltip" title="Edit Task"
                                                    class="btn btn-link <btn-simple-primary">
                                                    <i class="la la-edit"></i>
                                                </a>

                                                <button type="button" title="Remove"
                                                    onclick="handleClick({{ $task->id }})"
                                                    class="btn btn-link btn-simple-danger delete-btn"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    <i class="la la-times"></i>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
                <div class="card-footer ">
                    <div class="float-md-right">
                        {{ $tasks->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel"><i class="la la-info-circle"></i> Warning</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to delete task?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action={{ route('tasks.delete') }} method="post">
                        @csrf
                        @method('delete')
                        <input type='hidden' name='task_id' id='delete-id' />
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleClick(id) {
            document.getElementById("delete-id").value = id;
        }
    </script>


</x-layout>
