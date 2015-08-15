<?php
	include('../config/config.php');

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$MemberNo = $_POST['MemberNo'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$MemberType = $_POST['MemberType'];
	$Institute = $_POST['Institute'];
	$MemberStatus = $_POST['MemberStatus'];
	$PhoneNum = $_POST['PhoneNum'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
	$Fax = $_POST['Fax'];
	$LineID = $_POST['LineID'];
	$Address = $_POST['Address'];
	$Province = $_POST['Province'];
	$Aumpur = $_POST['Aumpur'];

	$sqlInset = "INSERT INTO member 
	VALUES('',
		'$MemberNo',
		'$Username',
		'$Password',
		'$MemberType',
		'$FirstName',
		'$LastName',
		'$Institute',
		'',
		'$PhoneNum',
		'$Mobile',
		'$Fax',
		'$Address',
		'$LineID',
		'',
		'$Aumpur',
		'$Province',
		$MemberStatus,
		NOW(),
		'".$_SESSION['MemberID']."',
		NOW(),
		'".$_SESSION['MemberID']."')";
	$sqlQuery = mysql_db_query($dbname, $sqlInset);
	if($sqlQuery){
		$MemberID = mysql_insert_id();
		$json = array(
			'IsResult'=>true,
			'MemberID'=>$MemberID,
			);
	}else{
		$json = array(
			'IsResult'=>flase
			);
	}
header('Content-type: application/json');
		echo json_encode($json);

?>