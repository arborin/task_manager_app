<x-layout>
    <h4 class="page-title">My Tasks</h4>
    <div class="row mb-3">
        <div class="col-md-12">
            <button class="btn btn-primary">Create</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
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
                                    <th>Category</th>
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
                                    <td>Info</td>
                                    <td>2025-12-10</td>
                                    <td>2025-12-15</td>
                                    <td>5</td>
                                    <td><img src={{ asset('assets/img/fire.png') }} alt='fire' height="20px" />
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
                                    <td>Info</td>
                                    <td>2025-12-10</td>
                                    <td>2025-12-15</td>
                                    <td>5</td>
                                    <td><img src={{ asset('assets/img/fire.png') }} alt='fire' height="20px" />
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
