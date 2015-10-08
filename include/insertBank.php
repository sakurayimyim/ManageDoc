<?php session_start(); 
	include('../config/config.php');

	$BankName = $_POST['BankName'];

	$sqlInsert = "INSERT INTO bank VALUES('',
		'$BankName',
		NOW(),
		'".$_SESSION['MemberID']."',
		NOW(),
		'".$_SESSION['MemberID']."')";
	$sqlQuery = mysql_db_query($dbname, $sqlInsert);
	if($sqlQuery){
		$BankID = mysql_insert_id();
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