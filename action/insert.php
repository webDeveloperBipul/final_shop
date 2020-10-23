
<?php

include('sql_config.php');








if(isset($_POST["title"], $_POST["price"])){

    

    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $priceUntil = mysqli_real_escape_string($conn, $_POST["priceUntil"]);
    $minimum = mysqli_real_escape_string($conn, $_POST["minimum"]);
    $sku= mysqli_real_escape_string($conn, $_POST["sku"]);
    $brand = mysqli_real_escape_string($conn, $_POST["brand"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $inStock = mysqli_real_escape_string($conn, $_POST["inStock"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $catagory = mysqli_real_escape_string($conn, $_POST["catagory"]);
    $sub_catagory = mysqli_real_escape_string($conn, $_POST["sub_catagory"]);
    $product_type = mysqli_real_escape_string($conn, $_POST["product_type"]);
    $color = mysqli_real_escape_string($conn, $_POST["color"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);
    $stock_amount = mysqli_real_escape_string($conn, $_POST["stock_amount"]);
    $product_id = mysqli_real_escape_string($conn, $_POST["product_id"]);
    $catagory_id = mysqli_real_escape_string($conn, $_POST["catagory_id"]);
    $sub_catagory_ID = mysqli_real_escape_string($conn, $_POST["sub_catagory_ID"]);
    $sort_details = mysqli_real_escape_string($conn, $_POST["sort_details"]);
    $others = mysqli_real_escape_string($conn, $_POST["others"]);
    $image = $_FILES['image']['name'];

}

$sql = "INSERT INTO product (title, price, priceUntil, minimum, sku, brand, author, inStock, description, catagory, sub_catagory, product_type, color, weight, stock_amount,  product_id, catagory_id, sub_catagory_ID, sort_details, others, image)
VALUES('$title', '$price', '$priceUntil','$minimum', '$sku', '$brand',  '$author',  '$inStock', '$description', '$catagory', '$sub_catagory', '$product_type', '$color', '$weight', '$stock_amount',  '$product_id',  '$catagory_id', '$sub_catagory_ID', '$sort_details', '$others', '$image')";


if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






  // Image Upload Code

  if (isset($_POST['img_upload'])) {

  	// image file directory
  	$target = "../images/product/".basename($image);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


  
  $conn->close();
?>




<!-- ==================================================== -->
