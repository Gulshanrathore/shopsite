<?php include("header.php");?>
<?php include("leftmenu.php");?>  
<?php include("database.php");?>
<?php
$en=$_REQUEST['ab'];
$enq=mysqli_query($con,"select * from `enquiry` where `eid`='$en'");
$enquiry=mysqli_fetch_array($enq);

if (isset($_POST['sub'])) 
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

$data=mysqli_query($con,"UPDATE `enquiry` SET `ename`='$name',`email`='$email',`ephoneno`='$phone',`esubject`='$subject',`emessage`='$message' WHERE `eid`='$en' ");
if($data==true)
{
    echo "<script>alert ('update');location ='enquiry.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}

?>
            <h2 class="main-title-w3layouts mb-2 text-center">Edit Enquiry</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="enquiry.php">Back</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form action="#" method="post">
                                <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" value="<?=$enquiry['ename'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">email</label>
                                    <input type="text" name="email" value="<?=$enquiry['email'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">phone no</label>
                                    <input type="text" name="phone" value="<?=$enquiry['ephoneno'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">subject</label>
                                    <input type="text" name="subject" value="<?=$enquiry['esubject'];?>" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">message</label>
                                    <input type="text" name="message" value="<?=$enquiry['emessage'];?>"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                
                               
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>