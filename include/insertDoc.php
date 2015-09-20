<?php session_start(); 
	include('../config/config.php');
	include('../lib/lib.php');
echo ConvertDate($_POST['WorkDueDate'],"Y-m-d");
echo $sqlInsert = "INSERT INTO document VALUES('', 
	'".$_POST['ListNo']."', 
	'".$_POST['WorkCode']."', 
	'".$_POST['App']."', 
	'".$_POST['JuristicTypeID']."', 
	'".$_POST['OtherJuristicType']."', 
	'".$_POST['BankID']."', 
	'".$_POST['ContractNo']."', 
	'".$_POST['CustomerName']."', 
	'".$_POST['BizRegisNo']."', 
	'".$_POST['CustomerAddNo']."', 
	'".$_POST['CustomerLane']."', 
	'".$_POST['CustomerStreet']."', 
	'".$_POST['CustomerRiver']."', 
	'".$_POST['CustomerMoo']."', 
	'".$_POST['CustomerSubDistrict']."', 
	'".$_POST['CustomerDistrictID']."', 
	'".$_POST['CustomerProvinceID']."', 
	'".$_POST['Contact1']."', 
	'".$_POST['Contact1Phone']."', 
	'".$_POST['Contact1Fax']."', 
	'".$_POST['Contact1Email']."', 
	'".$_POST['Contact1Web']."', 
	'".$_POST['Contact2']."', 
	'".$_POST['Contact2Phone']."', 
	'".$_POST['Contact2Fax']."', 
	'".$_POST['Contact2Email']."', 
	'".$_POST['Contact2Web']."', 
	'".$_POST['MachineOwner']."', 
	'".$_POST['MacOwnerAddNo']."', 
	'".$_POST['MacOwnerLane']."', 
	'".$_POST['MacOwnerStreet']."', 
	'".$_POST['MacOwnerRiver']."', 
	'".$_POST['MacOwnerMoo']."', 
	'".$_POST['MacOwnerSubDistrict']."', 
	'".$_POST['MacOwnerDistrictID']."', 
	'".$_POST['MacOwnerProvinceID']."', 
	'".$_POST['MachineLocationName']."', 
	'".$_POST['MacLocLatitute']."', 
	'".$_POST['MacLocLongitute']."', 
	'".$_POST['MacLocAddrNo']."', 
	'".$_POST['MacLocLane']."',
	'".$_POST['MacLocStreet']."',  
	'".$_POST['MacLocRiver']."', 
	'".$_POST['MacLocMoo']."', 
	'".$_POST['MacLocSubDistrict']."', 
	'".$_POST['MacLocDistrictID']."', 
	'".$_POST['MacLocProvinceID']."', 
	'".$_POST['EnterpriseLicienceNo']."', 
	'".$_POST['IndustryType']."', 
	'".$_POST['MachineAmnt']."', 
	'".ConvertDate($_POST['RecieveWorkDate'])."', 
	'".ConvertDate($_POST['WorkDueDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['InspectDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['EnginInspectDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['OfferDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['EnterInspectDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['PlateNoDate'],"Y-m-d")."', 
	'".$_POST['ResponseEmpID']."', 
	'".$_POST['ResponseHeadID']."', 
	'".$_POST['StatusPresentID']."', 
	'".$_POST['OtherStatusPresent']."', 
	'".ConvertDate($_POST['StatusPresentDate'],"Y-m-d")."', 
	'".$_POST['ProblemID']."', 
	'".$_POST['OtherProblem']."', 
	'".$_POST['SolutionID']."', 
	'".$_POST['OtherSolution']."', 
	'".$_POST['EstimateFee']."', 
	'".ConvertDate($_POST['TakeFeeDate'],"Y-m-d")."', 
	'".$_POST['RevenueFee']."', 
	'".ConvertDate($_POST['OpenRecieptDate'],"Y-m-d")."',
	'".$_POST['RecieptNo']."',  
	'".ConvertDate($_POST['MacRegisBookDate'],"Y-m-d")."',
	'".$_POST['MacRegisBookNo']."', 
	'".$_POST['MacPlateNo']."', 
	'".ConvertDate($_POST['SendRegisBookDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['CompleteWorkDate'],"Y-m-d")."', 
	'".ConvertDate($_POST['CancelWorkDate'],"Y-m-d")."', 
	'0', 
	'0', 
	NOW(), 
	'".$_SESSION['MemberID']."', 
	NOW(), 
	'".$_SESSION['MemberID']."')";
$sqlQuery = mysql_db_query($dbname, $sqlInsert);
$DocID = mysql_insert_id();
if($sqlQuery != "" && $_POST['StatusPresentID'] == 19 && $_POST['ProblemID'] > 0){
	$sqlDocProbLog = "INSERT INTO documentproblemlog VALUES('',
	'".$_POST['MacPlateNo']."',
	'".$DocID."',
	'".$_POST['ProblemID']."',
	'".$_POST['SolutionID']."',
	NOW(),
	NOW(),
	'".$_SESSION['MemberID']."', 
	NOW(),
	'".$_SESSION['MemberID']."')";
}

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