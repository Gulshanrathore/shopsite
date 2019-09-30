<?php
if(isset($_REQUEST['n']))
{
	$qs=$_REQUEST['n'];
	include("database.php");
	$ct=mysqli_query($con,"select * from `subcategory` where `cid`='$qs'");
	echo "<option value=''>Select....</option>";
	while($cat=mysqli_fetch_array($ct))
	{
		echo "<option value='$cat[sid]'>$cat[sname]</option>";
	}
}
?>
<?php
if(isset($_REQUEST['pn']))
{
	$qso=$_REQUEST['pn'];
	include("database.php");
	$ct=mysqli_query($con,"select * from `subcategory` where `cid`='$qso'");
	echo "<option value=''>Select....</option>";
	while($cat=mysqli_fetch_array($ct))
	{
		echo "<option value='$cat[sid]'>$cat[sname]</option>";
	}
}
?>