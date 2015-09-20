<?php 
$DocID = $_GET['id'];
$sql="select * from document
JOIN bank ON (document.BankID = bank.BankID) 
JOIN juristictype ON (document.JuristicTypeID = juristictype.JuristicTypeID)
JOIN responseemp ON (document.ResponseEmpID = responseemp.ResponseEmpID) 
JOIN responsehead ON (document.ResponseHeadID = responsehead.ResponseHeadID)   
WHERE document.DocID = $DocID";
  $result=mysql_db_query($dbname,$sql);
  $objResult=mysql_fetch_array($result);
  $BankName=$objResult['BankName'];
  $WorkCode=$objResult['WorkCode'];
  $RecieveWorkDate=$objResult['RecieveWorkDate'];
  $ContractNo=$objResult['ContractNo'];
  $WorkDueDate=$objResult['WorkDueDate'];
  $JuristicTypeName=$objResult['JuristicTypeName'];
  $OfferDate=$objResult['OfferDate'];
  $CustomerName=$objResult['CustomerName'];
  $InspectDate=$objResult['InspectDate'];
  $MachineLocationName=$objResult['MachineLocationName'];
  $ResponseEmpName=$objResult['ResponseEmpName'];
  $MacLocAddrNo=$objResult['MacLocAddrNo'];
  $ResponseHeadName=$objResult['ResponseHeadName'];
  $MachineAmnt=$objResult['MachineAmnt'];
  $MachineLocationName=$objResult['MachineLocationName'];
  $App=$objResult['App'];
  ?>
 <div class="content-list">
 <div class="detai_subj"><?=$BankName ?></div>
 <div class="content_detail">
  	<div class="detail_form">
  		<div class="detail_forml">รหัสงานบริษัท :</div>
  		<div class="detail_formr"><?=$WorkCode ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">วดป. รับงานและออกรหัสงานบริษัท :</div>
  		<div class="detail_formr detail_r"><?=FullDateThai($RecieveWorkDate) ?></div>
  	</div>
  	<div class="detail_form">
  		<div class="detail_forml">เลขที่สัญญาสถาบัน/ลูกค้า :</div>
  		<div class="detail_formr"><?=$ContractNo ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">วดป. ครบกำหนดส่งงานสถาบัน/ลูกค้า :</div>
  		<div class="detail_formr detail_r"><?=FullDateThai($WorkDueDate) ?></div>
  	</div>
  	<div class="detail_form">
  		<div class="detail_forml">ประเภทนิติกรรม :</div>
  		<div class="detail_formr"><?=$JuristicTypeName ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">วดป. ที่ยื่นเรื่องกับ สนก. :</div>
  		<div class="detail_formr detail_r"><?=FullDateThai($OfferDate) ?></div>
  	</div>
  	<div class="detail_form">
  		<div class="detail_forml">ชื่อลูกค้าสถาบัน/ลูกค้า :</div>
  		<div class="detail_formr"><?=$CustomerName ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">วดป. จนท. สนก. นัดตรวจโรงงาน :</div>
  		<div class="detail_formr detail_r"><?=FullDateThai($InspectDate) ?></div>
  	</div>
  	<div class="detail_form">
  		<div class="detail_forml">ชื่อสถานที่ตั้งกรรมสิทธิ์เครื่องจักร :</div>
  		<div class="detail_formr"><?=$MachineLocationName ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">จนท. สนก. ผู้รับผิดชอบงาน :</div>
  		<div class="detail_formr detail_r"><?=$ResponseEmpName ?></div>
  	</div>
 	<div class="detail_form">
  		<div class="detail_forml">ชื่อสถานที่ตั้งกรรมสิทธิ์เครื่องจักร :</div>
  		<div class="detail_formr"><?=$MacLocAddrNo ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">จนท. สนก. ผู้รับผิดชอบงาน :</div>
  		<div class="detail_formr detail_r"><?=$ResponseHeadName ?></div>
  	</div>
  	<div class="detail_form">
  		<div class="detail_forml">จำนวนเครื่องจักรที่ทำนิติกรรม (เครื่อง) :</div>
  		<div class="detail_formr"><?=$MachineAmnt ?></div>
  	</div>
  	<div class="detail_form detail_w45">
  		<div class="detail_forml detail_l">APP :</div>
  		<div class="detail_formr detail_r"><?=$App ?></div>
  	</div>
  <div class="clean"></div>
 </div>

<div class="clean"></div>
<div class="detai_subj" style="font-size:24px;">รายละเอียดงานติดปัญหา</div>
	<table class="table">
		<tr>
			<td width="7%">ลำดับที่</td>
			<td width="18%">วดป. สถานะปัจจุบัน</td>
			<td width="40%">รายละเอียดงานติดปัญหา</td>
			<td width="35%">แนวทางแก้ไข</td>
		</tr>
    <?php 
      $sqlLogProb = "select * from documentproblemlog where DocID = $DocID";
      $logProbQuery = mysql_db_query($dbname, $sqlLogProb);
      while ($objLogProb = mysql_fetch_array($logProbQuery)) {
        $ListNo = 1;
    ?>
    <tr>
      <td><?=$ListNo?></td>
      <td><?=FullDateThai($objLogProb['ProblemLogDate'])?></td>
      <td><?=$objLogProb['OtherProblem']?></td>
      <td><?=$objLogProb['OtherSolution']?></td>
    </tr> 
    <?php
    $ListNo++ ;
      }
    ?>
	</table>

</div>
<div class="clean mt-57"></div>





