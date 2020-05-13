@extends('PublicPage.showAll')
@section('main')
<style>
    .thumb {
    width: 90px;
    height: 104px;
    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    object-fit: cover;
}
</style>
<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Shopping Cart</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              Duis sed odio sit amet nibh vulputate cursus a sit amet. 
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li class="active">Cart</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->

  <section class="cart-section">
    <div class="section-padding">
      <div class="container">
        <div class="per-order-items">

          <table class="cart-table">
            <tbody>
              <tr class="order-head">
                <th>PRODUCTS</th>
                <th>UNIT PRICE</th>
                <th>QUANTITY</th>
                <th>SUBTOTAL</th>
                <th>UPDATE</th>
              </tr>
              
              @foreach ($product_cart as $cartitem)
              <tr>
                <td class="order-item">
                  <button class="del"><i class="ti-trash"></i></button>
                  <div class="item-thumbnail">
                    <img class="thumb" src="upload/{{$cartitem['item']['images']}}" alt="images">
                  </div><!-- /.item-thumbnail -->

                  <div class="item-details">
                    <h3 class="item-title">{{$cartitem['item']['name']}}</h3>
                    <div class="product-meta">
                      <span class="meta-id"> Color: <span class="meta-about"></span>{{$cartitem['item']['color']}}</span>
                    <span class="meta-id"> Size: <span class="meta-about"></span>{{$cartitem['item']['size']}}</span>
                    </div><!-- /.product-meta -->
                  </div><!-- /.item-details -->
                </td>
                <td class="unit-price"><span class="price">{{number_format($cartitem['price'],0, ",",".")}}</span><span class="currency"> vnd</span>
                </td>

                <td class="order-count">
                  <div class=" col-1 col-sm-2 col-md-2">
                    <input class="form-control" type="number" id="itemQty" value="{{$cartitem['Qty']}}" min="0" max="10" step="1"/>
                  </div><!-- /.cart-counter -->
                </td>
                

                <td class="total-price tien"><span class="price">{{number_format($cartitem['price']*$cartitem['Qty'],0, ",",".")}}</span><span class="currency"> vnd</span></td>

                <td class="edit"><a class="btn btn-success" id="updateCart" data-key="{{$cartitem['item']['id']}}"><i class="ti-pencil" ></i></a></td>
              </tr>  
              @endforeach            

            </tbody>
          </table><!-- /.cart-table -->

          <div class="cart-buttons">
            <button class="clear-cart">Clear shopping cart</button>
            <button class="update-cart">Update shopping cart</button>
            <button class="continue pull-right">Continue shopping</button>
          </div><!-- /.cart-buttons -->
        </div><!-- /.per-order-items -->

        {{-- <div class="billing-table">   
          <div class="row">
            <div class="discount-details col-md-4 col-sm-6">
              <h3 class="title">Have a cupon?</h3>
              <form action="#">
                <input class="form-input" type="text" placeholder="Cupon Code">
                <button type="submit" class="btn submit-code">Apply Code</button>
              </form>
            </div><!-- /.discount-details -->

            <div class="shipping-details col-md-4 col-sm-6">
              <h3 class="title">Calculating Shipping</h3>
              <form action="#">
                  <select name="country" id="Country-name" class="form-input">
                    <option value="">Country*</option>
                    <option value="1">USA</option>
                    <option value="2">Franch</option>
                    <option value="3">Germany</option>
                    <option value="4">Russia</option>
                  </select>

                  <select name="country" id="state-province" class="form-input">
                    <option value="">State/Province*</option>
                    <option value="1">Florida</option>
                    <option value="2">NY</option>
                    <option value="3">LA</option>
                    <option value="4">PH</option>
                  </select>

                  <input id="zip-code" class="form-input" type="text" placeholder="Post/Zip Code" required="">

                  <button class="btn btn-xs" type="submit">Estimate</button>

              </form>
            </div><!-- /.shipping-details -->

            <div class="billing-order col-md-4 col-sm-6">
              <div class="order-cost">
                <ul>
                  <li>
                    <div class="bill-name">Sub-total</div>
                    <div class="amount"><span class="currency">$</span><span class="count">395.00</span></div>
                  </li>
                  <li>
                    <div class="bill-name">Shipping</div>
                    <div class="amount"><span class="currency">$</span><span class="count">25.00</span></div>
                  </li>
                  <li>
                    <div class="bill-name total">Order Total</div>
                    <div class="amount total"><span class="currency">$</span><span class="count">370.00</span></div>
                  </li>
                </ul>
                <button class="btn">Proceed to checkout</button>
              </div><!-- /.order-cost -->
            </div><!-- /.billing-order -->
          </div><!-- /.row -->
        </div><!-- /.billing-table --> --}}
      </div><!-- /.contaier -->
    </div><!-- /.section-padding -->
  </section><!-- /.cart-section -->
@endsection

@section('script')
<script>
  $(document).ready(function () {
      $("#updateCart").click(function () {
          var qty = $(this).parents("tr").find("#itemQty").val();
          var idsp = $(this).attr("data-key");
          // alert(qty);
          // alert(idsp);

          $.get("update-to-cart/" + idsp + "/" + qty + "/", function (data) {
              // $(".tien").append(data);

              if (data == 1) {
                  alert("update thành công");
                  location.reload();
              } else {
                  alert("update thất bại");
                  location.reload();
              }
          });
      });
  });
</script>
@endsection