<x-layout>
    <h4 class="page-title">Create Task</h4>



    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Base Form Control</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="comment">Task Description</label>
                                <textarea class="form-control" id="comment" rows="5" name='task_description'></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <div class="input-group">

                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY"
                                        type="text" />

                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success float-right ml-2">Submit</button>
                    <button class="btn btn-danger float-right">Cancel</button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
