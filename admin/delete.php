<?php
include ("database.php");

if(isset($_REQUEST['cd']))
{
$ad=$_REQUEST['cd'];
$rec=mysqli_query($con,"delete from `category` where `cid`='$ad'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='category.php'</script>";
}

}


?>


<?php
include ("database.php");

if(isset($_REQUEST['sd']))
{
$ad=$_REQUEST['sd'];
$rec=mysqli_query($con,"delete from `subcategory` where `sid`='$ad'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='subcategory.php'</script>";
}
}
?>



<?php
include ("database.php");

if(isset($_REQUEST['pd']))
{
$ad=$_REQUEST['pd'];
$rec=mysqli_query($con,"delete from `product` where `pid`='$ad'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='product.php'</script>";
}
}
?>




<?php
include ("database.php");

if(isset($_REQUEST['ab']))
{
$bd=$_REQUEST['ab'];
$rec=mysqli_query($con,"delete from `enquiry` where `eid`='$bd'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='enquiry.php'</script>";
}

}


?>



<?php
include ("database.php");

if(isset($_REQUEST['ab']))
{
$ac=$_REQUEST['ab'];
$rec=mysqli_query($con,"delete from `user` where `uid`='$ac'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='user.php'</script>";
}

}


?>

<?php
include ("database.php");

if(isset($_REQUEST['ba']))
{
$or=$_REQUEST['ba'];
$rec=mysqli_query($con,"delete from `order` where `oid`='$or'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='order.php'</script>";
}

}


?>
<?php
include ("database.php");

if(isset($_REQUEST['pp']))
{
$orp=$_REQUEST['pp'];
$rec=mysqli_query($con,"delete from `product` where `pid`='$orp'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='product.php'</script>";
}

}


?>


<?php
include ("database.php");

if(isset($_REQUEST['n']))
{
$orp=$_REQUEST['n'];
$rec=mysqli_query($con,"delete from `banner` where `bid`='$orp'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='banner.php'</script>";
}

}


?>



<?php
include ("database.php");

if(isset($_REQUEST['nn']))
{
$dd=$_REQUEST['nn'];
$rec=mysqli_query($con,"delete from `blog` where `bid`='$dd'");
if($rec==true)
{
    echo "<script>alert ('delete');location ='blog.php'</script>";
}

}


?>

