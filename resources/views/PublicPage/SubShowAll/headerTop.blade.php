<div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 top-left text-left">
          <p class="top-contact">
            <i class="ti-email"></i><span><a href="#">support@company.com</a></span>
            <i class="ti-mobile"></i><span>+61 3 8376 6284</span>
          </p><!-- /.top-contact -->

        </div><!-- /.top-left -->

        <div class="col-sm-7 top-right text-right">
          <div id="currency" class="currency dropdown">
            <a href="#" class="current-title">USD $</a>
            <ul class="unsorted-list">
              <li>EURO &euro;</li>
              <li>POUND &pound;</li>
              <li>Franc &#x20a3;</li>
            </ul>
          </div>

          <div id="language" class="language dropdown">
            <a href="#" class="current-title">English</a>
            <ul class="unsorted-list">
              <li>Chiense</li>
              <li>French</li>
              <li>Spanish</li>
              <li>Mandarin</li>
            </ul>
          </div>

          <div class="wish-list">
            <a href="#" class="current-title">Wishlist</a>
            <span class="count">0</span>
            <span><i class="ti-heart"></i></span>
          </div>

          <div class="checkout"><a href="/checkout">Checkout <i class="ti-check-box"></i></a></div><!-- /.checkout -->

          <div class="my-account dropdown">
            @if(Auth::check())
              <a href="#">{{Auth::user()->name}}<i class="ti-user"></i></a>
              <ul class="unsorted-list">
              <li><a href ="/logout">Log out</a></li>
              
            @else
              <a href="#">My Account<i class="ti-user"></i></a>
              <ul class="unsorted-list">
              <li><a href="/login">Log In</a></li>
              
            @endif
            <li><a href="#">My Profile</a></li>
              <li><a href="#">My Wishlist</a></li>
              <li><a href="cart.html">My Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </div><!-- /.my-account -->
          
        </div><!-- /.top-right -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>