<?php session_start(); 
	include('../config/config.php');
	$Member = $_POST['MemberID'];

	$sqlDel = "DELETE FROM member WHERE MemberID = '$Member'";
	$sqlQuery = mysql_db_query($dbname, $sqlDel);
	if($sqlQuery){
		$json = array(
			'IsResult'=>true
			);
	}else{
		$json = array(
			'IsResult'=>flase
			);
	}
	header('Content-type: application/json');
		echo json_encode($json);
	?>