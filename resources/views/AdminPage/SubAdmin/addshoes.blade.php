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
                     @if($errors->any())
                   
                    <div class="btn btn-info">
                        @foreach($errors->all() as $err) 
                        {{$err}}
                        @endforeach
                    </div>
                   
                    @endif 
                    <hr/>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-20">
                                <form class="form-horizontal" action="add-shoes" method="post"  enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Name</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>                      
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <textarea class="form-control" rows="5" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-box">
                                                <div class="row ">
                                                    <div class="col-md-4 form-group">
                                                        <h4 class="m-t-0 header-title">Category</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <select class="custom-select mt-3" name="category">
                                                            <option selected>select category</option>
                                                            @foreach ($category as $cate)
                                                            <option value="{{$cate->id}}">{{$cate->producer->name_producer}} - {{ $cate->name_category}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <h4 class="m-t-0 header-title">Size</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                                                        <select class="custom-select mt-3" name="size">
                                                            <option selected>select size</option>
                                                            @foreach ($size as $Size)
                                                            <option value="{{$Size->id}}">{{$Size->size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <h4 class="m-t-0 header-title">Color</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                                                        <select class="custom-select mt-3" name="color">
                                                            <option selected>select color</option>
                                                            @foreach ($colors as $Colors)
                                                            <option value="{{$Colors->id}}">{{$Colors->name_color}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                    
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3">
                                            <div class="card-box">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <h4 class="m-t-0 header-title">Gender</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <select class="custom-select mt-3" name="gender">
                                                            <option selected>select category</option>
                                                            <option value="1">Male </option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Khác</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                        <div class="col-3">
                                            <div class="card-box">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <h4 class="m-t-0 header-title">Price</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <div class="col-12">
                                                            <input type="text" class="form-control"  name="price">
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                        <div class="col-3">
                                            <div class="card-box">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <h4 class="m-t-0 header-title">Inventory</h4>
                                                        <p class="text-muted m-b-30 font-14">
                                                        </p>
                    
                                                        <div class="col-12">
                                                            <input type="number" class="form-control"  name="inventory">
                                                        </div>
                                                    </div>
                                                </div>
                    
                                            </div> <!-- end card-box -->
                                        </div> <!-- end col -->
                                       <div class="col-3">
                                        <div class="col-md-12 card-box">
                                            <div  class="form-group">
                                                <h4 m-t-0 header-title><label>Image</label></h4>
                                                <input type="file" name="images" placeholder="Chọn hình" />
                                            </div>
                                        </div>
                                       </div>
                                    </div>   

                                    <div class="row ">
                                       
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
