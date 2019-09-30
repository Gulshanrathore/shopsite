<?php include("header.php");?>
<?php include("leftmenu.php");?>  
<?php include("database.php");?>
<?php
$or=$_REQUEST['ba'];
$ord=mysqli_query($con,"select * from `order` where `oid`='$or'");
$order=mysqli_fetch_array($ord);

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

$data=mysqli_query($con,"UPDATE `order` SET `pskuno='$skuno',`proname`='$name',`price`='$price',`quantity`='$quantity',`email`='$email',`name`='$name',`phoneno`='$phoneno',`city`='$city',`state`='$state',`pincodeno`='$pincodeno',`address`='$address',`ordertransfer`='$ordertransfer'");
if($data==true)
{
    echo "<script>alert ('update');location ='order.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}

?>
            <h2 class="main-title-w3layouts mb-2 text-center">Edit order</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="order.php">Back</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form action="#" method="post">
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">pskuno</label>
                                    <input type="text" name="skuno" value="<?=$order['pskuno'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">product name</label>
                                    <input type="text" name="proname" value="<?=$order['proname'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">price</label>
                                    <input type="text" name="price" value="<?=$order['price'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">quantity</label>
                                    <input type="text" name="quantity" value="<?=$order['quantity'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">email</label>
                                    <input type="text" name="email" value="<?=$order['email'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">name</label>
                                    <input type="text" name="name" value="<?=$order['name'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">phoneno</label>
                                    <input type="text" name="phoneno" value="<?=$order['phoneno'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">city</label>
                                    <input type="text" name="city" value="<?=$order['city'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">state</label>
                                    <input type="text" name="state" value="<?=$order['state'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">pincodeno</label>
                                    <input type="text" name="pincodeno" value="<?=$order['pincodeno'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">address</label>
                                    <input type="text" name="address" value="<?=$order['address'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">ordertransfer</label>
                                    <input type="text" name="ordertransfer" value="<?=$order['ordertransfer'];?>" class="form-control" id="exampleFormControlInput1" required="">
                                </div>
                                
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>