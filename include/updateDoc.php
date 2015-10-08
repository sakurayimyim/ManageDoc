<?php session_start(); 
	include('../config/config.php');
	include('../lib/lib.php');
	$DocID = $_POST['DocID'];
 $sqlUpdate = "UPDATE document SET App = '".$_POST['App']."',"; 
	$sqlUpdate .= "JuristicTypeID = '".$_POST['JuristicTypeID']."',";  
	$sqlUpdate .= "OtherJuristicType = '".$_POST['OtherJuristicType']."', "; 
	$sqlUpdate .= "BankID = '".$_POST['BankID']."', "; 
	$sqlUpdate .= "ContractNo = '".$_POST['ContractNo']."', "; 
	$sqlUpdate .= "CustomerName = '".$_POST['CustomerName']."', "; 
	$sqlUpdate .= "BizRegisNo = '".$_POST['BizRegisNo']."', "; 
	$sqlUpdate .= "CustomerAddNo = '".$_POST['CustomerAddNo']."', "; 
	$sqlUpdate .= "CustomerLane = '".$_POST['CustomerLane']."', "; 
	$sqlUpdate .= "CustomerStreet = '".$_POST['CustomerStreet']."', "; 
	$sqlUpdate .= "CustomerRiver = '".$_POST['CustomerRiver']."', "; 
	$sqlUpdate .= "CustomerMoo = '".$_POST['CustomerMoo']."', "; 
	$sqlUpdate .= "CustomerSubDistrict = '".$_POST['CustomerSubDistrict']."', "; 
	$sqlUpdate .= "CustomerDistrictID = '".$_POST['CustomerDistrictID']."', "; 
	$sqlUpdate .= "CustomerProvinceID = '".$_POST['CustomerProvinceID']."', "; 
	$sqlUpdate .= "Contact1 = '".$_POST['Contact1']."', "; 
	$sqlUpdate .= "Contact1Phone = '".$_POST['Contact1Phone']."', "; 
	$sqlUpdate .= "Contact1Fax = '".$_POST['Contact1Fax']."', "; 
	$sqlUpdate .= "Contact1Email = '".$_POST['Contact1Email']."', "; 
	$sqlUpdate .= "Contact1Web = '".$_POST['Contact1Web']."', "; 
	$sqlUpdate .= "Contact2 = '".$_POST['Contact2']."', "; 
	$sqlUpdate .= "Contact2Phone = '".$_POST['Contact2Phone']."', "; 
	$sqlUpdate .= "Contact2Fax = '".$_POST['Contact2Fax']."', "; 
	$sqlUpdate .= "Contact2Email = '".$_POST['Contact2Email']."', ";  
	$sqlUpdate .= "Contact2Email = '".$_POST['Contact2Web']."', "; 
	$sqlUpdate .= "MachineOwner = '".$_POST['MachineOwner']."', "; 
	$sqlUpdate .= "MacOwnerAddNo = '".$_POST['MacOwnerAddNo']."', "; 
	$sqlUpdate .= "MacOwnerLane = '".$_POST['MacOwnerLane']."', "; 
	$sqlUpdate .= "MacOwnerStreet = '".$_POST['MacOwnerStreet']."',";  
	$sqlUpdate .= "MacOwnerRiver = '".$_POST['MacOwnerRiver']."', "; 
	$sqlUpdate .= "MacOwnerMoo = '".$_POST['MacOwnerMoo']."', "; 
	$sqlUpdate .= "MacOwnerSubDistrict = '".$_POST['MacOwnerSubDistrict']."', "; 
	$sqlUpdate .= "MacOwnerDistrictID = '".$_POST['MacOwnerDistrictID']."', "; 
	$sqlUpdate .= "MacOwnerProvinceID = '".$_POST['MacOwnerProvinceID']."', "; 
	$sqlUpdate .= "MachineLocationName = '".$_POST['MachineLocationName']."', "; 
	$sqlUpdate .= "MacLocLatitute = '".$_POST['MacLocLatitute']."', "; 
	$sqlUpdate .= "MacLocLongitute = '".$_POST['MacLocLongitute']."', "; 
	$sqlUpdate .= "MacLocAddrNo = '".$_POST['MacLocAddrNo']."', "; 
	$sqlUpdate .= "MacLocLane = '".$_POST['MacLocLane']."',"; 
	$sqlUpdate .= "MacLocStreet = '".$_POST['MacLocStreet']."',  "; 
	$sqlUpdate .= "MacLocRiver = '".$_POST['MacLocRiver']."', "; 
	$sqlUpdate .= "MacLocMoo = '".$_POST['MacLocMoo']."', "; 
	$sqlUpdate .= "MacLocSubDistrict = '".$_POST['MacLocSubDistrict']."', "; 
	$sqlUpdate .= "MacLocDistrictID = '".$_POST['MacLocDistrictID']."', "; 
	$sqlUpdate .= "MacLocProvinceID = '".$_POST['MacLocProvinceID']."', "; 
	$sqlUpdate .= "EnterpriseLicienceNo = '".$_POST['EnterpriseLicienceNo']."', "; 
	$sqlUpdate .= "IndustryType = '".$_POST['IndustryType']."', "; 
	$sqlUpdate .= "MachineAmnt = '".$_POST['MachineAmnt']."', "; 
	$sqlUpdate .= "RecieveWorkDate = '".ConvertDate($_POST['RecieveWorkDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "WorkDueDate = '".ConvertDate($_POST['WorkDueDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "InspectDate = '".ConvertDate($_POST['InspectDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "EnginInspectDate = '".ConvertDate($_POST['EnginInspectDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "OfferDate = '".ConvertDate($_POST['OfferDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "EnterInspectDate = '".ConvertDate($_POST['EnterInspectDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "PlateNoDate = '".ConvertDate($_POST['PlateNoDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "ResponseEmpID = '".$_POST['ResponseEmpID']."', "; 
	$sqlUpdate .= "ResponseHeadID = '".$_POST['ResponseHeadID']."', "; 
	$sqlUpdate .= "StatusPresentID = '".$_POST['StatusPresentID']."', "; 
	$sqlUpdate .= "OtherStatusPresent = '".$_POST['OtherStatusPresent']."', "; 
	$sqlUpdate .= "StatusPresentDate = '".ConvertDate($_POST['StatusPresentDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "ProblemID = '".$_POST['ProblemID']."', "; 
	$sqlUpdate .= "OtherProblem = '".$_POST['OtherProblem']."', "; 
	$sqlUpdate .= "SolutionID = '".$_POST['SolutionID']."', "; 
	$sqlUpdate .= "OtherSolution = '".$_POST['OtherSolution']."', "; 
	$sqlUpdate .= "EstimateFee = '".$_POST['EstimateFee']."', "; 
	$sqlUpdate .= "TakeFeeDate = '".ConvertDate($_POST['TakeFeeDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "RevenueFee = '".$_POST['RevenueFee']."', "; 
	$sqlUpdate .= "OpenRecieptDate = '".ConvertDate($_POST['OpenRecieptDate'],"Y-m-d")."',"; 
	$sqlUpdate .= "RecieptNo = '".$_POST['RecieptNo']."',  "; 
	$sqlUpdate .= "MacRegisBookDate = '".ConvertDate($_POST['MacRegisBookDate'],"Y-m-d")."',"; 
	$sqlUpdate .= "MacRegisBookNo = '".$_POST['MacRegisBookNo']."', "; 
	$sqlUpdate .= "MacPlateNo = '".$_POST['MacPlateNo']."', "; 
	$sqlUpdate .= "SendRegisBookDate = '".ConvertDate($_POST['SendRegisBookDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "CompleteWorkDate = '".ConvertDate($_POST['CompleteWorkDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "CancelWorkDate = '".ConvertDate($_POST['CancelWorkDate'],"Y-m-d")."', "; 
	$sqlUpdate .= "ModifiedDate = NOW(),"; 
	$sqlUpdate .= "ModifiedByID = '". $_SESSION['MemberID']."' WHERE DocID = '".$DocID."'";

	$sqlQuery = mysql_db_query($dbname, $sqlUpdate);

if($sqlQuery != "" && $_POST['StatusPresentID'] == 19 && $_POST['ProblemID'] > 0 && $_POST['SolutionID'] > 0){
	$sqlCheckLog = "SELECT * FROM documentproblemlog WHERE DocID = '$DocID' ORDER BY DocProblemLogID DESC LIMIT 0,1";
	$checkLog = mysql_db_query($dbname, $sqlCheckLog);
	$dataLog = mysql_fetch_array($checkLog); 

	if(($dataLog['ProblemID'] != $_POST['ProblemID']) || ($dataLog['SolutionID'] != $_POST['SolutionID']))
	{
		echo $dataLog['ProblemID'];
		echo $dataLog['SolutionID'];
		echo $_POST['ProblemID'];
		echo $_POST['SolutionID'];
		
		$SolutionName = "";
		$ProblemName = "";
		if($_POST['ProblemID'] == 40){
			$ProblemName = $_POST['OtherProblem'];
		}else{
			$sqlProb = "SELECT ProblemName from problem Where ProblemID = '".$_POST['ProblemID']."'";
			$probQuery = mysql_db_query($dbname, $sqlProb);
			$dataProb = mysql_fetch_array($probQuery);
			$ProblemName = $dataProb['ProblemName'];
		}
		if($_POST['SolutionID'] == 6){
			$SolutionName = $_POST['OtherSolution'];
		}else{
			$sqlSolution = "SELECT SolutionName from solution Where SolutionID = '".$_POST['SolutionID']."'";
			$solutionQuery = mysql_db_query($dbname, $sqlSolution);
			$dataSolution = mysql_fetch_array($solutionQuery);
			$SolutionName = $dataSolution['SolutionName'];
		}
		$sqlDocProbLog = "INSERT INTO documentproblemlog VALUES('',
		'',
		'".$DocID."',
		'".$_POST['ProblemID']."',
		'".$ProblemName."',
		'".$_POST['SolutionID']."',
		'".$SolutionName."',
		NOW(),
		NOW(),
		'".$_SESSION['MemberID']."', 
		NOW(),
		'".$_SESSION['MemberID']."')";
		$ProbLogQuery = mysql_db_query($dbname, $sqlDocProbLog);

	}
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
