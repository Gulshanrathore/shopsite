<?php include("header.php");?>
<?php include("leftmenu.php");?>
<?php include("database.php");?>    
<?php
$cat=$_REQUEST['co'];
$contact=mysqli_query($con,"SELECT * FROM `contactus` WHERE `coid`='$cat'");
$contactus=mysqli_fetch_array($contact);

if(isset($_POST['sub']))
{
 $cotitle=$_POST['cotitle'];  
 $colocation=$_POST['colocation']; 
 $comobilenumber=$_POST['comobilenumber'];
 $cophonenumber=$_POST['cophonenumber'];
 $coemailid=$_POST['coemailid'];
 $cofacebook=$_POST['cofacebook'];
 $coyoutube=$_POST['coyoutube'];
 $coinstagram=$_POST['coinstagram'];

 $data=mysqli_query($con,"UPDATE `contactus` SET `cotitle`='$cotitle',`colocation`='$colocation',`comobilenumber`='$comobilenumber',`cophonenumber`='$cophonenumber',`coemailid`='$coemailid',`cofacebook`='$cofacebook',`coyoutube`='$coyoutube',`coinstagram`='$coinstagram' WHERE `coid`='$cat' ");
if($data==true)
{
    echo "<script>alert ('update');location ='contactus.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}
  ?>
<h2 class="main-title-w3layouts mb-2 text-center">Contact us</h2>
            <section class="forms-section">
          <div class="outer-w3-agile col-xl mt-3">
                            <h4 class="tittle-w3-agileits mb-4">Edit Contact</h4>
                            <form action="#" method="post">
                                <div class="form-group">
        <input type="text" name="cotitle" class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['cotitle'];?>">
                                </div>
                                <div class="form-group">
                                   
                                    <input type="text"  name="colocation" class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['colocation'];?>">
                                  </div>
                                <div class="form-group">
                                   
                                    <input type="text" name="comobilenumber"class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['comobilenumber'];?>">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" name="cophonenumber" class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['cophonenumber'];?>">
                                </div>
                                <div class="form-group">
                    
                                    <input type="text" name="coemailid"class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['coemailid'];?>">
                                </div>
                                <div class="form-group">
                                   
                                    <input type="text" name="cofacebook" class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['cofacebook'];?>">
                                </div>
                                <div class="form-group">
                                    
     <input type="text" name="coyoutube" class="form-control" id="exampleFormControlInput1"  required="" value="<?=$contactus['coyoutube'];?>">
                                </div>
     <div class="form-group">
<input type="text" name="coinstagram" class="form-control" id="exampleFormControlInput1"  required="" value="<?=       $contactus['coinstagram'];?>">
                                </div>
                                

                            <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>