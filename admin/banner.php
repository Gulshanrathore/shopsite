<?php include("header.php");?>
<?php include("leftmenu.php");?>
<?php include("database.php");?>     

<!-- Cards content -->
            <section class="cards-section">
                <button class="btn btn-primary mb-2"> <a href="addbanner.php"> Add Banner</a></button>
                <div class="card-columns">

<?php 
$sql=mysqli_query($con,"select * from `banner`");
while($rec=mysqli_fetch_array($sql))
{ ?>
                    <div class="card">
            <img class="card-img-top" src="images/banner/<?=$rec['bimage'];?>" alt="image not found">
            <button class="btn btn-style my-2 my-sm-0"><a href="delete.php?n=<?=$rec['bid'];?>">Delete</a></button>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!---728x90--->

<?php include("footer.php");?>