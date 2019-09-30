<?php include("header.php");?>
<?php include("leftmenu.php");?>    
<?php include("database.php");?>
            <h2 class="main-title-w3layouts mb-2 text-center">Show Enquiry</h2>
            <section class="forms-section">

                
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">subject</th>
                                    <th scope="col">message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
 $i=0;
 $enq=mysqli_query($con,"select * from `Enquiry`");
 while($Enquiry=mysqli_fetch_array($enq))
 {
       $i++;
    ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$Enquiry['ename'];?></td>
                                    
                                    <td><?=$Enquiry['email'];?></td>

                                    <td><?=$Enquiry['ephoneno'];?></td>
                                    <td><?=$Enquiry['esubject'];?></td>
                                    <td><?=$Enquiry['emessage'];?></td>
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editenquiry.php?ab=<?=$Enquiry['eid'];?>">edit</a></button>|
                                        <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="Delete.php?ab=<?=$Enquiry['eid'];?>">Delete</a></button></td>
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