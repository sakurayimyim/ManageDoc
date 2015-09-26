<?php
function ConvertDate($Date,$ToFormat){
	if($Date != null && $Date != "" && $Date != "0000-00-00"){
		$strDate = str_replace('/', '-', $Date);
		$newDate = date($ToFormat, strtotime($strDate));
		return $newDate;
	}else{
		return null;
	}
}
function FullDateThai($strDate){
	if($strDate != '0000-00-00'){
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = array("0"=>"",  
						    "1"=>"มกราคม",  
						    "2"=>"กุมภาพันธ์",  
						    "3"=>"มีนาคม",  
						    "4"=>"เมษายน",  
						    "5"=>"พฤษภาคม",  
						    "6"=>"มิถุนายน",   
						    "7"=>"กรกฎาคม",  
						    "8"=>"สิงหาคม",  
						    "9"=>"กันยายน",  
						    "10"=>"ตุลาคม",  
						    "11"=>"พฤศจิกายน",  
						    "12"=>"ธันวาคม"                    
						);
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}else{
		return null;
	}
}
function CheckLogin(){
  if(!isset($_SESSION['MemberID'])){
     echo "<script>window.location = '/ManageDoc/login.php';</script>";
  }
}
function PriorityDocCheck(){
	$MemberID = $_SESSION['MemberID'];
	$MemberType = $_SESSION['MemberType'];
  if($MemberID != "" && $MemberType != ""){
    switch ($MemberType) {
    		case '2':
    			$page = $_GET['page'];
    			if($page == 'reportDoc' || $page == 'listReportDoc' || $page == 'listMember' || $page == 'newMember' || $page == 'editMember' || $page == 'deleteMember'){
    					echo "<script>window.location.href = 'index.php?page=listDoc</script>";
    				}
    		break;
    		case '3':
    		break;
    	default:
    		break;
    }
  }else{
    echo "<script>window.location.href = 'index.php?page=detailDoc&id='+data.DocID;</script>";
  }
}
function decryptStringArray ($stringArray, $key = "Ra@7757")
{
    $s = unserialize(rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode(strtr($stringArray, '-_,', '+/=')), MCRYPT_MODE_CBC, md5(md5($key))), "\0"));
    return $s;
}

function encryptStringArray ($stringArray, $key = "Ra@7757") 
{
    $s = strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), serialize($stringArray), MCRYPT_MODE_CBC, md5(md5($key)))), '+/=', '-_,');
    return $s;
}

function prepareUrl($url, $key = "Ra@7757")
{
    $url = explode("?",$url,2);
    if(sizeof($url) <= 1)
        return $url;
    else
        return $url[0]."?params=".encryptStringArray($url[1],$key);
}

function setGET($params,$key = "Ra@7757") 
{
    $params = decryptStringArray($params,$key);
    $param_pairs = explode('&',$params);
    foreach($param_pairs as $pair)
    {
        $split_pair = explode('=',$pair);
        $_GET[$split_pair[0]] = $split_pair[1];
    }
}
?>