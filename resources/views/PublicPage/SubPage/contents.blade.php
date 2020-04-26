@extends('PublicPage.master')
@section('section-contents')
<style>
.thumb {
    width: 937.33px;
    height: 713.72px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    object-fit: cover;
}
/* fit hình ảnh tự động fit theo heigh width của thẻ */
</style>
<div class="section-contents">

    @include('PublicPage.SubPage.features')<!-- /.features -->


    <section class="collection collection-03">

      <div class="collection-top">
        <?php
            $num =1;
        ?>
        @foreach ($shoes as $Shoes)
        @if ($num%2 !=0)
        <div class="item">
            <div class="col-sm-6">
              <div class="item-thumbnail "><img class="img-responsive thumb" src="upload/air-max-2090-shoe-white-3.jpg" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            </div>
  
            <div class="col-sm-6">
              <div class="item-details">
                <h2 class="item-no">0{{$num}}.</h2><!-- /.item-no -->
                <h3 class="item-title">{{$Shoes->name}}</h3><!-- /.item-title -->
                <p class="description">
                  {{$Shoes->product}}
                </p><!-- /.description -->
                <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
                <div class="item-price"><span class="currency"></span><span class="price">{{number_format($Shoes->price,0, ",",".")}}</span> vnd</div><!-- /.item-price -->
              </div><!-- /.item-details -->
            </div>
          </div><!-- /.item -->
          @else
          <div class="item">
            <div class="col-sm-6">
              <div class="item-details">
                <h2 class="item-no">0{{$num}}.</h2><!-- /.item-no -->
                <h3 class="item-title">{{$Shoes->name}}</h3><!-- /.item-title -->
                <p class="description">
                    {{$Shoes->product}}
                </p><!-- /.description -->
                <a href="#" class="btn">Start shopping now5555555555hhhhhhhhh</a><!-- /.btn -->
                <div class="item-price"><span class="currency"></span><span class="price">{{number_format($Shoes->price,0, ",",".")}}</span> vnd</div><!-- /.item-price -->
              </div><!-- /.item-details -->
            </div>

            <div class="col-sm-6">
              <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/2.jpg" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            </div>
          </div><!-- /.item -->
        @endif
        <?php $num++; ?>
        @endforeach
  
      </div><!-- /.collection-top -->

      <div class="collection-middle">
        <div class="col-sm-6">
          <div class="item text-center">
            <h2 class="item-no">05.</h2><!-- /.item-no -->
            <h3 class="item-title">Blue sharkskin</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/5.png" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>

        <div class="col-sm-6">
          <div class="item text-center">
            <h2 class="item-no">06.</h2><!-- /.item-no -->
            <h3 class="item-title">Blue sharkskin</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/6.png" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>

        <div class="col-sm-12">
          <div class="item text-center">
            <h2 class="item-no">07.</h2><!-- /.item-no -->
            <h3 class="item-title">Blue sharkskin</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail">
              <img class="img-responsive" src="fontend/images/home06/7.png" alt="Item Thumbnail">
              <img class="img-responsive" src="fontend/images/home06/8.png" alt="Item Thumbnail">
              <img class="img-responsive" src="fontend/images/home06/9.png" alt="Item Thumbnail">
            </div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>
      </div><!-- /.collection-middle -->

      <div class="collection-bottom">
        <div class="col-sm-4">
          <div class="item text-center">
            <h2 class="item-no">08.</h2><!-- /.item-no -->
            <h3 class="item-title">Classic shoes</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/10.png" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>

        <div class="col-sm-4">
          <div class="item text-center">
            <h2 class="item-no">09.</h2><!-- /.item-no -->
            <h3 class="item-title">Messenger bags</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/11.png" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>

        <div class="col-sm-4">
          <div class="item text-center">
            <h2 class="item-no">10.</h2><!-- /.item-no -->
            <h3 class="item-title">Leather belts</h3><!-- /.item-title -->
            <p class="description">
              That afternoon I had been worrying my brokers about investments to give my mind something to work on, and on my way home
            </p><!-- /.description -->
            <div class="item-thumbnail"><img class="img-responsive" src="fontend/images/home06/12.png" alt="Item Thumbnail"></div><!-- /.item-thumbnail -->
            <div class="item-price"><span class="currency">$</span><span class="price">454.00</span></div><!-- /.item-price -->
            <a href="#" class="btn">Start shopping now</a><!-- /.btn -->
          </div><!-- /.item -->
        </div>

      </div><!-- /.collection-bottom -->
    </section><!-- /.collection -->

  </div>
  @endsection