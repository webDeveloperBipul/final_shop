

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
			
			<ul class="navbar-nav float-right">
			  <li class="nav-item dropdown float-right">
				<a class="nav-link dropdown-toggle text-muted" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-dollar"></i>&ensp;USD</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>

			  <li class="nav-item dropdown float-right">
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
			<a href="index.html" class="logo">
				<!-- img src="img/logo.png"--> 
				<h1 class="text-dark"><i class="text-secondary la la-plug"></i><span>electr<span class="text-secondary">o.</span></span></h1>
				<small class="text-dark">electronics shopping mall</small>
				
			</a>
		</div>

		<div class="col-md-5">
		   
		   <form class="">
	
				<div class="input-group input-group-lg mb-3" id="search-box">
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
			
			<div class="dropdown float-right" id="mini-cart">
			  <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-shopping-cart d-inline-block" style="font-size:42px"><span class="cart-items">3</span></i>&ensp; <div class="d-inline-block text-dark"><span class="small d-block text-left">Your cart</span><span class="font-weight-bold">$3500.05</span></div>
			  </a>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			  </div>
			</div>
			
			<div class="dropdown float-right" id="mini-user">
			  <a class="btn btn-link dropdown-toggle bg-faded p-0 chevron-big" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-user d-inline-block" style="font-size:42px"></i>&ensp; <div class="d-inline-block text-dark"><span class="small d-block text-left">My account</span><span class="font-weight-bold">Login/Register</span></div>
			  </a>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
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
    
		<div class="container">
			<div class="thickline"></div>
		</div>
		
    
    	<nav class="breadcrumb container">
		  <a class="breadcrumb-item" href="#">Home</a>
		  <a class="breadcrumb-item" href="#">Laptops</a>
		  <a class="breadcrumb-item" href="#">Slim laptops</a>
		  <span class="breadcrumb-item active">Sony Vaio</span>
		</nav>

	<div class="container">

		<div class="row">
		
			<aside class="col-3">
			
			<h4>Filter by price</h4>
			
			</aside>
			
			<section class="col-9 products" data-products="limit:4 page:0 id:1679,807,786,1597">
				<h2>Slim Laptops</h2>
				
				<div class="row">


				<div class="col-md-3" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="sample/img/products/1.jpg" class="img-fluid p-3" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-description2>
							Lorem ipsum
						</span>
						
						<div class="prce">
							<span class="currency" data-currency>$</span> <span data-price>315</span>
						</div>
						
						
						<div class="btn-group">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
							  <i class="fa fa-shopping-cart"></i> Add to Cart
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to favorites" data-product-fav-url>
							  <i class="fa fa-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to compare" data-product-compare-url>
							  <i class="fa fa-exchange"></i>
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->

				<div class="col-md-3" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="sample/img/products/1.jpg" class="img-fluid p-3" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-description2>
							Lorem ipsum
						</span>
						
						<div class="prce">
							<span class="currency" data-currency>$</span> <span data-price>315</span>
						</div>
						
						
						<div class="btn-group">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
							  <i class="fa fa-shopping-cart"></i> Add to Cart
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to favorites" data-product-fav-url>
							  <i class="fa fa-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to compare" data-product-compare-url>
							  <i class="fa fa-exchange"></i>
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->


				<div class="col-md-3" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="sample/img/products/1.jpg" class="img-fluid p-3" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-description2>
							Lorem ipsum
						</span>
						
						<div class="prce">
							<span class="currency" data-currency>$</span> <span data-price>315</span>
						</div>
						
						
						<div class="btn-group">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
							  <i class="fa fa-shopping-cart"></i> Add to Cart
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to favorites" data-product-fav-url>
							  <i class="fa fa-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to compare" data-product-compare-url>
							  <i class="fa fa-exchange"></i>
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
								
				<div class="col-md-3" data-product>
					
					<article class="product">
					
						<a href="product.html" data-url>
							<img src="sample/img/products/1.jpg" class="img-fluid p-3" data-img>
						</a>
					
						<h3>
							<a href="product.html" data-product-url data-name data-url>Apple cinema</a>
						</h3>
						
						<span class="description" data-description2>
							Lorem ipsum
						</span>
						
						<div class="prce">
							<span class="currency" data-currency>$</span> <span data-price>315</span>
						</div>
						
						
						<div class="btn-group">
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
							  <i class="fa fa-shopping-cart"></i> Add to Cart
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to favorites" data-product-fav-url>
							  <i class="fa fa-heart"></i>
						  </button>
						  
						  <button type="button" class="btn btn-sm  btn-secondary" title="Add to compare" data-product-compare-url>
							  <i class="fa fa-exchange"></i>
						  </button>
						</div>
						
						
					</article><!-- product -->
					
				</div> <!-- col-md -->
				
				
				</div><!-- row -->


				<ul class="pagination float-right mt-3">
					<li class="prev">
					  <a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true" class="la la-arrow-left"></span>
						<span class="sr-only">Previous</span>
					  </a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="next">
					  <a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true" class="la la-arrow-right"></span>
						<span class="sr-only">Next</span>
					  </a>
					</li>
				  </ul>
		
			</section> <!-- products -->
			
			
		
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
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    $('#product-tabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
    </script>
    <!-- script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <!-- script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script -->
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
