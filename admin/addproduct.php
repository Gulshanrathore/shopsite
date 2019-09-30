<?php include("header.php");?>
<?php include("leftmenu.php");?> 
<?php include("database.php");?> 
<?php
if(isset($_POST['submit']))
{
$skuno=$_POST['skuno'];
$category=$_POST['pcategory'];
$subcategory=$_POST['psubcategory'];
$productname=$_POST['productname'];
$productnewprice=$_POST['productnewprice'];
$productoldprice=$_POST['poldprice'];
$productstock=$_POST['productstock'];
$productcolor=$_POST['productcolor'];
$productsize=$_POST['productsize'];
$file=$_FILES['image']['name'];
    foreach($file as $keys=>$img)
    {
        $image=rand(1111111,9999999)."_".time()."_".$img;
        $ig[]=$image;
        move_uploaded_file($_FILES['image']['tmp_name'][$keys],"images/product/".$image);
    }
    $img=implode("*",$ig);
$pdisc=$_POST['pdis'];


$product=mysqli_query($con,"INSERT INTO `product`(`pskuno`, `pcategory`, `psubcategory`, `productname`, `productnewprice`, `productoldprice`, `productstock`, `productcolor`, `productsize`, `pmultiimage`, `pdisc`) VALUES ('$skuno','$category','$subcategory','$productname','$productnewprice','$productoldprice','$productstock','$productcolor','$productsize','$img','$pdisc')");
 if($product==true)
{
    echo"<script>alert('product inserted');location ='product.php'</script>";
}
else
{
    echo "<script>alert('value not inserted');</script>";
}
}

?>  

            <h2 class="main-title-w3layouts mb-2 text-center">Add Product</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="product.php">Back</a></button>
            <section class="forms-section">

                <div class="outer-w3-agile col-xl mt-3">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Sku no</label>
                                    <input type="text" name="skuno"  class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">category</label>
                                <select class="form-control" name="pcategory" onChange="get_subcat(this.value);">
                                <option>Select Category</option>
                                 <?php 
                                $sql=mysqli_query($con,"select * from `category`");
                                while($rec=mysqli_fetch_array($sql)){
                                   ?>
                                <option value="<?=$rec['cid'];?>"><?=$rec['cname'];?></option>
                                <?php }?> 
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Sub-category</label>
                                    <select class="form-control"  name="psubcategory" id="recsid" >
                                        <option>Select Sub-Category</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Name</label>
                                    <input type="text" name="productname" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product new price</label>
                                    <input type="text" name="productnewprice" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product old price</label>
                                    <input type="text" name="poldprice" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Stock</label>
                                    <input type="text" name="productstock" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Color</label>
                                    <input type="text" name="productcolor" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Product Size</label>
                                    <input type="text" name="productsize" class="form-control" id="exampleFormControlInput1"  required="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Multi Image</label>
                                    <input type="file" name="image[]" multiple class="form-control" id="exampleFormControlInput1"  required="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Product discription</label>
                                    <input type="text" name="pdis" class="form-control"  required="">
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mb-2">
                            </form>
                        </div>

            </section>

            <!--// Forms content -->
<?php include("footer.php");?>
<script>
    function get_subcat(t)
    {
        var obj=new XMLHttpRequest();
        obj.open("GET","ajax.php?n="+t,true);
        obj.send();
        obj.onreadystatechange=function()
        {
            document.getElementById("recsid").innerHTML=obj.responseText;
        }
    }
</script>