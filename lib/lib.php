<?php
function ConvertDate($Date,$ToFormat){
	if($Date != null && $Date != ""){
		$strDate = str_replace('/', '-', $Date);
		$newDate = date($ToFormat, strtotime($strDate));
		return $newDate;
	}else{
		return null;
	}
}
?>