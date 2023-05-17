<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.fruitblu.com/oxo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 11:20:49 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OXO e-commerce</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script src="../../js/cufon-yui.js" type="text/javascript"></script>
<script src="../../js/Comfortaa_400.font.js" type="text/javascript"></script>


<script type="text/javascript">
			Cufon.replace('h1', { fontFamily: 'Comfortaa' });
			Cufon.replace('h2', { fontFamily: 'Comfortaa' });
			Cufon.replace('h3', { fontFamily: 'Comfortaa' });
			Cufon.replace('h4', { fontFamily: 'Comfortaa' });


		</script>

		<!--[if gte IE 9]>
	<script type="text/javascript">
		Cufon.set('engine', 'canvas');
	</script>
<![endif]-->
		</head>

<body>
<div id="Layout">
<!-- BEGIN HEADER -->
  <div id="Top">
    <div id="Logo">
      <h1><a href="index-2.html"><img src="../../images/logo.jpg" alt="OXO" /></a></h1>
    </div><!-- end div #Logo -->
    <div id="TopContent">
      <ul>
        <li class="cart"><a href="shopping-cart.html">Shopping Cart</a></li>
        <li class="cart-value"><span class="blue"><a href="#">6 item</a></span> | <span>$3000.00</span></li>
      </ul>
    </div>      <!-- end div #TopContent -->

    <div id="Nav">
      <div class="NavBody">
        <ul>
          <li> <a href="#">Homepage</a></li>
          <li> <a href="#">NEW PRODUCT</a></li>
          <li> <a href="#">SPECIALS</a></li>
          <li> <a href="#">MY ACCOUNT</a></li>
          <li> <a href="#">CONTACTS</a></li>
          <li class="search">
            <input type="image" class="action" src="../../images/search-action.jpg" />
            <input type="text" class="searchfeild" />
          </li>
        </ul>
      </div>
    </div>      <!-- end div #Nav -->

  </div>      <!-- end div #Top -->
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



                <div class="cards">
                	<ul>
                    	<li><a href="#"><img src="../../images/paypal.gif" alt="" /></a></li>
                      <li><a href="#"><img src="../../images/card-visia.gif" alt="" /></a></li>
                        <li><a href="#"><img src="../../images/card-master.gif" alt="" /></a></li>
                    </ul>
                </div>

            </div>   <!-- end div #LeftSide -->
            <div class="RightSide">

				<div class="bredCrum">
					<h4><a href="index-2.html">Home</a>   >>    <a href="Category.html">Category</a>  >>   <a href="#" class="select"> {{ $product->name }} </a></h4>
			  </div>
             	<div class="productDetial">
					<div class="mainThumb"><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="471" height="260"/></div>
<div class="rightProduct">

		  <div class="clr"></div>
				</div>
				</div>
				<div class="detailInfo">
					<h2>Product Details</h2>
					<p>{{ $product->description }}</p>
					<p class="add">This product was added to our catalog 24 august 2009s</p>
				</div>

				<div class="clr"></div>
                <div class="paging">
                   <div class="pagingDiv price">{{ $product->price }} TL</div>
                    <div class="pagingInfo"><img src="../../images/plus.gif" alt=""/><a href="#">Add to my cart</a>| <a href="#">Review my product</a></div>
                <div class="clr"></div>
                </div>
                           </div>    <!-- end div #RightSide-->

            <div class="clr"></div>     <!-- BEGIN FOOTER -->
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

<!-- Mirrored from www.fruitblu.com/oxo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 11:20:49 GMT -->
</html>
