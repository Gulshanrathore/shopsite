<?php include("header.php");?>
<?php include("leftmenu.php");?>  
<?php include("database.php");?>
<?php
$ur=$_REQUEST['ab'];
$us=mysqli_query($con,"select * from `user` where `uid`='$ur'");
$user=mysqli_fetch_array($us);

if (isset($_POST['sub'])) 
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
 $password=$_POST['password'];

$data=mysqli_query($con,"UPDATE `user` SET `uname`='$name',`uemail`='$email',`uphoneno`='$phone',`upassword`='$password' WHERE `uid`='$ur' ");
if($data==true)
{
    echo "<script>alert ('update');location ='user.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}

?>
            <h2 class="main-title-w3layouts mb-2 text-center">Edit User</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="user.php">Back</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form action="#" method="post">
                                <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                         <input type="text" name="name" value="<?=$user['uname'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">email</label>
                                    <input type="text" name="email" value="<?=$user['uemail'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">phone no</label>
                                    <input type="text" name="phone" value="<?=$user['uphoneno'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">password</label>
                                    <input type="text" name="password" value="<?=$user['upassword'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                               
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>