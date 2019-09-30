<?php include("header.php");?>
<?php include("leftmenu.php");?>    
<?php include("database.php");?> 
<?php  
$cat=$_REQUEST['ab'];
$about=mysqli_query($con,"select * from `aboutus` where `aid`='$cat'");
$aboutus=mysqli_fetch_array($about);

if (isset($_POST['sub']) ){

$atitle=$_POST['atitle'];

    $file=$_FILES['image']['name'];
    foreach($file as $keys=>$img)
    {
        $image=rand(1111111,9999999)."_".time()."_".$img;
        $ig[]=$image;
        move_uploaded_file($_FILES['image']['tmp_name'][$keys],"images/about/".$image);
    }
    $img=implode("*",$ig);
$adiscription=$_POST['adiscription'];

$data=mysqli_query($con,"UPDATE `aboutus` SET `atitle`='$atitle',`aimage`='$img',`adiscription`='$adiscription' WHERE `aid`='$cat' ");
if($data==true)
{
    echo "<script>alert ('update');location ='aboutus.php'</script>";
}
else
{
    echo "<script>alert('not update');</script>";
}

}

?>

            <h2 class="main-title-w3layouts mb-2 text-center">About us</h2>
            <section class="forms-section">

    <div class="outer-w3-agile col-xl mt-3">
    <h4 class="tittle-w3-agileits mb-4">edit about</h4>

         <form method="post" enctype="multipart/form-data">
            <div class="form-group">
             <input type="text" name="atitle"class="form-control" id="exampleFormControlInput1"  required="" placeholder="Enter Title" value="<?=$aboutus['atitle'];?>">
                                </div>
                                <div class="form-group">
                                   
<textarea class="form-control" name="adiscription" id="exampleFormControlTextarea1" rows="3" required="" placeholder="Enter Discription"> <?=$aboutus['adiscription'];?> 
</textarea>
                                </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <input type="file"  name="image[]">
                            <img src="images/about/<?=$aboutus['aimage'];?>" height="200px">
                        </div>
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>