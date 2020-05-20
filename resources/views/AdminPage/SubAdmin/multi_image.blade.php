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
                            <li class="breadcrumb-item active">Add Images Shoes</li>
                        </ol>
                    </div>
                    <h4 class="page-title">SHOES IMAGES </h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="/admins/shoes/image" method="post" enctype="multipart/form-data"id="upload">
                    @csrf
                        <div class="form-group">
                            <label for="image 1">Chọn Hình</label>
                            <input type="file" name="image[]"  class="selectImage" id="images" required="" multiple/>
                            <div class="show-progress">
                                  
                            </div>
                        </div>
                    <input type="hidden" name="id_shoes" value="{{$id}}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="row justify-content-center" id="showImage">
                
            </div>
            <div>
                {{$id}}
            </div>
        </div>
        {{-- <form action="image" method="post" enctype="multipart/form-data">
            @csrf
        <input type="file" name="image[]" required="" multiple >
        <input type="submit" value="submit">
        </form> --}}
        {{-- <div>{{$id_shoes}}</div> --}}
    </div> <!-- end container -->
</div>
@endsection