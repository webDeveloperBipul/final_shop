<?php require_once ('part/head.php'); ?>

<body>
<div class="page-container">








	










































<?php require_once ('part/topnav.php'); ?>
<?php require_once ('part/header.php'); ?>


    
    <div class="content">
		
		<div class="container">
			<div class="thickline"></div>
		</div>
		
    
    	<nav class="breadcrumb container">
		  <a class="breadcrumb-item" href="index.php">Home</a>
		  <a class="breadcrumb-item" href="#">Laptops</a>
		  <a class="breadcrumb-item" href="#">Slim laptops</a>
		  <span class="breadcrumb-item active">Sony Vaio</span>
		</nav>



	    <article class="product-details container" data-component-product>
			
			<div class="row">





<?php

$sku = $_GET['p_id'];


?>


			<?php
		$sql = "SELECT * FROM product where sku=$sku";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			// output data of each row
			while ($row = $result->fetch_assoc())
			{
		?>


























									<!-- gallery and tabs column -->
					<div class="col-md-8">
										
						<section id="gallery" class="simplegallery">
						<div class="main_image">
							<img src="img/products/<?php echo $row["image"]; ?>" class="image_1" alt="" />
							<img src="img/products/22.jpg" class="image_2" style="display:none" alt="" />
							<img src="img/products/33.jpg" class="image_3" style="display:none" alt="" />
							<img src="img/products/55.jpg" class="image_4" style="display:none" alt="" />
						</div>

						<div class="clear"></div>

						<div class="thumbnail">
							<div class="thumb">
								<a  rel="1">
									<img src="img/thumbs/1.jpg" id="thumb_1" alt="" />
								</a>
							</div>
							<div class="thumb">
								<a  rel="2">
									<img src="img/thumbs/2.jpg" id="thumb_2" alt="" />
								</a>
							</div>
							<div class="thumb">
								<a  rel="3">
									<img src="img/thumbs/3.jpg" id="thumb_3" alt="" />
								</a>
							</div>
							
							<div class="thumb last">
								<a rel="4">
									<img src="img/thumbs/4.jpg" id="thumb_4" alt="" />
								</a>
							</div>
						</div>
						</section>
					</div>

				<!-- product name and add to cart -->
				
				<div class="col-md-4">
					<h1 class="product-heading" data-name><?php echo $row["title"]; ?></h1>
					
					<!-- product attributes -->
					<ul class="list-unstyled text-muted">
					  <li>Brand: <span><?php echo $row["brand"]; ?></span></li>
					  <li>SKU: <span><?php echo $row["sku"]; ?></span></li>
					  <li>Stock: <span><?php echo $row["inStock"]; ?></span></li>
					  <li>Minimum: <span><?php echo $row["minimum"]; ?></span></li>
					  
					</ul>
					
					<div class="old-price">
						<span class="currency" data-currency>$</span> <span data-price><?php echo $row["price"]; ?></span>
					</div>
					
					<div class="price h3">
						<span class="currency" data-currency>$</span> <span data-price><?php echo $row["price"]; ?></span>
					</div>
					
					<hr>
					
					<div class="form-group row">
						<label for="productQuantity" class="col-form-label col-4">Quantity</label>
						<input id="productQuantity" class="col-8 form-control" type="number" name="quantity" min="12" max="100">
					</div>
					
					<button type="button" class="btn btn-primary btn-block btn-icon">
						 <i class="la la-cart-plus"></i> Add to cart
					</button>

					<button type="button" class="btn btn-outline-secondary btn-block  btn-icon">
						 <i class="la la-shopping-cart"></i> Buy now
					</button>
					
					<!-- 
					<div class="btn-group mt-3" role="group">
						 
						  <button type="button" class="btn  btn-link text-black-50 btn-sm" title="Wishlist">
							  <i class="la la-heart"></i> Wishlist
						  </button>
						  
						  <button type="button" class="btn  btn-link text-black-50 btn-sm" title="Compare">
							  <i class="la la-exchange"></i> Compare
						  </button>
						  
					</div> -->
					
				</div>

			</div>	    
		

			<div class="product-tabs clearfix" role="tabpanel">
				  <ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">Description</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Specification</a>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Dropdown
					  </a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
						<a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a>
					  </div>
					</li>
				  </ul>
				  <div class="tab-content" id="myTabContent">
					<div role="tabpanel" class="tab-pane fade active show" id="home" aria-labelledby="home-tab" aria-expanded="true" data-description>
					  <p><?php echo $row["description"]; ?></p>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
					  <p><?php echo $row["sort_details"]; ?></p>
					</div>
					<div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
					  <p><?php echo $row["others"]; ?></p>
					</div>
					<div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
					  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					</div>
				  </div>
				</div>

		
	    </article><!-- product-details -->	
		
			<?php } }?>

	<div class="container products-tab-carousel">

		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Featured products</a>
		  </div>
		  
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


		<section class="container products clearfix" data-component-products="limit:4 page:0 id:1679,807,786,1597">

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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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
						  <button type="button" class="btn btn-sm btn-secondary" title="Add to Cart" data-product-cart-url>
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

    
    </div>
    
    <footer class="bg-faded text-muted py-5 mt-5">
		<div class="container">
			<p class="float-right">
			  <a href="#">Back to top</a>
			</p>
			
			<p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
			<p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>		
        </div>
    </footer>
    
</div>    
    



    

 
 <?php include ('part/footer.php'); ?>
