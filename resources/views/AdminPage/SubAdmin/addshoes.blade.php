@extends('AdminPage.mainAdmin')
@section('admin-main')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item"><a href="#">Shoes</a></li>
                            <li class="breadcrumb-item active">New Shoes</li>
                        </ol>
                    </div>
                    <h4 class="page-title">SHOES</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title">NEW SHOES</h4>
                    <p class="text-muted m-b-30 font-14">
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <form class="form-horizontal" action="add-shoes" method="post" role="form">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" value="Some text value...">
                                        </div>
                                    </div>                      
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-box">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4 class="m-t-0 header-title">Category</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <select class="custom-select mt-3">
                                                            <option selected>select category</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4 class="m-t-0 header-title">Size</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                                                        <select class="custom-select mt-3">
                                                            <option selected>select size</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4 class="m-t-0 header-title">Color</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                                                        <select class="custom-select mt-3">
                                                            <option selected>select color</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                    
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="card-box" style="height: 213.56px">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="m-t-0 header-title">Sex</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <select class="custom-select mt-3">
                                                            <option selected>select category</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                       <div class="col-6">
                                        <div class="card-box">
                                            <label class="col-3 col-form-label m-t-0 header-title">Image Product</label>
                                            <div class="col-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="row">
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>&nbsp
                                                            <button type="button" class="btn btn-gradient btn-file">
                                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                                <input type="file" class="btn-secondary" />
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert alert-info alert-white"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                            </div>
                                        </div>
                                       </div>
                                    </div>   

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-box">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h4 class="m-t-0 header-title">Price</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" value="Some text value...">
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                    </div>

                                    <div style="text-align: center">
                                        <button style="width: 150px" type="submit" class="btn btn-info">SAVE</button>
                                        <button  style="width: 150px" type="reset" class="btn btn-danger">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                    

                </div> <!-- end card-box -->
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
@endsection
