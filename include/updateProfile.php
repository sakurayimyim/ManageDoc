<?php session_start(); 
	include('../config/config.php');
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$PhoneNum = $_POST['PhoneNum'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$MemberID = $_POST['MemberID'];

	$sqlUpdate = "UPDATE member set MemberNo = '$MemberNo',";
	$sqlUpdate .= "Username = '$Username',";
	$sqlUpdate .= "Password = '".base64_encode($Password)."',";
	$sqlUpdate .= "MemberFirstName = '$FirstName',";
	$sqlUpdate .= "MemberLastName = '$LastName',";
	$sqlUpdate .= "MemberImg = '',";
	$sqlUpdate .= "Email = '$Email',";
	$sqlUpdate .= "PhoneNum = '$PhoneNum',";
	$sqlUpdate .= "Mobile = '$Mobile',";
	$sqlUpdate .= "Address = '$Address',";
	$sqlUpdate .= "ModifiedDate = NOW(),";
	$sqlUpdate .= "ModifiedByID = '".$_SESSION['MemberID']."' WHERE MemberID = '$MemberID'";

	$sqlQuery = mysql_db_query($dbname, $sqlUpdate);
	if($sqlQuery){
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