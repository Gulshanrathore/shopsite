<?php include("header.php");?>
<?php include("leftmenu.php");?> 
<?php include("database.php");?> 


<?php  
$logo=mysqli_query($con,"SELECT * FROM `logo`");
$logous=mysqli_fetch_array($logo);

?>



            <section class="cards-section">
                <div class="card-columns">
                    <div class="card">
                        <img class="card-img-top" src="images/logo/<?=$logous['iimage'];?>" alt="img not found" >
                        <button class="btn btn-primary mb-2"><a href="editlogo.php?n=<?=$logous['lid'];?>">Edit Logo</a></button>
                    </div>
                </div>
            </section>
            <!---728x90--->

<?php include("footer.php");?>