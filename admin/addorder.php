<?php include("header.php");?>
<?php include("leftmenu.php");?>  
<?php include("database.php");?>
<?php

if (isset($_POST['sub'])) 
{
$skuno=$_POST['skuno'];
$name=$_POST['proname'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$email=$_POST['email'];
$name=$_POST['name'];
 $phoneno=$_POST['phoneno'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pincodeno=$_POST['pincodeno'];
 $address=$_POST['address'];
 $ordertransfer=$_POST['ordertransfer'];

$data=mysqli_query($con,"INSERT INTO `order`(`pskuno`, `proname`, `price`, `quantity`, `email`, `name`, `phoneno`, `city`, `state`, `pincodeno`, `address`, `ordertransfer`) VALUES ('$skuno','$name','$price','$quantity','$email','$name','$phoneno','$city','$state','$pincodeno','$address','$ordertransfer')");
if($data==true)
{
    echo "<script>alert ('value insert');location ='order.php'</script>";
}
else
{
    echo "<script>alert('value not insert');</script>";
}
}

?>
            <h2 class="main-title-w3layouts mb-2 text-center">Add Order</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="order.php">Back</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form action="#" method="post">
                                <div class="form-group">
                        <label for="exampleFormControlInput1">skuno</label>
                         <input type="text" name="skuno"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">product name</label>
                                    <input type="text" name="proname"  class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">price</label>
                                    <input type="text" name="price"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">quantity</label>
                                    <input type="text" name="quantity"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">email</label>
                                    <input type="text" name="email"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">name</label>
                                    <input type="text" name="name"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">phone no</label>
                                    <input type="text" name="phoneno"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">city</label>
                                    <input type="text" name="city"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">state</label>
                                    <input type="text" name="state"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">pincode</label>
                                    <input type="text" name="pincodeno"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">address</label>
                                    <input type="text" name="address"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               <div class="form-group">
                                    <label for="exampleFormControlTextarea1">order transfer</label>
                                    <input type="text" name="ordertransfer"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               
                               
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>