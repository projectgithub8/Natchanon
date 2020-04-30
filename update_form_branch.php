<?php  //update_form.php
include_once('conn.php');
$branch_id  = $_GET["branch_id"];
$sql = ("SELECT 
		branch_name 
		FROM branch 
		WHERE branch_id = $branch_id");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$branch_name = $row["branch_name"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update_branch.php" method="post">
<input type="hidden" name="branch_id" value=<?php echo $branch_id;?>>
<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลสาขาวิชา </td></tr></table>
	<table align = center width = "25%" border = "0">
		<tr><td align =right><b> ชื่อสาขา</td><td> <input type="text" name = "branch_name" value=<?php 
		echo $branch_name; ?>><br> </td></tr>
		<tr><td><b> </td><td> </td></tr>
        <tr><td><b></td>
		<td> <input type="submit" value="แก้ไขข้อมูล">
			 <input type="reset" value="ยกเลิก"><br> </td></tr>
</form></body>
