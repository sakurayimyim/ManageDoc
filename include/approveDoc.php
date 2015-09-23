<?php session_start(); 
	include('../config/config.php');
	$DocID = $_POST['DocID'];


	$sqlUpdate = "UPDATE document set ApproveStatus = '1', 
				  ModifiedDate = NOW(),
				  ModifiedByID = '".$_SESSION['MemberID']."'
				  WHERE DocID = '$DocID'";

	$sqlQuery = mysql_db_query($dbname, $sqlUpdate);
	if($sqlQuery){
		$json = array(
			'IsResult'=>true,
			'DocID'=>$DocID,
			);
	}else{
		$json = array(
			'IsResult'=>flase
			);
	}
header('Content-type: application/json');
		echo json_encode($json);
	?>