
<!-- --------------------------------------------------------------------------------------------- -->
<?php
include('part/head.php');
 

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="text-center p-4">
          <h4 class="mb-0">প্রোডাক্ট যোগ করুন</h4>
          
           
          </div>
          
      
          <!-- content -->
          <div class="container mt-2 mb-5">
            <div class="row">
              <div class="col-md-12">
                <div class="container">
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8 ">
                      <div class="user-form mt-3" ng-app="">
                        <form action="action/insert.php" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return check_blank()">
                          <div class="row justify-content-center" >
                            <div class="col-md-6" >
                              <input class="mt-3" id="title"  type="text" name="title"  placeholder="Title">
                              <br>
                              <input class="mt-3" id="price"  type="text" name="price" placeholder="Price">
                              <br>
                              <input class="mt-3" type="text"  name="priceUntil"  placeholder="Price valid Until">
                              <br>
                              <input class="mt-3"  type="text"  id="sku" name="sku"  placeholder="SKU">
                              <br>
                              <input class="mt-3" type="text"  name="brand"  placeholder="Brand">
                              <br>
                              <input class="mt-3" type="text"  name="author"  placeholder="Author">
                              <br>
                              <input class="mt-3" type="text"  name="inStock" placeholder="In Stock">
                              <br>
                              <input class="mt-3" type="text"  name="description"  placeholder="Description">
                              <br>
                              <input class="mt-3" type="text"  name="catagory"  placeholder="Catagory">
                              <br>                           
                              <input class="mt-3" type="text"  name="sub_catagory"  placeholder="Sub Catagory"> 
                              <br>
                              <label for="upload_img" class="btn btn-success btn-sm mt-4">Add Image</label>
                              <input style=" display:none;" class="mb-5 mt-3" type="file" name="image" id="upload_img" accept="image/*"> 
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <input class="mt-3" type="number" name="product_type"   placeholder="Product Type">
                              <br>
                              <input class="mt-3" id="color" type="number" name="color"   placeholder="Color">
                              <br>
                              <input class="mt-3" id="weight" type="number"  name="weight"  placeholder="Weight">
                              <br>
                              <input class="mt-3" type="number" name="stock_amount"  placeholder="Stock Amount" value="stock_amount">
                              <br>
                              
                              <input class="mt-3" type="number" name="minimum"   placeholder="Minimum">
                              <br>
                              <input class="mt-3" type="number" name="product_id"   placeholder="Producut Id">
                              <br>
                              <input class="mt-3" type="number" name="catagory_id"  placeholder="Catagory id">
                              <br>
                              
                              <input class="mt-3" type="number" name="sub_catagory_ID"  placeholder="Sub-Catagory ID">
                              <br>
                              <input class="mt-3" type="number" name="sort_details"  placeholder="Sort details">
                              <br>
                              <input class="mt-3" name="loan_date" type="text" id="datepicker" placeholder="তারিখ*" min="2010-01-01" value="">
                              <input class="mt-3" type="text" name="others"  placeholder="Others">
                              <input class="mt-3" type="hidden" value="unpaid" name="unpaid">
                              
                            </div>   
                        </div>
                        <button  type="submit" name="img_upload"   class="btn btn-info mt-5 text-white btn-block" >
                            <i class="fas fa-user-plus">
                            </i>  নিবন্ধন করুন
                          </button>       
                        </form> 
                      </div>
                    </div>
                  </div>
                </div>
              
          <script  >
            function check_blank() {
              var name =document.getElementById('m_name').value;
              var phone =document.getElementById('phone_no').value;
              var date =document.getElementById('datepicker').value;
              var loan_amount =document.getElementById('loan_amount').value;
              var profit_amount =document.getElementById('profit_amount').value;
              if(name == "", phone == "", date == "", loan_amount == '', profit_amount == '' ){
                Swal.fire({
                  title: '<strong>গুরুত্বপূর্ণ ঘরগুলো পূরন করুন</strong>',
                  type: 'info',
                  html:
                  '<b>নাম, মোবাইল নাম্বার, তারিখ, ঋণের পরিমাণ ইত্যাদি পরবর্তীতে প্রয়োজন হতে পারে</b>' 
                  ,
                  showCloseButton: true,
                  focusConfirm: true,
                  confirmButtonText:
                  ' OK ',
                  confirmButtonAriaLabel: 'Thumbs up, great!',
                }
                         )
                return false;
              }
              else{
                Swal.fire(
                  'তথ্য নিবন্ধিত হয়েছে',
                  'Ok!',
                  'success'
                );
              }
            }
          </script>


<!-- --------------------------------------------------------------------------------------------- -->


<?php
include('part/footer.php');


?>