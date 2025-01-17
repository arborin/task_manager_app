<x-layout>
    <h4 class="page-title">Dashboard</h4>
    <div class="row">
        <div class="col-md-3">
            <x-info-card title='All Tasks' count='100' type='danger' />
        </div>
        <div class="col-md-3">
            <x-info-card title='All Tasks' count='100' type='danger' />
        </div>
        <div class="col-md-3">
            <x-info-card title='All Tasks' count='100' type='danger' />
        </div>
        <div class="col-md-3">
            <x-info-card title='All Tasks' count='100' type='danger' />
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
                    <p class="card-category">To Do List</p>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Planning new project structure</td>
                                    <td>2025-12-10</td>
                                    <td>2025-12-15</td>
                                    <td>5</td>
                                    <td><img src={{ asset('assets/img/fire.png') }} alt='fire' height="20px" />
                                    </td>
                                    <td class="td-actions">
                                        <div class="form-button-action">
                                            <button type="button" data-toggle="tooltip" title="Edit Task"
                                                class="btn btn-link <btn-simple-primary">
                                                <i class="la la-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" title="Remove"
                                                class="btn btn-link btn-simple-danger">
                                                <i class="la la-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Planning new project structure</td>
                                    <td>2025-12-10</td>
                                    <td>2025-12-15</td>
                                    <td>5</td>
                                    <td><img src={{ asset('assets/img/timer.png') }} alt='fire' height="20px" />
                                    <td class="td-actions">
                                        <div class="form-button-action">
                                            <button type="button" data-toggle="tooltip" title="Edit Task"
                                                class="btn btn-link <btn-simple-primary">
                                                <i class="la la-edit"></i>
                                            </button>
                                            <button type="button" data-toggle="tooltip" title="Remove"
                                                class="btn btn-link btn-simple-danger">
                                                <i class="la la-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="stats">
                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        Circles.create({
            id: 'task-complete',
            radius: 75,
            value: 60,
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
