@extends('PublicPage.showAll')
@section('main')
<style>
.thumb {
    width: 258.5px;
    height: 276.67px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    object-fit: cover;
}
.thumblist {
    width: 360.50px;
    height: 295.50px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    object-fit: cover;
}
/* fit hình ảnh tự động fit theo heigh width của thẻ */
</style>
<section class="page-name-sec page-name-sec-01">
  <div class="section-padding">
    <div class="container">
    <h3 class="page-title">{{$title}}</h3><!-- /.page-title -->

      <div class="row">
        <div class="col-sm-6">
          <p class="description">
            Duis sed odio sit amet nibh vulputate cursus a sit amet. 
          </p><!-- /.description -->
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb text-right">
            <li><a href="/">Home</a></li>
            <li><a href="#">{{$titleProduct}}</a></li>
            <li class="active">{{$title}}</li>
          </ol><!-- /.breadcrumb -->
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.section-padding -->
</section><!-- /.page-name-sec -->

<section class="shop-contents">
  <div class="section-padding">
    <div class="container">

      <div class="product-filter">
        <div class="row">
          <div class="col-md-6">
            <div class="filter-view">
              <ul role="tablist">
                <li class="grid-view active" id="grid-top"><a href="#grid" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                <li id="list-top" class="list-view"><a href="#list" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
              </ul>
            </div><!-- /.filter-view -->

            <div class="category-select">
              <select data-select-like-alignement="never" class="category drop-select">
                <option value="">Sort by</option>
                <option value="2">Name</option>
                <option value="3">Size</option>
                <option value="4">Color</option>
                <option value="5">Brand</option>
              </select>
            </div><!-- /.category-select -->

            <span class="filter-text">Showing 1-9 of 36 Products</span>
          </div>

          <div class="col-md-6 text-right">
            <div class="show-item">
              <select id="by-price" data-select-like-alignement="never" class="by-price drop-select">
                <option value="">By price</option>
                <option value="2">50</option>
                <option value="3">100</option>
                <option value="4">150</option>
                <option value="5">200</option>
              </select>

              <select id="by-size" data-select-like-alignement="never" class="by-size drop-select">
                <option value="">By price</option>
                <option value="2">SM</option>
                <option value="3">M</option>
                <option value="4">L</option>
                <option value="5">XL</option>
                <option value="6">XXL</option>
              </select>

              <select id="by-color" data-select-like-alignement="never" class="by-color drop-select">
                <option value="">By price</option>
                <option value="2">Black</option>
                <option value="3">White</option>
                <option value="4">Gray</option>
                <option value="5">Lime Red</option>
                <option value="6">Light Blue</option>
                <option value="7">Yellow</option>
              </select>
            </div><!-- /.show-item -->
          </div><!-- /.col-md-6 -->
        </div>
      </div><!-- /.product-filter -->


      
    <div class="shop-products">
        <div class="row">
        
          <div class="tab-content">

          
            <div role="tabpanel" class="tab-pane fade active in text-center" id="grid">
            @foreach($shoes as $singleshoes)
              <div class="col-sm-3">
                <div class="item">
                  <div class="item-thumbnail">
                  <a class="" href="/product/{{$singleshoes->id}}/{{str_replace(" ","-",$singleshoes->name)}}">
                      <img class = "thumb" src="../../upload/{{$singleshoes->images}}" alt="Item Thumbnail">
                    </a>
                  </div><!-- /.item-thumbnail -->

                  <div class="item-content">
                    <div class="buttons">
                      <button class="add-to-cart"><a href="{{route('themvaogiohang',$singleshoes->id)}}">Add to cart<i class="fa fa-shopping-cart"></i></a></button>
                      <button class="wish-list"><i class="fa fa-heart"></i></button>
                    </div><!-- /.buttons -->
                    <h3 class="item-title"><a href="/product/{{$singleshoes->id}}/{{str_replace(" ","-",$singleshoes->name)}}">{{$singleshoes->name}}</a></h3><!-- /.item-title -->
                    <div class="item-price">
                      <span class="price">{{number_format($singleshoes->price,0, ",",".")}} VNĐ</span>
                    </div><!-- /.item-price -->
                    <div class="rating">
                      <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                    </div><!-- /.rating -->

                  </div><!-- /.item-content -->
                </div><!-- /.item -->
              </div>
              @endforeach    
            </div><!-- /.tab-pane -->
             
            <div role="tabpanel" class="tab-pane fade text-left" id="list">
            @foreach($shoes as $singleshoes)  
              <div class="item media">
                <div class="item-thumbnail media-left">
                  <img class="thumblist" src="../../upload/{{$singleshoes->images}}" alt="Item Thumbnail">
                </div><!-- /.item-image -->

                <div class="item-content media-body">
                  <h3 class="item-title"><a href="/product/{{$singleshoes->id}}/{{str_replace(" ","-",$singleshoes->name)}}">{{$singleshoes->name}}</a></h3><!-- /.item-title -->

                  <div class="item-price">
                    <div class="current-price"><span class="price">{{number_format($singleshoes->price,0, ",",".")}} VNĐ</span></div><!-- /.current-price -->
                  </div><!-- /.item-price -->

                  <p class="description">
                  {{$singleshoes->product}}
                  </p><!-- /.description -->

                  <div class="item-bottom">
                    <div class="buttons">
                      <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i><a href="{{route('themvaogiohang',$singleshoes->id)}}"></a></button>
                      <button class="wish-list"><i class="fa fa-heart"></i></button>
                      <a class="fancybox" href="#"><i class="fa fa-search"></i></a>
                      <button class="compare"><i class="fa fa-exchange"></i></button>
                    </div><!-- /.buttons -->

                    <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                  </div><!-- /.item-bottom -->
                </div><!-- /.item-details -->
              </div><!-- /.item -->
              @endforeach    
            </div><!-- /.tab-pane -->
            
          </div><!-- /.tab-content -->
       
        </div><!-- /.row -->
      </div><!-- /.shop-products -->
      
            
      <div class="pagination pagination-02 text-center">
        <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
      </div><!-- /.pagination -->
    </div><!-- /.container -->
  </div><!-- /.section-padding -->
</section><!-- /.shop-contents -->
@endsection