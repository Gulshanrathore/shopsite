<?php include("header.php");?>
<?php include("leftmenu.php");?>    
            
            <h2 class="main-title-w3layouts mb-2 text-center">Product</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="addproduct.php">Add product</a></button>

            <section class="forms-section">

                
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Sku no</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
$sql=mysqli_query($con,"select * from `product`");
$i=0;
while($rec=mysqli_fetch_array($sql))
{
    $img=explode("*",$rec['pmultiimage']);
$i++; 
?>



                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="images/product/<?=$img['0']?>" height="100px"></td>
                                    <td><?=$rec['productname']?></td>
                                    <td><?=$rec['pskuno']?></td>
                                    <td><?=$rec['productnewprice']?></td>
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editproduct.php?pp=<?=$rec['pid']?>">Edit</a></button>|<button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="delete.php?pp=<?=$rec['pid']?>">Delete</a></button></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--// table7 -->


            </section>

            <!--// Forms content -->
<?php include("footer.php");?>