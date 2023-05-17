<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.fruitblu.com/oxo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 11:20:35 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OXO e-commerce</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/slideshow.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript" src="js/jquery.functions.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Comfortaa_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
			Cufon.replace('h1', { fontFamily: 'Comfortaa' });
			Cufon.replace('h2', { fontFamily: 'Comfortaa' });
			Cufon.replace('h3', { fontFamily: 'Comfortaa' });
			Cufon.replace('h4', { fontFamily: 'Comfortaa' });
		</script>
<script type="text/javascript" src="assets/js/font-delicious.html"></script>

</head>
<body>
<div id="Layout">
  <!-- BEGIN HEADER -->
  <div id="Top">
    <div id="Logo">
      <h1><a href="index-2.html"><img src="images/logo.jpg" alt="OXO" /></a></h1>
    </div>
    <!-- end div #Logo -->
    <div id="TopContent">
      <ul>
        <li class="cart"><a href="shopping-cart.html">Shopping Cart</a></li>
        <li class="cart-value"><span class="blue"><a href="#">6 item</a></span> | <span>$3000.00</span></li>
      </ul>
    </div>
    <!-- end div #TopContent -->
    <div id="Nav">
      <div class="NavBody">
        <ul>
          <li> <a href="#">Homepage</a></li>
          <li> <a href="#">NEW PRODUCT</a></li>
          <li> <a href="#">SPECIALS</a></li>
          <li> <a href="#">MY ACCOUNT</a></li>
          <li> <a href="#">CONTACTS</a></li>
          <li class="search">
            <input type="image" class="action" src="images/search-action.jpg" />
            <input type="text" class="searchfeild" />
          </li>
        </ul>
      </div>
    </div>
    <!-- end div #Nav -->
  </div>
  <!-- end div #Top -->
  <!-- END HEADER -->
  <!-- BEGIN CONTENT -->
  <div id="Content">
    <div class="LeftSide">
      <div class="leftBox">
        <h3>Category</h3>
        <div class="leftBoxBody">
          <ul class="cat-link">
            <li><a href="Category.html">Lapsum category</a></li>
            <li><a href="Category.html">Lapsum category</a></li>
            <li><a href="#">Lapsum category</a></li>
            <li><a href="Category.html">Lapsum category</a></li>
            <li><a href="#">Lapsum category</a></li>
            <li><a href="Category.html">Lapsum category</a></li>
          </ul>
        </div>
      </div>
      <div class="leftBox">
        <h3>Best sellers</h3>
        <div class="leftBoxBody">
          <ul class="sellerlist">
            <li><span>1.</span>
              <p><a href="product.html">This is a best product sellers lpsum</a></p>
              <div class="clr"></div>
            </li>
            <li><span>2.</span>
              <p><a href="product.html">This is a best product sellers lpsum</a></p>
              <div class="clr"></div>
            </li>
          </ul>
          <div class="clr"></div>
        </div>
      </div>
      <div class="cards">
        <ul>
          <li><a href="#"><img src="images/paypal.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/card-visia.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/card-master.gif" alt="" /></a></li>
        </ul>
      </div>
    </div>
    <!-- end div #LeftSide -->
    <div class="RightSide">
      <!-- slideshow start -->
      <div id="slideshow">
        <ul id="slides">
          <li style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 4;"><a href="#"><img src="js/images/her.jpg" alt="" width="693" height="256" /></a><span class="slide_caption"> <a href="#" class="title">Rockablepress.com</a> Proin ac nunc eu nunc condimentum accumsan. Phasellus odio justo</span></li>
          <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3;"> <a href="#"> <img src="js/images/her.jpg" alt="" width="693" height="256" /></a><span class="slide_caption"> <a href="#" class="title">Rockablepress.com</a> Proin ac nunc eu nunc condimentum accumsan. Phasellus odio justo</span></li>
          <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2;"> <a href="#"><img src="js/images/her.jpg" alt="" width="693" height="256" /></a><span class="slide_caption"> <a href="#" class="title">Graphic River</a> Proin ac nunc eu nunc condimentum accumsan. Phasellus odio justo</span></li>
          <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 1;"> <a href="#"> <img src="js/images/her.jpg" alt="" width="693" height="256" /></a><span class="slide_caption"> <a href="#" class="title">Envato&trade;</a> Proin ac nunc eu nunc condimentum accumsan. Phasellus odio justo</span></li>
        </ul>
        <div id="slideshow_violator" class="clearfix">
          <div style="display: block;" id="project_caption"></div>
          <div id="slide_navigation" class="clearfix"></div>
        </div>
      </div>
      <div class="bredCrum" style="margin-bottom:38px;">
        <h4>URUNLER</h4>
      </div>
      <!-- slideshow end -->
      <div class="catrow">
        <ul>
            @foreach ($product as $products )
          <li class="last">
            <div class="catThum">    <a href="{{ route('product.detail', ['id' => $products->id, 'slug' => Str::slug($products->name)]) }}">
                <img width="203px" height="185.99px" src="{{ asset('storage/' . $products->image) }}" alt="Product Image">
            </a></div>
            <div class="catDetail">
              <h4><a href="product.html">{{$products->name}}</a></h4>
              <p>{{$products->price}} TL</p>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="clr"></div>
      </div>
      <div class="paging">
        <div class="pagingDiv"><span class="label">Page <b class="blue">1</b> of 6</span><span class="back"><a href="#"><img src="images/back.gif" alt="" /></a></span><span class="next"><a href="#"><img src="images/next.gif" alt="" /></a></span></div>
        <div class="pagingInfo">Dispaying 1 to 6 (of 6 products)</div>
        <div class="clr"></div>
      </div>
    </div>
    <!-- end div #RightSide-->
    <div class="clr"></div>
    <!-- BEGIN FOOTER -->
    <div id="Footer">
      <div class="footerbody">
        <div class="footercontent">Copyrights 2009 <span class="blue">Oxo Your Store</span> <a href="#">privacy Notice</a> | <a href="#">Conditions of Use</a> | <a href="#">Subscribe our feed Rss</a></div>
      </div>
    </div>
    <!-- END FOOTER -->
  </div>
  <!-- END CONTENT -->
  <div id="Footerimg"> </div>
</div>
<!-- end div #Layout -->
</body>

<!-- Mirrored from www.fruitblu.com/oxo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 11:20:40 GMT -->
</html>
