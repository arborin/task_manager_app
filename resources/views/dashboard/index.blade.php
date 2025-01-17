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
                                    <th>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input  select-all-checkbox" type="checkbox"
                                                    data-select="checkbox" data-target=".task-select">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th>Task</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input task-select" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Planning new project structure</td>
                                    <td class="td-actions text-right">
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
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input task-select" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Update Fonts</td>
                                    <td class="td-actions text-right">
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
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input task-select" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Add new Post
                                    </td>
                                    <td class="td-actions text-right">
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
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input task-select" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Finalise the design proposal</td>
                                    <td class="td-actions text-right">
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
