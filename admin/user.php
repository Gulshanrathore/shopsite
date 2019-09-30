<?php include("header.php");?>
<?php include("leftmenu.php");?>   
<?php include("database.php");?> 
            
            <h2 class="main-title-w3layouts mb-2 text-center">Show User</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="adduser.php">Add user</a></button>

            <section class="forms-section">
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Password</th>
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> <?php
 $i=0;
 $usr=mysqli_query($con,"select * from `user`");
 while($user=mysqli_fetch_array($usr))
 {
       $i++;
    ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$user['uname'];?></td>
                                    <td><?=$user['uemail'];?></td>
                                    <td><?=$user['uphoneno'];?></td>
                                <td><?=$user['upassword'];?></td>
                                    
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="edituser.php?ab=<?=$user['uid'];?>">edit</a></button>|<button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="delete.php?ab=<?=$user['uid'];?>">delete</a></button></td>
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