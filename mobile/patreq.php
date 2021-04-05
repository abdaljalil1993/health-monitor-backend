<?php
include 'conn.php';
$h=$_POST['heart'];
$p=$_POST['presure'];
$t=$_POST['temp'];
$lat=$_POST['lat'];
$lan=$_POST['lan'];
$pid=$_POST['pid'];
$lan=$lat.','.$lan;

$r=mysqli_query($con,"insert into status(pid,heart,lat,lan,temp,presur)
	values('$pid','$h','$lat','$lan','$t','$p')");
if(issets($r)  )
{
	$arr['f']=true;
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>