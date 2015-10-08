<?php session_start(); 
	include('../config/config.php');
	$BankID = $_POST['BankID'];

	$sqlDel = "DELETE FROM bank WHERE BankID = '$BankID'";
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