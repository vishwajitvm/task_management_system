@extends('admin_dashboard.indexmaster')
@section('admin')

<!-- START: Main Content-->
<main class="container-fluid">
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Editable Table</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item">Table</li>
                                <li class="breadcrumb-item active"><a href="#">Editable Table</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Datatable Edit</h4> 
                                    </div>

                                    <div class="col-6 ">
                                        <div class="card-body float-right"><!-- Large modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Company Details</button>
            
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel10">Add company Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!--card body [basic form]-->
                                                            <div class="row">                                           
                                                                <div class="col-12">
                                                                    <form>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="inputEmail4">Your Name</label>
                                                                                <input type="email" class="form-control rounded" id="inputEmail4" placeholder="Email">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputPassword4">Your email</label>
                                                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="inputAddress">Address</label>
                                                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="inputAddress2">Address 2</label>
                                                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputCity">City</label>
                                                                                <input type="text" class="form-control" id="inputCity">
                                                                            </div>
                                                                            <div class="form-group col-md-4">
                                                                                <label for="inputState">State</label>
                                                                                <select id="inputState" class="form-control">
                                                                                    <option selected>Choose...</option>
                                                                                    <option>...</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-2">
                                                                                <label for="inputZip">Zip</label>
                                                                                <input type="text" class="form-control" id="inputZip">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="inputDate">Date</label>
                                                                                <input type="text" class="form-control datepicker" id="inputDate">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                                                            </div>
                                                                        </div>
                        
                                                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                        
                                                            <!--card body end-->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                
            
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered editable-table" >
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td><button class="btn btn-warning mb-2" id="delete"><i class="fa fa-trash"></i> Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>  
                                      
                </div>
                <!-- END: Card DATA-->
            </div>
</main>
<!-- END: Content-->


@endsection