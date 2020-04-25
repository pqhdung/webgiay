<header id="masthead" class="masthead header-03 navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="./">
        <img src="fontend/images/logo.png" alt="Site Logo">
      </a><!-- /.navbar-brand -->
    </div>

    <nav id="main-menu" class="menu collapse navbar-collapse pull-right">
      <ul class="nav navbar-nav">
        <li class="menu-item menu-item-has-children active">
          <a href="#">Home</a>
          <ul class="sub-menu children">
            <li class="menu-item"><a href="index-01.html">Home 01</a></li>
          </ul>
        </li>
        @foreach ($producer as $Producer)
        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
          <a href="#">{{$Producer->name_producer}}</a>
          <ul class="mega-menu sub-menu">
            <li>
              <div class="container">
                @foreach ($Producer->Category as $cate)
                <div class="menu-item col-sm-3">
                  <h6 class="menu-title"><a href="checkout.html">{{$cate->name_category}}</a></h6>
                </div>
                @endforeach

                <div class="menu-item col-sm-3">
                  <div class="menu-content">
                    <a href="#">
                      <img src="fontend/images/menu/shop.png" alt="Image">
                      <h3 class="content-title">
                        {{$Producer->name_producer}}
                      </h3>
                    </a>
                  </div><!-- /.menu-content -->
                </div>
              </div>
            </li>
          </ul>
        </li>
        @endforeach
        <li class="menu-item"><a href="#">Buy</a></li> 

      </ul><!-- /.navbar-nav -->
    </nav><!-- /.navbar-collapse -->

  </header><!-- /#masthead -->