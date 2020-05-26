<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>Shopaholic - e-Commerce HTML5 Template</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" type="text/css" href="../../fontend/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../fontend/assets/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../../fontend/assets/css/et-line-icons.css">  

  <link rel="stylesheet" href="../../fontend/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../fontend/assets/css/slick.css">
  <link rel="stylesheet" href="../../fontend/assets/css/magnific-popup.css"> 
  <link rel="stylesheet" href="../../fontend/assets/css/style.css">
  <link rel="stylesheet" href="../../fontend/assets/css/themes.css">

  <link rel="stylesheet" href="../../fontend/assets/css/pages/portfolio.css">
  <link rel="stylesheet" href="../../fontend/assets/css/pages/register.css">

  
  <link rel="stylesheet" href="../../fontend/assets/css/shop/shop.css">
  <link rel="stylesheet" href="../../fontend/assets/css/shop/shop-details.css">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="../../fontend/assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>

<body>


  <header id="masthead" class="masthead">

    @include('PublicPage.SubShowAll.headerTop')<!-- /.header-top -->

    @include('PublicPage.SubShowAll.headerMiddle')<!-- /.header-middle -->

    @include('PublicPage.SubShowAll.menuShow')<!-- /.header-bottom  menu-->

    

  </header><!-- /#masthead -->

  @yield('main')<!--/.portfolio-->

  @include('PublicPage.SubShowAll.padding')<!-- /.section-padding -->

  @include('PublicPage.SubShowAll.footer')


  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>


  <script src="../../fontend/assets/js/plugins.js"></script>
  <script src="../../fontend/assets/js/main.js"></script>
  <script src="../../fontend/assets/js/jquery-ui.min.js"></script>
  <script src="../../fontend/assets/js/bootstrap-rating.min.js"></script>


  <script type="text/javascript">

    jQuery(document).ready(function($) {
      "use strict";
      jQuery('.rating-tooltip-manual').rating({
        extendSymbol: function () {
          var title;
          $(this).tooltip({
            container: 'body',
            placement: 'bottom',
            trigger: 'manual',
            title: function () {
              return title;
            }
          });
          $(this).on('rating.rateenter', function (e, rate) {
            title = rate;
            $(this).tooltip('show');
          })
          .on('rating.rateleave', function () {
            $(this).tooltip('hide');
          });
        }
      });

      /*-------- Filter By Price -----------*/

      jQuery( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
      });
      jQuery( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    });


  </script>
<script src="../../fontend/assets/js/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
@yield('script')
</body>
</html>