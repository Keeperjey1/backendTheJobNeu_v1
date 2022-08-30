<?php
require "connbuero2.php";
$a = $_GET['branchenname'];
if(isset($a)) {
	$sql = "select job_id, job_name from jobs where branche_id =(select branche_id from branche where branchenname='".$a."')";
	
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		$return_arr['jobs'] = array();
		while($row = $result->fetch_array()) {
			array_push($return_arr['jobs'], array(
			'job_id' =>$row['job_id'],
			'job_name' =>$row['job_name']));
		}
		echo json_encode($return_arr);
	}
	
	
}
	




?>