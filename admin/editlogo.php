<?php include("header.php");?>
<?php include("leftmenu.php");?> 
<?php include("database.php");?> 


<?php  

$qs=$_REQUEST['n'];
$spt=mysqli_query($con,"select * from `logo` where `lid`='$qs'");
$prd=mysqli_fetch_array($spt);


if (isset($_POST['sub']) ){
$ltitle=$_POST['ltitle'];

$files=$_FILES['image']['name'];
$logo=time()."_".$files;
move_uploaded_file($_FILES['image']['tmp_name'],"images/logo/".$logo);

 $data=mysqli_query($con,"UPDATE `logo` SET `ltitle`='$ltitle',`iimage`='$logo' where `lid`='$qs' ");
if($data==true)
{
    echo "<script>alert ('update');location ='logo.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}

}

?>
            <section class="cards-section">
                <div class="card-columns">
                    
                    <div class="card">
                        <img class="card-img-top" src="images/logo/<?=$prd['iimage'];?>" alt="img not found" >
                        <div class="card-body">
                            <h5 class="card-title">Logo Title</h5>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                         <div class="input-group mb-2 mr-sm-2">
                            <input type="text" name="ltitle"class="form-control" required="" value="<?=$prd['ltitle'];?>">
                        </div>
                       
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="file" name="image"class="form-control" placeholder="Select logo" required="">
                        </div>
                        <input type="submit" name="sub" value="Logo update" class="btn btn-primary mb-2">
                        </form>
                    </div>
                </div>
            </section>
            <!---728x90--->

<?php include("footer.php");?>