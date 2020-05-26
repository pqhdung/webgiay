@extends('PublicPage.showAll')
@section('main')

<link rel="stylesheet" href="../../fontend/assets/css/shop/checkout.css">


<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Checkout</h3><!-- /.page-title -->

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
              <li class="active">Checkout</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->
                      @if($errors->any())                 
                   <div style="color:red;font-size:30px;font-family:arial">
                       @foreach($errors->all() as $err) 
                       {{$err}}
                       @endforeach
                   </div>
                   @endif
                  @if (session('status'))
                  <ul>
                    <li class="text-danger"> {{ session('status') }}</li>
                  </ul>
                  @endif
  <section class="checkout-section">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="billing-fields">

              <h3 class="title">Billing Details</h3>

              <form action="{{ route('postcheckout') }}" method="post" class="billing-form">
              {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                  {!!Form::text('billingfirstname', '',array('class' => 'input-text','placeholder'=>'First Name*')) !!}
                  </div>
                  <div class="col-md-6">
                  {!!Form::text('billinglastname', '',array('class' => 'input-text','placeholder'=>'Last Name*')) !!}
                  </div>  
                  <div class="col-sm-12">
                  {!!Form::text('billingaddress', '',array('class' => 'input-text','placeholder'=>'Address line*')) !!}
                  </div>
                  <div class="col-md-6">
                  {!!Form::email('billingemail', '',array('class' => 'input-text','placeholder'=>'Email*')) !!}
                  </div>
                  <div class="col-md-6">
                  {!!Form::text('billingphone', '',array('class' => 'input-text','placeholder'=>'Phone*')) !!}
                  </div>
                </div>
                   {!! Form::submit('Place your order', array('class' => 'btn')) !!}
              </form>
            </div><!-- /.billing-fields -->

            <div class="create-new">
              <form action="#" class="new-form">
                <input type="checkbox" name="new-account" value="" id="new-account" checked>
                <label for="new-customer">Create an account</label>
                <p class="description">
                  Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                </p><!-- /.description -->

                <input class="input-text" type="password" name="password" id="password02" placeholder="Password*"> 
              </form>
            </div><!-- /.create-new -->

            <div class="alt-address">
              <form action="#" class="new-form">
                <input type="checkbox" name="new-address" value="" id="new-address">
                <label for="new-customer">Ship to a different address?</label>
                <p class="description">
                  Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                </p><!-- /.description -->

                <textarea class="input-text" name="order_note" id="order_note" placeholder="Order notes"> </textarea>
              </form>
            </div><!-- /.alt-address -->
          </div>

          <div class="col-md-5">
            <h3 class="title">Have a coupon?</h3>

            <form class="checkout_coupon" method="post">
              <p class="form-row form-row-first">
                <input type="text" name="coupon_code" class="input-text" placeholder="Enter your code" id="coupon_code" value="">
              </p>
              <p class="form-row form-row-last">
                <input type="submit" class="button btn btn-red" name="apply_coupon" value="Apply">
              </p>
            </form>

            <div id="order_review" class="woocommerce-checkout-review-order">
              <h3 class="title">Your Order</h3>
            
              <table class="cart-table">
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                    <th class="product-total pull-right">Total</th>
                  </tr>
                </thead>
                @foreach ($product_cart as $cartitem)
                <tbody>
                  <tr class="cart_item">
                    <td class="product-name order-item">
                      <h3 class="item-title">{{$cartitem['item']['name']}}<span class="count"> x {{$cartitem['Qty']}}</span></h3>              
                    </td>
                    <td class="product-total pull-right">
                      <span class="amount">{{number_format($cartitem['price']*$cartitem['Qty'],0, ",",".")}}</span>           
                    </td>
                  </tr>
                @endforeach
                <tfoot>
                  <tr class="cart-subtotal">
                    <th>Subtotal</th>
                    <?php
                    $tong = 0;
                        foreach ($product_cart as $cartitem)
                        {
                            $tong += $cartitem['price']*$cartitem['Qty'];
                        }
                    ?>
                    <td class="pull-right"><span class="amount"><?php echo number_format($tong,0, ",",".") ?>VND</span></td>
                    
                  </tr>

                  <tr class="shipping-total">
                    <th>Shipping</th>
                    <td class="pull-right"><span class="amount">0.00VND</span></td>
                  </tr>

                  <tr class="order-total">
                    <th>Order Total</th>
                    <td class="pull-right"><strong><span class="amount"><?php echo number_format($tong,0, ",",".") ?>VND</span></strong> </td>
                  </tr>
                </tfoot>

              </table>

              <div class="payment-method">
                <form action="#" method="post" class="payment-form">
                  <div class="bank-method">
                    <input type="checkbox" name="bank_transfer" value="" id="bank_transfer" checked>
                    <label for="new-customer">Direct bank transfer</label>
                    <p class="description">
                      Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                    </p><!-- /.description -->
                  </div><!-- /.bank-method -->

                  <div class="cheque-method">
                    <input type="checkbox" name="cheque_transfer" value="" id="cheque_transfer">
                    <label for="new-customer">Cheque payment</label>
                  </div><!-- /.cheque-method -->

                  <div class="paypal-method">
                    <input type="checkbox" name="paypal_transfer" value="" id="paypal_transfer">
                    <label for="new-customer">Paypal</label>
                  </div><!-- /.paypal-method -->

                  <div class="agreement">
                    <input type="checkbox" name="accept" value="" id="accept">
                    <label for="accept">I have read and accept the <a href="#">Terms and conditions</a></label>
                  </div><!-- /.agreement -->
                  
                  
                </form><!-- /.payment-form -->
               
                

              </div><!-- /.payment-method -->
            </div><!-- /.order_review -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.checkout-section -->


@endsection
