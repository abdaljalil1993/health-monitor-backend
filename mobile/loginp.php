<?php
include 'conn.php';
$username=$_POST['username'];
$password=$_POST['password'];

$r=mysqli_query($con,"select * from patient where name='$username' and phone='$password'");
if(mysqli_num_rows($r) > 0 )
{
	$row=mysqli_fetch_array($r);
	$arr['f']=true;
	$arr['pid']=$row['id'];
	$arr['phone']=$row['drphone'];
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>