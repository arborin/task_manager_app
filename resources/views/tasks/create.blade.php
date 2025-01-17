<x-layout>
    <h4 class="page-title">Create Task</h4>



    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Base Form Control</div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('store.task') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment">Task Description</label>
                                    <textarea class="form-control" id="comment" rows="5" name='task_description'></textarea>
                                    @error('task_description')
                                        <p id="task-description-error" class="form-text text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="task-statuses">Status</label>
                                    <select class="form-control" id="task-statuses" name='status_id'>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('status_id')
                                    <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Completion Date</label>
                                    <div class="input-group">

                                        <input class="form-control" id="date" name="date"
                                            placeholder="DD-MM-YYYY" type="text" />

                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                    </div>
                                    @error('date')
                                        <p id="completion-date-error" class="form-text text-danger">{{ $message }}
                                        </p>
                                    @enderror
                                </div>

                            </div>
                        </div>
                </div>
                <div class="card-action">
                    <button type='submit' class="btn btn-success float-right ml-2">Submit</button>
                    <a href="{{ route('my.tasks') }}" class="btn btn-danger float-right">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
