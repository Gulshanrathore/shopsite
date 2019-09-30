<?php include("header.php");?>
<?php include("leftmenu.php");?>    
<?php include("database.php")?> 

          
            <h2 class="main-title-w3layouts mb-2 text-center">Contact us</h2>

            <section class="forms-section">

                
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
$sql=mysqli_query($con,"select * from `contactus`");
$i=0;
while($contactus=mysqli_fetch_array($sql))
{
$i++; ?>
                                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?=$contactus['cotitle'];?></td>
                    <td><?=$contactus['coaddress'];?></td>
                    <td><?=$contactus['cophonenumber'];?></td>
                     <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editcontact.php?co=<?=$contactus['coid'];?>">Edit</a></button></td>
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