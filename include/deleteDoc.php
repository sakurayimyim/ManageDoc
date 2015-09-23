<?php session_start(); 
	include('../config/config.php');
	$DocID = $_POST['DocID'];

	$sqlDel = "UPDATE document SET IsDelete = 1, ModifiedDate = NOW(), ModifiedByID = '".$_SESSION['MemberID']."' WHERE DocID = '$DocID'";
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