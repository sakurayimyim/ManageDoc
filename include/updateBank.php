<?php session_start(); 
	include('../config/config.php');
	$BankName = $_POST['BankName'];

	$sqlUpdate = "UPDATE bank set BankName = '$BankName',";
	$sqlUpdate .= "ModifiedDate = NOW(),";
	$sqlUpdate .= "ModifiedByID = '".$_SESSION['MemberID']."' WHERE BankID = '$BankID'";

	$sqlQuery = mysql_db_query($dbname, $sqlUpdate);
	if($sqlQuery){
		$json = array(
			'IsResult'=>true,
			'BankID'=>$BankID,
			);
	}else{
		$json = array(
			'IsResult'=>flase
			);
	}
header('Content-type: application/json');
		echo json_encode($json);
	?>