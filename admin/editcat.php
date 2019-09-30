<?php include("header.php");?>
<?php include("leftmenu.php");?>  
<?php include("database.php");?>
<?php
$cat=$_REQUEST['cd'];

$catsql=mysqli_query($con,"select * from `category` where `cid`='$cat'");
$catrec=mysqli_fetch_array($catsql);

if (isset($_POST['submit'])) {
$ctitle=$_POST['ctitle'];
$cname=$_POST['cname'];
 
$data=mysqli_query($con,"UPDATE `category` SET `cname`='$cname',`ctitle`='$ctitle' WHERE `cid`='$cat' ");
if($data==true)
{
    echo "<script>alert ('update');location ='category.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}
}

?>

        <h2 class="main-title-w3layouts mb-2 text-center">Category</h2>
                 <section class="forms-section">

                <!-- Inline Form -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Category Edit</h4>
                    <form action="#" method="post" class="form-inline">
                        
                        <input type="text" name="ctitle" value="<?=$catrec['ctitle'];?>"  class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Category Title" required="">

                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" name="cname" value="<?=$catrec['cname']?>" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Category Name" required="">
                        </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary mb-2">

                    </form>
                </div>
                <!--// Inline Form -->

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>