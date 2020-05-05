<div class="header-middle">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h1><a class="navbar-brand hidden-xs" href="./"><img src="fontend/images/logo.png" alt="Site Logo"></a></h1>
        </div>
        <div class="col-sm-7">
          <div class="top-search-form">
            <form action="#" method="post" class="menu-form">
              <fieldset> 
                <select name="category" id="category">
                  <option selected="selected">All Categories</option>
                  <option>Men's Wear</option>
                  <option>Women's Wear</option>
                  <option>Kid's Wear</option>
                  <option>Men's Fashion</option>
                  <option>Women's Fashion</option>
                  <option>Kid's Fashion</option>
                  <option>Home Applience</option>
                  <option>Electronics</option>
                  <option>Gadgets</option>
                  <option>Mobile</option>
                  <option>Laptop</option>
                  <option>Others</option>
                </select>
              </fieldset>

              <input type="text" placeholder="Keywords ..." class="form-control">
              <button type="submit" class="btn"><i class="fa fa-search"></i></button>
            </form>  
          </div><!-- /.top-search-form -->
        </div>
        <div class="col-sm-2">
          <div class="shop-cart">             
            <a class="cart-control" href="{{route('gio-hang')}}" title="View your shopping cart">
              <i class="ti-bag"></i>
              <span class="count">
                @if(Session::has('cart'))
                    {{Session('cart')->totalQty}}
                @else
                        0
                @endif
              </span>
              <span>Cart</span> 
            </a><!-- /.cart-control -->

            {{-- <div class="cart-items">
              <div class="widget_shopping_cart_content">
                <div class="cart-top">
                  @if(Session::has('cart'))
                  @foreach ($product_cart as $product)
                  <div class="item media">
                    <button class="btn"><i class="fa fa-close"></i></button>
                    <div class="item-thumbnail media-left">
                      <img src="fontend/images/menu/cart/1.png" alt="Item Thimbnail">
                    </div><!-- /.item-thumbnail -->
                    <div class="item-details media-body">
                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->
                      <h4 class="item-title"><a href="#">Product Name Here</a></h4><!-- /.item-title -->
                      <div class="item-price">
                        <div class="item-price">
                          <span class="currency">$</span>
                          <span class="price">65</span> 
                          <span class="item-count">3</span><!-- /.item-count -->
                        </div><!-- /.item-price -->
                      </div><!-- /.item-price -->
                    </div><!-- /.item-details -->
                  </div><!-- /.item -->
                  @endforeach
                </div><!-- /.cart-top -->

                <div class="cart-middle">
                  <button class="btn pull-left"><i class="ti-trash"></i> Empty Cart</button>
                  <div class="price-total pull-right">
                    <span>Sub total:</span>
                    <span class="currency">$</span><span class="price">2500.00</span>
                  </div><!-- /.price-total -->
                </div><!-- /.cart-middle -->

                <div class="cart-bottom">
                  <a href="cart.html" class="btn pull-left"><i class="icons icon-basket-loaded"></i> View Cart</a>
                  <a href="checkout.html" class="btn pull-right">Checkout</a>
                </div><!-- /.cart-bottom -->
              </div><!-- /.widget_shopping_cart_content -->
            </div><!-- /.scart-items -->
            @endif --}}
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>