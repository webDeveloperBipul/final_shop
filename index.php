<?php require_once ('part/head.php'); ?>



<body>
<div class="page-container">



	

    <?php require_once ('part/topnav.php'); ?>
    <?php require_once ('part/header.php'); ?>
    
    <div class="content">
    
    <?php require_once ('part/slider.php'); ?>
    	

	


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

		<?php
		$sql = "SELECT * FROM product";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			// output data of each row
			while ($row = $result->fetch_assoc())
			{
		?>


	<div class="item" data-product>




	
	
		
		<article class="product">
		

		
			<a href="product.php?p_id=<?php echo $row["sku"]; ?>&p_name=<?php echo $row["title"]; ?>" data-url>
				<img src="img/products/<?php echo $row["image"]; ?>" class="img-fluid" data-img>
			</a>
			<button type="button" class="btn btn-sm  btn-link" title="Add to favorites" data-product-fav-url>
				  <i class="la la-heart"></i>
			  </button>
		
			<h3>
				<a href="product.php?p_id=<?php echo $row["sku"]; ?>&p_name=<?php echo $row["title"]; ?>" data-product-url data-name data-url><?php echo $row["title"]; ?></a>
			</h3>
			
			<span class="description" data-product-description>
				Lorem ipsum
			</span>
			
			<div class="price-group">
				<div class="text-sm text-danger">
				সর্বনিম্ন-<span class="currency" data-product-currency> </span><?php echo $row["minimum"]; ?><span data-product-price> পিছ</span>
				</div>
				
				<div class="price">
					<span class="currency" data-product-currency>$</span> <span data-product-price><?php echo $row["price"]; ?></span>
				</div>
			</div>						

			
			
			<div class="btngroup">
			  <a type="button" class="btn btn-sm btn-secondary" title="Add to Cart" href="product.php?p_id=<?php echo $row["product_code"]; ?>&ctg=<?php echo $row["catagory"]; ?>" data-product-cart-url data-vvveb-action="addCart" data-product_id=40>
				  <i class="la la-shopping-cart"></i> কিনতে চাই
			  </a>

			  
			  
			  
			  
			
			</div>
			
			
		</article><!-- product -->

</div><!-- row -->




<?php
    }
}
?>








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

<?php require_once ('part/footer.php'); ?>
