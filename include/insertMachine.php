<?php session_start(); 
	include('../config/config.php');

	$MachineLocName = $_POST['MachineLocName'];
	$MachineName = $_POST['MachineName'];
	$MachineNameEng = $_POST['MachineNameEng'];
	$MachineModel = $_POST['MachineModel'];
	$MachineGen = $_POST['MachineGen'];
	$MachineNo = $_POST['MachineNo'];
	$MachineSize = $_POST['MachineSize'];
	$MachineAbility = $_POST['MachineAbility'];
	$MachineOwner = $_POST['MachineOwner'];
	$MachinePrice = $_POST['MachinePrice'];
	$FileWord = $_POST['FileWord'];
	$Latitude = $_POST['Latitude'];
	$Longitude = $_POST['Longitude'];
	$MapZoom = $_POST['MapZoom'];
	$FileMap = $_POST['FileMap'];

	$sqlInsert = "INSERT INTO machine VALUES('',
		'$MachineLocName',
		'$MachineName',
		'$MachineNameEng',
		'$MachineModel',
		'$MachineGen',
		'$MachineNo',
		'$MachineSize',
		'MachineAbility',
		'MachineOwner',
		'$MachinePrice',
		'',
		'$Latitude',
		'$Longitude',
		'',
		'',
		'0',
		NOW(),
		'".$_SESSION['MemberID']."',
		NOW(),
		'".$_SESSION['MemberID']."')";
	$sqlQuery = mysql_db_query($dbname, $sqlInsert);
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