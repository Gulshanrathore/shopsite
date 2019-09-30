<?php include('header.php')?>  
    <?php
$pro=mysqli_query($con,"select * from `product`");
$product=mysqli_fetch_array($pro);
$img=explode("*",$product['pmultiimage']);
    ?>
    <!-- Intro Heading Start Here -->
    <section class="section_padding gray_bg intro_heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Cart Detail</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item"><a href="">shop</a></li>
              <li class="breadcrumb-item active">Cart</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Heading End Here -->
     
    <!-- Cart Detail Start Here -->
    <div class="section_padding cart_detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="cart_table">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="thead-default">
                    <tr>
                      <th>Product</th>
                      <th>Name</th>
                      <th>Price</th>
                     
                      <th>Total</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-thumbnail"><a href=""><img src="admin/images/product/<?=$img[0];?>"></a></td>
                      <td class="product-name"><?=$product['productname'];?></td>
                      <td class="cart_product-price"><?=$product['productnewprice'];?></td>
                     <td class="product-delet"><?=$product['productnewprice'];?></td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cart_btn_subtotal">
              <div class="row">
                <div class="col-lg-6 order-lg-6">
                 
                </div>
                <div class="col-lg-6"> <a href="product.php" class="btn outline"><i class="fa fa-location-arrow" aria-hidden="true"></i> Continue Shopping </a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="gray_bg padding_4x4_30 apply_subtotal">
              <div class="row">
                
                <div class="col-lg-4 total_final_checkout">
                  <div class="product-subtotal"> <span class="pull-left">TOTAL:</span> <span class="pull-right"><?=$product['productnewprice'];?></span> </div>
                  <a href="checkout.php?cpp=<?=$product['pid'];?>">
                  <button class="btn w-100" type="submit">Proceed To Checkout</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Cart Detail  End Here -->
     
    <?php include('footer.php'); ?>
    