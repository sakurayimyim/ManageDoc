<?php session_start(); 
include('../config/config.php');
$Username = $_POST['Username'];
$Password = $_POST['Password'];
if($Username != "" && $Password != ""){
	$sql = "select * from member where Username = '$Username' and Password = '$Password'";
	$sqlResult = mysql_db_query($dbname,$sql);
	$objResult = mysql_fetch_array($sqlResult);
	$num = mysql_num_rows($sqlResult);
	if($num > 0){
		$_SESSION['MemberID'] = $objResult['MemberID'];
		$_SESSION['UserName'] = $objResult['UserName'];
		$_SESSION['MemberType'] = $objResult['MemberType'];
		$_SESSION['FullName'] = $objResult['MemberFirstName'].' '.$objResult['MemberLastName'];
		$_SESSION['EstateID'] = $objResult['EstateID'];
		$_SESSION['Status'] = $objResult['Status'];

		$json = array(
			'IsResult'=>true,
			'MemberID'=>$objResult['MemberID'],
			'MemberType'=>$objResult['MemberType']
			);
		header('Content-type: application/json');
		echo json_encode($json);
	}else{
		$json = array(
			'IsResult'=>flase
			);
		header('Content-type: application/json');
		echo json_encode($json);
	}
}
?>