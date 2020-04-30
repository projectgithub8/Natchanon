<?php
include_once('conn.php');
$branch_id = $_GET['branch_id'];
$sql = "delete from branch
		where branch_id = '$branch_id'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select_branch.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select_branch.php';
			</script>";
}
mysqli_close($conn);
?>