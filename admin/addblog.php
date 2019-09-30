<?php include("header.php");?>
<?php include("leftmenu.php");?>

<?php
if (isset($_POST['sub'])) {


$title=$_POST['title'];
$sdis=$_POST['sdis'];
$ldis=$_POST['ldis'];
$file=$_FILES['image']['name'];
    foreach($file as $keys=>$img)
    {
        $image=rand(1111111,9999999)."_".time()."_".$img;
        $ig[]=$image;
        move_uploaded_file($_FILES['image']['tmp_name'][$keys],"images/blog/".$image);
    }
    $img=implode("*",$ig);
$name=$_POST['aname'];
$date=$_POST['adate'];

    $data=mysqli_query($con,"INSERT INTO `blog`(`btitle`, `bshortdiscription`, `blongdiscription`, `bimage`, `bauthorname`, `bdate`) VALUES ('$title','$sdis','$ldis','$img','$name','$date')");
if($data==true)
{
    echo "<script>alert ('insert');location ='blog.php'</script>";
}
else
{
    echo "<script>alert('not insert');</script>";
}

}

?>  

            <h2 class="main-title-w3layouts mb-2 text-center">Add blog</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="blog.php">backBlog</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Short Discription</label>
                                    <textarea class="form-control" name="sdis" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Long Discription</label>
                                    <textarea class="form-control" name="ldis" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" name="image[]" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Author Name </label>
                                    <input type="text" name="aname" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group"> 
                                    <label for="exampleFormControlInput1">Date</label>
                                    <input type="date" name="adate" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <input type="submit" name="sub" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>