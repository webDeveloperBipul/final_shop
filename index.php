
<?php require_once('part/head.php');?>



<body>
<div class="page-container">

	<div id="top-nav" class="bg-light smaller-font-size text-muted">
		<nav class="navbar-expand-md container px-3">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link text-muted" href="#"><i class="la la-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-muted" href="#"><i class="la la-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-muted" href="#"><i class="la la-share"></i> <span class="hidden-xs hidden-sm hidden-md">Checkout</span></a>
			  </li>
			</ul>
			
			<ul class="navbar-nav float-right" data-component-currency>
			  <li class="nav-item dropdown float-right">
				<a class="nav-link dropdown-toggle text-muted" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-dollar"></i>&ensp;USD</a>
				
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
				
			  </li>

			  <li class="nav-item dropdown float-right" data-component-language>
				<a class="nav-link dropdown-toggle text-muted" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-flag"></i>&ensp;EN</a>
				
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			</ul>
		  </div>
		  
		</nav>
	</div>		

	<header class="container mt-5">
		
	  <div class="row">
		  
		<div class="col-md-3">
			<a href="/" class="logo">
				<!-- img src="img/logo.png"--> 
				<h1 class="text-dark"><i class="text-secondary la la-plug"></i><span>electr<span class="text-secondary">o.</span></span></h1>
				<small class="text-dark">electronics shopping mall</small>
				
			</a>
		</div>

		<div class="col-md-5">
		   
		   <form class="">
	
				<div class="input-group input-group-lg mb-3" id="search-box" data-component-category>
				  <input type="text" class="form-control default-font-size" placeholder="Search product" aria-label="Search product">

					<select class="custom-select input-group-append form-control-lg no-border-x default-font-size">
						<option selected="">All categories</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					  </select>
				  
				  <div class="input-group-append">
					  <button class="btn btn-primary" type="button"><i class="la la-search"></i></button>
				  </div>
				</div>
			</form>
			
		</div>

		<div class="col-md-4">
			
			<div class="dropdown float-right" id="mini-cart" data-component-cart>
			  <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-shopping-cart d-inline-block" style="font-size:42px"><span class="cart-items" data-total_items>3</span></i>&ensp; <div class="d-inline-block text-dark"><span class="small d-block text-left">Your cart</span><span class="font-weight-bold" data-total>$3500.05</span></div>
			  </a>

			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
	
	
						  <table class="table table-sm table-striped">
									<tbody><tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/iphone_1-47x47.jpg" alt="iPhone" title="iPhone" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=40">iPhone</a>
											</td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$123.20</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('1');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
									<tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=43"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/macbook_1-47x47.jpg" alt="MacBook" title="MacBook" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=43">MacBook</a>
											</td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$602.00</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('2');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
									<tr>
							  <td class="text-center"> <a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=30"><img src="http://opencart3100.givan.ro/image/cache/catalog/demo/canon_eos_5d_1-47x47.jpg" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-thumbnail"></a> </td>
							  <td class="text-left"><a href="http://opencart3100.givan.ro/index.php?route=product/product&amp;language=en-gb&amp;product_id=30">Canon EOS 5D</a>
											<br>
								- <small>Select Red</small>                         </td>
							  <td class="text-right">x 1</td>
							  <td class="text-right">$98.00</td>
							  <td class="text-center"><button type="button" onclick="cart.remove('3');" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Remove"><i class="la la-times"></i></button></td>
							</tr>
						  </tbody></table>

						  <div>
							<table class="table table-sm table-bordered">
										<tbody><tr>
								<td class="text-right"><strong>Sub-Total</strong></td>
								<td class="text-right">$681.00</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
								<td class="text-right">$6.00</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>VAT (20%)</strong></td>
								<td class="text-right">$136.20</td>
							  </tr>
										<tr>
								<td class="text-right"><strong>Total</strong></td>
								<td class="text-right">$823.20</td>
							  </tr>
									  </tbody></table>
							<p class="text-right"><a href="http://opencart3100.givan.ro/index.php?route=checkout/cart&amp;language=en-gb"><strong><i class="la la-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="http://opencart3100.givan.ro/index.php?route=checkout/checkout&amp;language=en-gb"><strong><i class="la la-share"></i> Checkout</strong></a></p>
						  </div>
	
	
			  </div>
			</div>
			
			<div class="dropdown float-right" id="mini-user" data-component-user>
			  <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-user d-inline-block" style="font-size:42px"></i>&ensp; 
				
				<div class="d-inline-block text-dark" data-if="login">
					<span class="small d-block text-left">My account</span>
					<span class="font-weight-bold">Login/Register</span>
				</div>
				
			  </a>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Register</a>
				<a class="dropdown-item" href="#">Login</a>
			  </div>
			</div>
			
		</div>
	  
	  </div>

	
      <nav class="navbar navbar-light bg-white  rounded navbar-expand-md mt-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       

        <div class="collapse navbar-collapse" id="containerNavbar">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown categories-dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-bars"></i>&ensp;Categories <i class="la la-angle-down float-right"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#"><i class="la la-desktop"></i> Desktops</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>



            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>


			<li class="nav-item dropdown dropdown--canvas dropdown--canvas--left dropdown--canvas--sm">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Store Location
				</a>
				<div class="dropdown-menu">
					Hello!
				</div>
			</li>

            <li class="nav-item">
              <a class="nav-link" href="#">Delivery Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Support</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">FAQ</a>
                <a class="dropdown-item" href="#">Our Story</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


    </header>
    
    
    <div class="content">
    
    	<div id="slider" class="carousel slide slider">
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
			  <div class="">
				<div class="carousel-caption d-none d-md-block text-left container">
				  <div class="caption-text float-left col-md-4">
					  <h1 class="font-weight-bold">iMac Pro 2.</h1>
					  <p class="font-weight-normal pb-4">Mobile ready, outstanding performance<br/> with gorgeous display</p>
					  <p><a class="btn btn-md btn-outline-primary font-weight-bold px-5 py-2" href="#" role="button">Buy now &ensp; <i class="la la-arrow-right"></i></a></p>
				  </div>
				  <img src="img/ipad.png" class="float-right col-md-8">
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="second-slide bg-light" alt="Second slide">
			  <div class="">
				<div class="carousel-caption d-none d-md-block container">
				  <h1>Another example headline.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="third-slide bg-light" alt="Third slide">
			  <div class="">
				<div class="carousel-caption d-none d-md-block text-right container">
				  <h1>One more for good measure.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
			  </div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>

		<!-- div class="container mb-5">
			<div class="row">
				<div class="col-md-4 banner p">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner1-cr-390x180.png" alt="">
					</a>
				</div>
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner2-cr-390x180.png" alt="">
					</a>
				</div>
				<div class="col-md-4 banner">
					<a href="">
						<img class="img-fluid" src="http://xezpro.nicoletthemes.com/image/cache/catalog/banner3-cr-390x180.png" alt="">
					</a>
				</div>
			</div>
		</div -->


    <div class="container products-tab-carousel">

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Featured products</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Popular products</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Bestseller products</a>
		  </div>
		  
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


		<section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597" data-products='{"1": "Mac pro", "2":"Ipod"}'>

			<div class="owl-carousel owl-theme">

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/1.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						
						<div class="btngroup">
						  <a type="button" class="btn btn-sm btn-secondary" title="Add to Cart" href="" data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
							  <i class="la la-shopping-cart"></i> Add to cart
						  </a>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/2.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/3.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/4.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/5.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/6.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

												
						
					</article><!-- product -->
					
				</div> <!-- col-md -->


			</div><!-- row -->
		</section> <!-- products -->

		  
		  </div>
		  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  
		  </div>
		  
		  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		  
		  </div>
		</div>
    
    </div>		




<section id="parallax_1" class="module parallax white mb-3">
<div>
<div class="container">
<h3>Parallax call to action</h3> <p>Kale chips wolf banh mi, Tumblr polaroid Truffaut semiotics Echo Park<br> listicle sustainable meditation cold-pressed deep v twee keytar</p> <a href="/index.php?route=product/category&amp;path=20" class="btn btn-default">Buy now!</a> </div>
</div>
</section>


    <div class="container products-tab-carousel">

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Featured products</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Popular products</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Bestseller products</a>
		  </div>
		  
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


		<section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597">

			<div class="owl-carousel owl-theme">

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/2.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/2.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/3.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/4.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>				

						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/5.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>

						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>

						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						</div>


						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				<div class="item" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="img/products/6.jpg" class="img-fluid" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-product-description>
							Lorem ipsum
						</span>
						
						<div class="price-group">
							<div class="old-price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>385</span>
							</div>
							
							<div class="price">
								<span class="currency" data-product-currency>$</span> <span data-product-price>315</span>
							</div>
						</div>						

						
						
						<div class="btngroup">
						  <button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
							  <i class="la la-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-link" title="Add to compare" data-product-compare-url>
							  <i class="la la-exchange"></i>
						  </button>

						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url data-vvveb-action="addCart">
							  <i class="la la-shopping-cart"></i> Add to cart
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->


			</div><!-- row -->
		</section> <!-- products -->

		  
		  </div>
		  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  
		  </div>
		  
		  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		  
		  </div>
		</div>
    
    </div>		


    </div>

	<footer class="bg-faded text-muted py-5 mt-5">
	  <div class="container">
		<div class="row">
				  <div class="col-sm-3">
			  <h5>Information</h5>
			  <ul class="list-unstyled">
				  <li><a href="#">About Us</a></li>
				  <li><a href="#">Delivery Information</a></li>
				  <li><a href="#">Privacy Policy</a></li>
				  <li><a href="#">Terms &amp; Conditions</a></li>
			  </ul>
			</div>
				<div class="col-sm-3">
			<h5>Customer Service</h5>
			<ul class="list-unstyled">
			  <li><a href="#">Contact Us</a></li>
			  <li><a href="#">Returns</a></li>
			  <li><a href="#">Site Map</a></li>
			</ul>
		  </div>
		  <div class="col-sm-3">
			<h5>Extras</h5>
			<ul class="list-unstyled">
			  <li><a href="#">Brands</a></li>
			  <li><a href="#">Gift Certificates</a></li>
			  <li><a href="#">Affiliate</a></li>
			  <li><a href="#">Specials</a></li>
			</ul>
		  </div>
		  <div class="col-sm-3">
			<h5>My Account</h5>
			<ul class="list-unstyled">
			  <li><a href="#">My Account</a></li>
			  <li><a href="#">Order History</a></li>
			  <li><a href="#">Wish List</a></li>
			  <li><a href="#">Newsletter</a></li>
			</ul>
		  </div>
		</div>
			<p class="float-right">
			  <a href="#">Back to top</a>
			</p>
	  </div>
	</footer>
</div>    



	<div class="alert alert-light alert-dismissible fade alert-top" role="alert">
	  <div class="container">
		  
		  <div class="message">
			Product was added to cart.
		  </div>
		  
		  
		  <button type="button" class="close"  aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
	  </div>	
	</div>    

<?php require_once('part/footer.php');?>


