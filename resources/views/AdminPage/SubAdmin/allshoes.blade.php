@extends('AdminPage.mainAdmin')
@section('admin-main')
<style>
.thumb {
    width: 80px;
    height: 60px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    object-fit: cover;
}

/* fit hình ảnh tự động fit theo heigh width của thẻ */
</style>
      
<div class="wrapper">

            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Datatable</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                   
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Sex</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Inventory</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Updated_at</th>
                                    <th>Created_at</th>
                                   
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($shoes as $singleshoes)
                                <tr>
                                    
                                    <td>{{$singleshoes ->id}}</td>
                                    <td>{{$singleshoes ->name}}</td>
                                    <td>{{$singleshoes ->status}}</td>
                                    <td>{{ \Illuminate\Support\Str::limit(strip_tags($singleshoes->product),50,'...')}}</td>
                                    
                                    <td>
                                        
                                        @foreach($category as $singlecategory)
                                            @if($singleshoes ->id_category == $singlecategory ->id)
                                            {{$singlecategory->producer->name_producer}} - {{ $singlecategory->name_category}}
                                            @endif
                                        @endforeach
                                        
                                    </td>
                                    <td>
                                        @if($singleshoes ->sex == 1)
                                        Male
                                        @elseif($singleshoes ->sex == 2)
                                        Female
                                        @endif
                                    </td>
                                    <td>{{$singleshoes ->color}}</td>
                                    <td>{{$singleshoes ->size}}</td>
                                    <td>{{$singleshoes ->inventory}}</td>
                                    <td>{{$singleshoes ->price}}</td>
                                    <td><img class="thumb" src="../../upload/{{$singleshoes->images}}" alt="Item Thumbnail"></td>
                                    <td>{{$singleshoes ->updated_at}}</td>
                                    <td>{{$singleshoes ->created_at}}</td>

                                    
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
@endsection