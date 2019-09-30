<?php include("header.php");?>
<?php include("leftmenu.php");?>
<?php include("database.php");?>  

<?php
if(isset($_POST['sub']))
{
$title=$_POST['title'];
$catname=$_POST['catname'];
$cat=mysqli_query($con,"INSERT INTO `category`(`cid`, `cname`, `ctitle`) VALUES ('','$catname','$title')");
if($con==true)
{
    echo "<script>alert('insert value');</script>";
}
else
{
  echo "<script>alert('not insert value');</script>";
  
}

}
?>  

            <h2 class="main-title-w3layouts mb-2 text-center">Category</h2>
            <section class="forms-section">
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Category Insert</h4>
                    <form action="#" method="post" class="form-inline">

                        <input type="text" name="title" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Category Title" required="">

                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" name="catname" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Category Name" required="">
                        </div>
                        <input type="submit" class="btn btn-primary mb-2"name="sub" value="submit">
                    </form>
                </div>
                <!--// Inline Form -->
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Category Show</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Category title</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
$sql=mysqli_query($con,"select * from `category`");
$i=0;
while($rec=mysqli_fetch_array($sql))
{
$i++;
   echo " 
    <tr>                               
    <td scope='row'>$i</td>
    <td>$rec[ctitle]</td>
    <td>$rec[cname]</td>
    <td><button type='button' class='btn btn-lg btn-outline-primary py-2 price2-btn' data-toggle='modal' ><a href='editcat.php?cd=$rec[cid]'>Edit</a></button>|<button type='button' class='btn btn-lg btn-outline-primary py-2 price2-btn' data-toggle='modal'><a href='delete.php?cd=$rec[cid]'>Delete</a></button></td> 
";
}
?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--// table7 -->


            </section>

            <!--// Forms content -->
<?php include("footer.php");?>