<?php include("header.php");?>
<?php include("leftmenu.php");?>    
<?php include("database.php");?>
<?php
if(isset($_POST['sub']))
{
    $catname=$_POST['cname'];
    $title=$_POST['stitle'];
    $subcatname=$_POST['subcatname'];

$sub=mysqli_query($con,"INSERT INTO `subcategory`(`sid`, `cid`, `stitle`, `sname`) VALUES ('','$catname','$title','$subcatname')");
if($sub==true)
{
    echo "<script>alert('insert value');</script>";
}
else
{
  echo "<script>alert('not insert value');</script>";
  
}

}
?>

         <h2 class="main-title-w3layouts mb-2 text-center">Sub-Category</h2>
            <section class="forms-section">

                <!-- Inline Form -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sub-Category Insert</h4>
                    <form action="#" method="post" class="form-inline">
                        <div class="input-group mb-2 mr-sm-2">
                               <select class="form-control" name="cname" id="exampleFormControlSelect1">
                                        <option>Select Category</option>
<?php 
$sql=mysqli_query($con,"select * from `category`");
while($rec=mysqli_fetch_array($sql)){


?>
<option value="<?=$rec['cid'];?>"><?=$rec['cname'];?></option>
<?php }?>                                        
</select>
                        </div>


                                       <input type="text" name="stitle" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Sub-category title" required="">
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" name="subcatname"class="form-control" id="inlineFormInputGroupUsername2" placeholder="Sub-category Name" required="">
                        </div>
<input type="submit"  class="btn btn-primary mb-2" name="sub" value="submit">
                    </form>
                </div>
                <!--// Inline Form -->
<!-- table7 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sub-Category Show</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Sub-Category Title</th>
                                    <th scope="col">Sub-Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 

$sql=mysqli_query($con,"select * from `subcategory`");
$i=0;
while($rec=mysqli_fetch_array($sql))
{
  $catsql=mysqli_query($con,"select * from `category` where `cid`='$rec[cid]'");

  $catrec=mysqli_fetch_array($catsql);
$i++; 
                      echo "  <tr>
                     <th scope='row'>$i</th>
                     <td>$catrec[cname]</td>
                             <td>$rec[stitle]</td>
                                    <td>$rec[sname]</td>
                        <td><button type='button' class='btn btn-lg btn-outline-primary py-2 price2-btn'data-toggle='modal' data-target='exampleModal'><a href='editsubcategory.php?sd=$rec[sid]'>Edit</a>
                        </button>|<button type='button' class='btn btn-lg btn-outline-primary py-2 price2-btn' data-toggle='modal'data-target='exampleModal'><a href='delete.php?sd=$rec[sid]'>Delete</a></button></td>


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