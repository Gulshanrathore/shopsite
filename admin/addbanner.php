<?php include("header.php");?>
<?php include("leftmenu.php");?>
<?php include("database.php");?>     
<?php
if (isset($_POST['sub'])) {

    $file=$_FILES['image']['name'];
    foreach($file as $keys=>$img)
    {
        $image=rand(1111111,9999999)."_".time()."_".$img;
        $ig[]=$image;
        move_uploaded_file($_FILES['image']['tmp_name'][$keys],"images/banner/".$image);
    }
    $img=implode("*",$ig);

    $data=mysqli_query($con,"INSERT INTO `banner`(`btitle`, `bimage`) VALUES ('banner','$img')");
if($data==true)
{
    echo "<script>alert ('insert');location ='banner.php'</script>";
}
else
{
    echo "<script>alert('not insert');</script>";
}

}

?>
<!-- Cards content -->
            <section class="cards-section">
                <div class="card-columns">
                    <div class="card">
                        <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h5 class="card-title">Banner Add</h5>
                        </div>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="file" name="image[]" class="form-control" placeholder="Select Banner" required="">
                        </div>
                        <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                        </form>
                    </div>
                </div>
            </section>
            <!---728x90--->

<?php include("footer.php");?>