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
?>