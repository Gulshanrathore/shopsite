    <?php include('header.php'); ?>
     <?php
 $cpr=$_REQUEST['cpp'];
$pro=mysqli_query($con,"select * from `product` where `pid`='$cpr'");
$product=mysqli_fetch_array($pro);
    ?>
    <?php

if (isset($_POST['sub'])) 
{
$skuno=$_POST['sku'];
$name=$_POST['pname'];
$price=$_POST['pprice'];
$quantity=$_POST['quty'];
$email=$_POST['email'];
$name=$_POST['name'];
 $phoneno=$_POST['phone'];
 $city=$_POST['city'];
 $pincodeno=$_POST['pincode'];
 $address=$_POST['address'];
 $ordertransfer=$_POST['radio-stacked'];

$data=mysqli_query($con,"INSERT INTO `order`(`pskuno`, `proname`, `price`, `quantity`, `email`, `name`, `phoneno`, `city`,`pincodeno`, `address`, `ordertransfer`) VALUES ('$skuno','$name','$price','$quantity','$email','$name','$phoneno','$city','$pincodeno','$address','$ordertransfer')");
if($data==true)
{
    echo "<script>alert ('Order insert');location ='index.php'</script>";
}
else
{
    echo "<script>alert('order not insert');</script>";
}
}

?>




    ?>

    
    <!-- Intro Heading Start Here -->
    <section class="section_padding gray_bg intro_heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Checkout</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item"><a href="">Product</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Heading End Here -->
     
    <!-- Cart Detail Start Here -->
    <section class="section_padding cart-checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 left">
            <h2>Billing Detail</h2>
            <form method="post">
<input type="hidden" name="sku" value="<?=$product['pskuno'];?>"><br>
<input type="hidden" name="pname" value="<?=$product['productname'];?>"><br>
<input type="hidden" name="pprice" value="<?=$product['productnewprice'];?>"><br>
<input type="hidden" name="quty" value="1"><br>


              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="Address"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="city" class="form-control" placeholder="Town / City">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="pincode" class="form-control" placeholder="Postcode / Zip">
                  </div>
                </div>
              </div>
            
          </div>
          <div class="col-lg-6 right">
            <h2>Your Order</h2>
            <div class="cart_table">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead class="thead-default">
                    <tr>
                      
                      <th>Name</th>
                      <th>Price</th>
                      <th>Total</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-name"><?=$product['productname'];?></td>
                      <td class="cart_product-price"><?=$product['productnewprice'];?></td>
                     
                      <td class="cart-subtotal"><?=$product['productnewprice'];?></td>
                                        
                  </tbody>
                </table>
              </div>
            </div>
            <div class="order_checkout">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td>
                        <ul class="list-style-none">
                          <li>Free Shipping</li>
                        </ul>
                      </td>
                    </tr>
                    <tr class="checkout-total total">
                      <th>Total</th>
                      <td><?=$product['productnewprice'];?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="direct_transfer">
              <div class="pay-style">
                <ul>
                  <li>
                    <div class="form-check">
                      <label class="custom-control custom-radio">
                      <input id="radioStacked2" name="radio-stacked" value="cod" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash On Delivery</span> </label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="custom-control custom-radio">
                      <input id="radioStacked3" name="radio-stacked" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal</span> </label>
                      <img src="assets/images/bank-payment.png" alt="payment" class="pay"> 
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required>
                      <span class="custom-control-indicator"></span> <span class="custom-control-description">I've read &amp; accept the <a href="#">terms &amp; conditions</a></span> </label>
                    </div>
                  </li>
                </ul>
              </div>
              <input type="submit" name="submit" value="Place Order" class="btn full_width">
              
            </div>
          </div>
        </div>
      </div>
    </form>
    </section>
    <!-- Cart Detail  End Here -->
     
    <?php include('footer.php'); ?>
    