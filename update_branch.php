<?php
include_once('conn.php');
$branch_id = $_POST["branch_id"];
$branch_name = $_POST["branch_name"];
$sql = "update branch set 
		branch_name = '$branch_name' WHERE branch_id = $branch_id";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select_branch.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select_branch.php';
			</script>";
}
mysqli_close($conn);
?>