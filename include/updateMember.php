<?php session_start(); 
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
	$MemberID = $_POST['MemberID'];

	$sqlUpdate = "UPDATE member set MemberNo = '$MemberNo',";
	$sqlUpdate .= "Username = '$Username',";
	$sqlUpdate .= "Password = '".base64_encode($Password)."',";
	$sqlUpdate .= "MemberType = '$MemberType',";
	$sqlUpdate .= "MemberFirstName = '$FirstName',";
	$sqlUpdate .= "MemberLastName = '$LastName',";
	$sqlUpdate .= "InstituteID = '$Institute',";
	$sqlUpdate .= "MemberImg = '',";
	$sqlUpdate .= "Email = '$Email',";
	$sqlUpdate .= "PhoneNum = '$PhoneNum',";
	$sqlUpdate .= "Mobile = '$Mobile',";
	$sqlUpdate .= "Fax = '$Fax',";
	$sqlUpdate .= "Address = '$Address',";
	$sqlUpdate .= "LineID = '$LineID',";
	$sqlUpdate .= "AumpurID = '$Aumpur',";
	$sqlUpdate .= "ProvinceID = '$Province',";
	$sqlUpdate .= "Status = '$MemberStatus',";
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