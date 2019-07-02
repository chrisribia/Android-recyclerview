<?php
$con=mysqli_connect("localhost","root","","u288012116_json");

$sql="SELECT * FROM `subjects`";
$result=mysqli_query($con,$sql);

$data=array();
while($row=mysqli_fetch_assoc($result)){
$data[]=$row;
}



	
	header('Content-Type:Application/json');
			
	echo json_encode($data);
	
	
	?>