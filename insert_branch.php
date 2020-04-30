<?php
include_once('conn.php');
$branch_name = $_POST['branch_name'];
if($branch_name=="" || empty($branch_name))
{
	echo "ชื่อสาขา";
	echo "<script language='Javascript'>
			alert('ชื่อสาขา')
			window.location='insert_form_branch.php';
			</script>";
}else{
$sql = "insert into branch(branch_name)
values('$branch_name')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_branch.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
}
mysqli_close($conn);
?>