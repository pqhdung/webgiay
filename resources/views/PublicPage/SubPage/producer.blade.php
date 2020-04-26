@extends('PublicPage.master')
@section('section-contents')
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
                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/1.jpg">
                        <img src="images/home08/featured/1.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/2.jpg">
                        <img src="images/home08/featured/2.jpg" alt="Item Thumbnail">
                      </a>
                      <span class="ribbon sale">Sale</span>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/3.jpg">
                        <img src="images/home08/featured/3.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/4.jpg">
                        <img src="images/home08/featured/4.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/5.jpg">
                        <img src="images/home08/featured/5.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/6.jpg">
                        <img src="images/home08/featured/6.jpg" alt="Item Thumbnail">
                      </a>
                      <span class="ribbon new">New</span>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/7.jpg">
                        <img src="images/home08/featured/7.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/8.jpg">
                        <img src="images/home08/featured/8.jpg" alt="Item Thumbnail">
                      </a>
                      <span class="ribbon sale">Sale</span>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/9.jpg">
                        <img src="images/home08/featured/9.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/10.jpg">
                        <img src="images/home08/featured/10.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/11.jpg">
                        <img src="images/home08/featured/11.jpg" alt="Item Thumbnail">
                      </a>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

                <div class="col-sm-3">
                  <div class="item">
                    <div class="item-thumbnail">
                      <a class="fancybox" href="images/home08/featured/3.jpg">
                        <img src="images/home08/featured/3.jpg" alt="Item Thumbnail">
                      </a>
                      <span class="ribbon new">New</span>
                    </div><!-- /.item-thumbnail -->

                    <div class="item-content">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                      </div><!-- /.buttons -->
                      <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                      <div class="item-price">
                        <span class="currency">$</span>
                        <span class="price">49.00</span>
                      </div><!-- /.item-price -->
                      <div class="rating">
                        <input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/>
                      </div><!-- /.rating -->

                    </div><!-- /.item-content -->
                  </div><!-- /.item -->
                </div>

              </div><!-- /.tab-pane -->

              <div role="tabpanel" class="tab-pane fade text-left" id="list">
                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/1.jpg" alt="Item Thumbnail">
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/1.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-details -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/2.jpg" alt="Item Thumbnail">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                      <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/2.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/3.jpg" alt="Item Thumbnail">
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/3.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/4.jpg" alt="Item Thumbnail">
                    <span class="ribbon new">new</span>
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/4.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/5.jpg" alt="Item Thumbnail">
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/5.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/6.jpg" alt="Item Thumbnail">
                    <span class="ribbon sale">Sale</span>
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                      <div class="previous-price"><span class="currency">$</span><span class="price">85</span></div><!-- /.previous-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/6.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/7.jpg" alt="Item Thumbnail">
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/7.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

                <div class="item media">
                  <div class="item-thumbnail media-left">
                    <img src="images/home08/featured/8.jpg" alt="Item Thumbnail">
                    <span class="ribbon new">new</span>
                  </div><!-- /.item-image -->

                  <div class="item-content media-body">
                    <h3 class="item-title"><a href="#">Product Name Here</a></h3><!-- /.item-title -->

                    <div class="item-price">
                      <div class="current-price"><span class="currency">$</span><span class="price">65</span></div><!-- /.current-price -->
                    </div><!-- /.item-price -->

                    <p class="description">
                      Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora 
                    </p><!-- /.description -->

                    <div class="item-bottom">
                      <div class="buttons">
                        <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                        <a class="fancybox" href="images/home08/featured/8.jpg"><i class="fa fa-search"></i></a>
                        <button class="compare"><i class="fa fa-exchange"></i></button>
                      </div><!-- /.buttons -->

                      <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"/></div><!-- /.rating -->

                    </div><!-- /.item-bottom -->
                  </div><!-- /.item-content -->
                </div><!-- /.item -->

              </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- /.row -->
        </div><!-- /.shop-products -->

        <div class="pagination pagination-02 text-center">
          <a href="#" class="prev"><i class="ti-angle-double-left"></i></a>
          <a href="#" class="active">1</a>
          <a href="#">244444</a>
          <a href="#">3</a>
          <a href="#">4555555</a>
          <a href="#">5</a>
          <a href="#" class="next"><i class="ti-angle-double-right"></i></a>
        </div><!-- /.pagination -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section>
  @endsection