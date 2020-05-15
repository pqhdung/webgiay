
<nav id="main-menu" class="menu collapse navbar-collapse pull-right">
    <ul class="nav navbar-nav">
      <li class="menu-item menu-item-has-children active">
        <a href="/">Home</a>
        <ul class="sub-menu children">
          <li class="menu-item"><a href="index-01.html">Home 01</a></li>
        </ul>
      </li>
      @foreach ($producer as $Producer)
      <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
      <a href="/producer/{{$Producer->id}}/{{str_replace(" ","-",$Producer->name_producer)}}">{{$Producer->name_producer}}</a>
        <ul class="mega-menu sub-menu">
          <li>
            <div class="container">
              @foreach ($Producer->Category as $cate)
              <div class="menu-item col-sm-3">
              <h6 class="menu-title"><a href="/category/{{$cate->id}}/{{str_replace(" ","-",$cate->name_category)}}">{{$cate->name_category}}</a></h6>
              </div>
              @endforeach

              <div class="menu-item col-sm-3">
                <div class="menu-content">
                  <a href="#">
                    <img src="../../fontend/images/menu/shop.png" alt="Image">
                    <h3 class="content-title">
                      {{$Producer->nameproducer}}
                    </h3>
                  </a>
                </div><!-- /.menu-content -->
              </div>
            </div>
          </li>
        </ul>
      </li>
      @endforeach
      <li class="menu-item"><a href="/all-shoes">All Product</a></li> 

    </ul><!-- /.navbar-nav -->
  </nav><!-- /.navbar-collapse -->