<?php include("header.php");?>
<?php include("leftmenu.php");?>
<?php include("database.php");?>    

<?php
$cat=$_REQUEST['sd'];

$catsql=mysqli_query($con,"select * from `subcategory` where `sid`='$cat'");
$catrec=mysqli_fetch_array($catsql);

if (isset($_POST['submit'])) {
$stitle=$_POST['stitle'];
$sname=$_POST['sname'];
 
$data=mysqli_query($con,"UPDATE `subcategory` SET `sname`='$sname',`stitle`='$stitle' WHERE `sid`='$cat' ");
if($con==true)
{
    echo "<script>alert ('update');location ='subcategory.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}

?>
         <h2 class="main-title-w3layouts mb-2 text-center">Sub-Category</h2>
                     <section class="forms-section">

                <!-- Inline Form -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sub-Category Edit</h4>
                    <form action="#" method="post" class="form-inline">

                                           <div class="input-group mb-2 mr-sm-2">
                               <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Select Category</option>
                                        <?php 
$sql=mysqli_query($con,"select * from `category`");
while($rec=mysqli_fetch_array($sql)){
 
 if ($catrec['cid']==$rec['cid']) {

?>
<option value="<?=$rec['cid'];?>" selected><?=$rec['cname'];?></option>
<?php } else{?>   

<option value="<?=$rec['cid'];?>"><?=$rec['cname'];?></option>
<?php } }  ?>
                                    </select>
                        </div>


                 <input type="text" name="stitle" value="<?=$catrec['stitle'];?>" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Sub-category title" required="">

                     <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="sname" value="<?=$catrec['sname']?>"  class="form-control" id="inlineFormInputGroupUsername2" placeholder="Sub-category Name" required="">
                        </div>
<input type="submit" name="submit" value="submit" class="btn btn-primary mb-2">

   
                    </form>
                </div>
                <!--// Inline Form -->

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>