<?php
require "connbuero2.php";
$sql = "select * from branche";
if(!$conn->query($sql)) {
	echo "Error in connection to Database";
}else {
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		$return_arr['branche'] = array();
		while($row = $result->fetch_array()) {
			array_push($return_arr['branche'], array(
			'branche_id' =>$row['branche_id'],
			'branchenname' =>$row['branchenname']));
		}
		echo json_encode($return_arr);
	}
}



?>