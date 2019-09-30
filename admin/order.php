<?php include("header.php");?>
<?php include("leftmenu.php");?>   
<?php include("database.php");?> 
            
            <h2 class="main-title-w3layouts mb-2 text-center">Show Order</h2>
            <button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="addorder.php">Add Order</a></button>

            <section class="forms-section">
                <div class="outer-w3-agile mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">pskuno</th>
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">price</th>
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody> <?php
 $i=0;
 $ord=mysqli_query($con,"select * from `order`");
 while($order=mysqli_fetch_array($ord))
 {
       $i++;
    ?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$order['pskuno'];?></td>
                                    <td><?=$order['email'];?></td>
                                    <td><?=$order['phoneno'];?></td>
                                   <td><?=$order['price'];?></td>
                                    
                                    <td><button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="editorder.php?ba=<?=$order['oid'];?>">edit</a></button>|<button type="button" class="btn btn-lg btn-outline-primary py-2 price2-btn" data-toggle="modal" data-target="#exampleModal"><a href="delete.php?ba=<?=$order['oid'];?>">delete</a></button></td>
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