<x-layout>
    <h4 class="page-title">Dashboard</h4>
    <div class="row">
        <div class="col-md-3">
            <x-info-card title='All Tasks' count='{{ $total_tasks }}' type='info' />
        </div>
        <div class="col-md-3">
            <x-info-card title='Pending Tasks' count='{{ $task_counts[1] ?? 0 }}' type='danger' />
        </div>
        <div class="col-md-3">
            <x-info-card title='In Progress Tasks' count='{{ $task_counts[2] ?? 0 }}' type='warning' />
        </div>
        <div class="col-md-3">
            <x-info-card title='Complated Tasks' count='{{ $task_counts[3] ?? 0 }}' type='success' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Task</h4>
                    <p class="card-category">Complete</p>
                </div>
                <div class="card-body">
                    <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                </div>
                <div class="card-footer">
                    <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h4 class="card-title">Tasks</h4>
                    <p class="card-category">Last 5 tasks</p>
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
                                    <th>Status</th>
                                    <th>Remaining days</th>
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
                                        <td>{{ optional($task->status)->name }}</td>
                                        <td>{{ $diff_days >= 0 ? $diff_days : 0 }}</td>
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
                                                    class="btn btn-link btn-simple-danger" data-toggle="modal"
                                                    data-target="#exampleModal">
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
                    <div class="stats">
                        <i class="now-ui-icons loader_refresh spin"></i> <a href="{{ route('tasks.list') }}">Show
                            all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        let percent_value = {{ $percentage ?? 0 }}
        Circles.create({
            id: 'task-complete',
            radius: 75,
            value: percent_value,
            maxValue: 100,
            width: 8,
            text: function(value) {
                return value + '%';
            },
            colors: ['#eee', '#1D62F0'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })
    });
</script>
