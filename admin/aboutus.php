<?php include("header.php");?>
<?php include("leftmenu.php");?>    
 <?php include("database.php");?> 
<?php   
$about=mysqli_query($con,"select * from `aboutus`");
$aboutus=mysqli_fetch_array($about);
?>
           
            <h2 class="main-title-w3layouts mb-2 text-center">About us</h2>

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
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="images/about/<?=$aboutus['aimage'];?>" height="100px"></td>
                                    <td><?=$aboutus['atitle'];?></td>
                                    <td><?=$aboutus['adiscription'];?></td>
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editabout.php?ab=<?=$aboutus['aid'];?>">Edit</a></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--// table7 -->


            </section>

            <!--// Forms content -->
<?php include("footer.php");?>