<?php include("header.php");?>
<?php include("leftmenu.php");?>    
            
            <h2 class="main-title-w3layouts mb-2 text-center">Blog</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="addblog.php">Add Blog</a></button>

            <section class="forms-section">

                
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Discription</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
$sql=mysqli_query($con,"select * from `blog`");
$i=0;
while($rec=mysqli_fetch_array($sql))
{
$i++; 
?>

                                <tr>
                                    <th scope="row"><?= $i ;?></th>
                                    <td><img src="images/blog/<?=$rec['bimage'];?>" height="100px"></td>
                                    <td><?=$rec['btitle'];?></td>
                                    <td><?=$rec['bshortdiscription'];?></td>
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editblog.php?nn=<?=$rec['bid'];?>">Edit</a></button>| <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="delete.php?nn=<?=$rec['bid'];?>">Delete</a></button></td>
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