<?php
	$id = decryptStringArray($_GET['id']);
	$sqlSelectDoc = "SELECT * FROM document WHERE DocID = '".$id."'";
	$selectDocQuery = mysql_db_query($dbname, $sqlSelectDoc);
	$dataDoc = mysql_fetch_array($selectDocQuery);
?>
<div class="content-list" style="background:none !important;">
<ul id="editDocument" class="nav nav-tabs">
    <li role="presentation" class="active">
        <a href="#pernelinf" id="pernelinf-tab" role="tab" data-toggle="tab" aria-controls="pernelinf" aria-expanded="true">
         ข้อมูลทั่วไป
        </a>
    </li>
    <li role="presentation">
        <a href="#perneldetail" id="perneldetail-tab" role="tab" data-toggle="tab" aria-controls="perneldetail" >
        รายละเอียดงาน
        </a>
    </li>
    <li role="presentation">
        <a href="#pernelfee" id="pernelfee-tab" role="tab" data-toggle="tab" aria-controls="pernelfee">
        อัตราค่าธรรมเนียม
        </a>
    </li>
    <li role="presentation">
        <a href="#machine" id="machine-tab" role="tab" data-toggle="tab" aria-controls="machine">
        เครื่องจักร
        </a>
    </li>
</ul>
<form id="frmEditDoc" class="from-doc">
<div class="tab-content">
<div role="tabpanel" id="pernelinf" class="tab-pane fade active in" aria-labelledby="pernelinf-tab">
<div class="incontent">	
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ลำดับที่ :</div>
			<div class="label_right"><input name="ListNo" id="ListNo" type="text" class="form-control form-w120" value="<?=$dataDoc['ListNo']?>" readonly></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รหัสงานบริษัท :</div>
			<div class="label_right"><input name="WorkCode" id="WorkCode" type="text" class="form-control form-w250" value="<?=$dataDoc['WorkCode']?>" readonly></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> APP :</div>
			<div class="label_right"><input type="text" name="App" id="App" class="form-control" value="<?=$dataDoc['App']?>" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ประเภทนิติกรรม :</div>
			<div class="label_right">
				<select class="form-control" name="JuristicTypeID" id="JuristicTypeID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlJuristicType = "SELECT JuristicTypeID, JuristicTypeName FROM juristictype";
						$juristicTypeQuery = mysql_db_query($dbname, $sqlJuristicType);
						while ($objJur = mysql_fetch_array($juristicTypeQuery)) {
					?>
						<option value="<?=$objJur['JuristicTypeID']?>" <?php if($objJur['JuristicTypeID'] == $dataDoc['JuristicTypeID']){ echo "selected"; } ?>><?=$objJur['JuristicTypeName']?></option>
					<?php
						}
					?>
				</select>
			</div>
		</div>
		<div class="info_left" id="JuristicTypeMore">
			<div class="label_left" ><font color="red">*</font> อื่น ๆ :</div>
			<div class="label_right"><input type="text" name="OtherJuristicType" id="OtherJuristicType" class="form-control" value="<?=$dataDoc['OtherJuristicType']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อสถาบันการเงิน / ลูกค้า :</div>
			<div class="label_right">
				<select class="form-control" name="BankID" id="BankID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlBank = "SELECT * FROM bank";
						$bankQuery = mysql_db_query($dbname, $sqlBank);
						while ($objBank = mysql_fetch_array($bankQuery)) {
					?>
						<option value="<?=$objBank['BankID']?>" <?php if($objBank['BankID'] == $dataDoc['BankID']){ echo "selected"; } ?>><?=$objBank['BankName']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> เลขที่สัญญาสถาบัน / ลูกค้า :</div>
			<div class="label_right"><input type="text" name="ContractNo" id="ContractNo" class="form-control form-w250" value="<?=$dataDoc['ContractNo']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อลูกค้าสถาบัน / ลูกค้า :</div>
			<div class="label_right"><input type="text" name="CustomerName" id="CustomerName" class="form-control" value="<?=$dataDoc['CustomerName']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่ทะเบียนการค้า :</div>
			<div class="label_right"><input type="text" name="BizRegisNo" id="BizRegisNo" class="form-control form-w250" value="<?=$dataDoc['BizRegisNo']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right250"><input type="text" name="CustomerAddNo" id="CustomerAddNo" class="form-control form-w250" value="<?=$dataDoc['CustomerAddNo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตรอก / ซอย :</div>
			<div class="label_right250"><input type="text" name="CustomerLane" id="CustomerLane" class="form-control form-w250" value="<?=$dataDoc['CustomerLane']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">ถนน :</div>
			<div class="label_right250"><input type="text" name="CustomerStreet" id="CustomerStreet" class="form-control form-w250" value="<?=$dataDoc['CustomerStreet']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">คลอง / แม่น้ำ :</div>
			<div class="label_right250"><input type="text" name="CustomerRiver" id="CustomerRiver" class="form-control form-w250" value="<?=$dataDoc['CustomerRiver']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right250"><input type="text" name="CustomerMoo" id="CustomerMoo" class="form-control form-w250" value="<?=$dataDoc['CustomerMoo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตำบล :</div>
			<div class="label_right250"><input type="text" name="CustomerSubDistrict" id="CustomerSubDistrict" class="form-control form-w250" value="<?=$dataDoc['CustomerSubDistrict']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right250"><input type="text" name="CustomerDistrictID" id="CustomerDistrictID" class="form-control form-w250" value="<?=$dataDoc['CustomerDistrictID']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">จังหวัด :</div>
			<div class="label_right250"><input type="text" name="CustomerProvinceID" id="CustomerProvinceID" class="form-control form-w250" value="<?=$dataDoc['CustomerProvinceID']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ติดต่อ (1) :</div>
			<div class="label_right"><input type="text" name="Contact1" id="Contact1" class="form-control" value="<?=$dataDoc['Contact1']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right250"><input type="text" name="Contact1Phone" id="Contact1Phone" class="form-control form-w250" value="<?=$dataDoc['Contact1Phone']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">แฟกซ์ :</div>
			<div class="label_right250"><input type="text" name="Contact1Fax" id="Contact1Fax" class="form-control form-w250" value="<?=$dataDoc['Contact1Fax']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right250"><input type="text" name="Contact1Email" id="Contact1Email" class="form-control form-w250" value="<?=$dataDoc['Contact1Email']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">เว็บไซต์ :</div>
			<div class="label_right250"><input type="text" name="Contact1Web" id="Contact1Web" class="form-control form-w250" value="<?=$dataDoc['Contact1Web']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ติดต่อ (2) :</div>
			<div class="label_right"><input type="text" name="Contact2" id="Contact2" class="form-control" value="<?=$dataDoc['Contact2']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right250"><input type="text" name="Contact2Phone" id="Contact2Phone" class="form-control form-w250" value="<?=$dataDoc['Contact2Phone']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">แฟกซ์ :</div>
			<div class="label_right250"><input type="text" name="Contact2Fax" id="Contact2Fax" class="form-control form-w250" value="<?=$dataDoc['Contact2Fax']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right250"><input type="text" name="Contact2Email" id="Contact2Email" class="form-control form-w250" value="<?=$dataDoc['Contact2Email']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">เว็บไซต์ :</div>
			<div class="label_right250"><input type="text" name="Contact2Web" id="Contact2Web" class="form-control form-w250" value="<?=$dataDoc['Contact2Web']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ถือกรรมสิทธิ์เครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MachineOwner" id="MachineOwner" class="form-control" value="<?=$dataDoc['MachineOwner']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right250"><input type="text" name="MacOwnerAddNo" id="MacOwnerAddNo" class="form-control form-w250" value="<?=$dataDoc['MacOwnerAddNo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตรอก / ซอย :</div>
			<div class="label_right250"><input type="text" name="MacOwnerLane" id="MacOwnerLane" class="form-control form-w250" value="<?=$dataDoc['MacOwnerLane']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">ถนน :</div>
			<div class="label_right250"><input type="text" name="MacOwnerStreet" id="MacOwnerStreet" class="form-control form-w250" value="<?=$dataDoc['MacOwnerStreet']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">คลอง / แม่น้ำ :</div>
			<div class="label_right250"><input type="text" name="MacOwnerRiver" id="MacOwnerRiver" class="form-control form-w250" value="<?=$dataDoc['MacOwnerRiver']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right250"><input type="text" name="MacOwnerMoo" id="MacOwnerMoo" class="form-control form-w250" value="<?=$dataDoc['MacOwnerMoo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตำบล :</div>
			<div class="label_right250"><input type="text" name="MacOwnerSubDistrict" id="MacOwnerSubDistrict" class="form-control form-w250" value="<?=$dataDoc['MacOwnerSubDistrict']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right250"><input type="text" name="MacOwnerDistrictID" id="MacOwnerProvinceID" class="form-control form-w250" value="<?=$dataDoc['MacOwnerProvinceID']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">จังหวัด :</div>
			<div class="label_right250"><input type="text" name="MacOwnerProvinceID" id="MacOwnerProvinceID" class="form-control form-w250" value="<?=$dataDoc['MacOwnerProvinceID']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อสถานที่ตั้งกรรมสิทธิ์เครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MachineLocationName" id="MachineLocationName" class="form-control" value="<?=$dataDoc['MachineLocationName']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">พิกัดละติจูด :</div>
			<div class="label_right250"><input type="text" name="MacLocLatitute" id="MacLocLatitute" class="form-control form-w250" value="<?=$dataDoc['MacLocLatitute']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">พิกัดลองจิจูด :</div>
			<div class="label_right250"><input type="text" name="MacLocLongitute" id="MacLocLongitute" class="form-control form-w250" value="<?=$dataDoc['MacLocLongitute']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right250"><input type="text" name="MacLocAddrNo" id="MacLocAddrNo" class="form-control form-w250" value="<?=$dataDoc['MacLocAddrNo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตรอก / ซอย :</div>
			<div class="label_right250"><input type="text" name="MacLocLane" id="MacLocLane" class="form-control form-w250" value="<?=$dataDoc['MacLocLane']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">ถนน :</div>
			<div class="label_right250"><input type="text" name="MacLocStreet" id="MacLocStreet" class="form-control form-w250" value="<?=$dataDoc['MacLocStreet']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">คลอง / แม่น้ำ :</div>
			<div class="label_right250"><input type="text" name="MacLocRiver" id="MacLocRiver" class="form-control form-w250" value="<?=$dataDoc['MacLocRiver']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right250"><input type="text" name="MacLocMoo" id="MacLocMoo" class="form-control form-w250" value="<?=$dataDoc['MacLocMoo']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">ตำบล :</div>
			<div class="label_right250"><input type="text" name="MacLocSubDistrict" id="MacLocSubDistrict" class="form-control form-w250" value="<?=$dataDoc['MacLocSubDistrict']?>"></div>
		</div>
		<div class="info_left55">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right250"><input type="text" name="MacLocDistrictID" id="MacLocDistrictID" class="form-control form-w250" value="<?=$dataDoc['MacLocDistrictID']?>"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150">จังหวัด :</div>
			<div class="label_right250"><input type="text" name="MacLocProvinceID" id="MacLocProvinceID" class="form-control form-w250" value="<?=$dataDoc['MacLocProvinceID']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ใบอนุญาตประกอบกิจการเลขที่ :</div>
			<div class="label_right"><input type="text" name="EnterpriseLicienceNo" id="EnterpriseLicienceNo" class="form-control form-w250" value="<?=$dataDoc['EnterpriseLicienceNo']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">ประเภทอุตสาหกรรมตาม พรบ. โรงงาน / สจก :</div>
			<div class="label_right"><input type="text" name="IndustryType" id="IndustryType" class="form-control" value="<?=$dataDoc['IndustryType']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">จำนวนเครื่องจักรที่ทำนิติกรรม (เครื่อง) :</div>
			<div class="label_right"><input type="text" name="MachineAmnt" id="MachineAmnt" class="form-control form-w250" value="<?=$dataDoc['MachineAmnt']?>"></div>
		</div>
	</div>
	<div class="clean"></div>
</div>
</div>

<!--*************************** Sheet 2 Start *************************-->
<div role="tabpanel" id="perneldetail" class="tab-pane fade" aria-labelledby="perneldetail-tab">
<div class="incontent">	
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> วดป. รับงานและออกรหัสงานบริษัท :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="RecieveWorkDate" id="RecieveWorkDate" value="<?=ConvertDate($dataDoc['RecieveWorkDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ครบกำหนดส่งงานสถาบัน / ลูกค้า :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="WorkDueDate" id="WorkDueDate" value="<?=ConvertDate($dataDoc['WorkDueDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ออกสำรวจเครื่องจักร / ทำแผนผังที่ตั้งเครื่องจักร :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="InspectDate" id="InspectDate" value="<?=ConvertDate($dataDoc['InspectDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. วิศวกรบริษัทฯ ตรวจแบบ :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="EnginInspectDate" id="EnginInspectDate" value="<?=ConvertDate($dataDoc['EnginInspectDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ยื่นเรื่องกับ สนก. :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="OfferDate" id="OfferDate" value="<?=ConvertDate($dataDoc['OfferDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. จนท. สนก.นัดตรวจโรงงาน :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="EnterInspectDate" id="EnterInspectDate" value="<?=ConvertDate($dataDoc['EnterInspectDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ติดแผ่นป้ายทะเบียนเครื่องจักร :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="PlateNoDate" id="PlateNoDate" value="<?=ConvertDate($dataDoc['PlateNoDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> จนท. สนก. ผู้รับผิดชอบงาน :</div>
			<div class="label_right">
				<select class="form-control" name="ResponseEmpID" id="ResponseEmpID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlEmp = "SELECT * FROM responseemp";
						$empQuery = mysql_db_query($dbname, $sqlEmp);
						while ($objEmp =  mysql_fetch_array($empQuery)) {
					?>
						<option value="<?=$objEmp['ResponseEmpID']?>" <?php if($objEmp['ResponseEmpID'] == $dataDoc['ResponseEmpID']){ echo "selected"; } ?>><?=$objEmp['ResponseEmpName']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> หัวหน้า สนก. ผู้รับผิดชอบงาน :</div>
			<div class="label_right">
				<select class="form-control " name="ResponseHeadID" id="ResponseHeadID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlHead = "SELECT * FROM responsehead";
						$headQuery = mysql_db_query($dbname, $sqlHead);
						while ($objHead =  mysql_fetch_array($headQuery)) {
					?>
					<option value="<?=$objHead['ResponseHeadID']?>" <?php if($objHead['ResponseHeadID'] == $dataDoc['ResponseHeadID']){ echo "selected"; } ?>><?=$objHead['ResponseHeadName']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">สถานะปัจจุบัน :</div>
			<div class="label_right">
				<select class="form-control" name="StatusPresentID" id="StatusPresentID">
				<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlStatus = "SELECT * FROM statuspresent";
						$statusQuery = mysql_db_query($dbname, $sqlStatus);
						while ($objStatus =  mysql_fetch_array($statusQuery)) {
					?>
						<option value="<?=$objStatus['StatusPresentID']?>" <?php if($objStatus['StatusPresentID'] == $dataDoc['StatusPresentID']){ echo "selected"; } ?>><?=$objStatus['StatusPresentName']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="info_left" id="StatusPresentMore">
			<div class="label_left">อื่นๆ</div>
			<div class="label_right"><input type="text" name="OtherStatusPresent" id="OtherStatusPresent" class="form-control" value="<?=$dataDoc['OtherStatusPresent']?>"></div>
		</div>
		<div class="info_left" id="ProblemDetail">
			<div class="label_left">รายละเอียดงานติดปัญหา :</div>
			<div class="label_right">
				<select class="form-control" name="ProblemID" id="ProblemID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlProblem = "SELECT * FROM problem";
						$problemQuery = mysql_db_query($dbname, $sqlProblem);
						while ($objProblem =  mysql_fetch_array($problemQuery)) {
					?>
					<option value="<?=$objProblem['ProblemID']?>" <?php if($objProblem['ProblemID'] == $dataDoc['ProblemID']){ echo "selected"; } ?>><?=$objProblem['ProblemName']?></option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="info_left" id="OtherProblemMore">
			<div class="label_left">อื่นๆ</div>
			<div class="label_right"><input type="text" name="OtherProblem" id="OtherProblem" class="form-control" value="<?=$dataDoc['OtherProblem']?>"></div>
		</div>
		<div class="info_left" id="Solution">
			<div class="label_left">แนวทางการแก้ไข :</div>
			<div class="label_right">
				<select class="form-control" name="SolutionID" id="SolutionID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<?php
						$sqlSolution = "SELECT * FROM solution";
						$solutionQuery = mysql_db_query($dbname, $sqlSolution);
						while ($objSolution =  mysql_fetch_array($solutionQuery)) {
					?>
					<option value="<?=$objSolution['SolutionID']?>" <?php if($objSolution['SolutionID'] == $dataDoc['SolutionID']){ echo "selected"; } ?>><?=$objSolution['SolutionName']?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="info_left" id="OtherSolutionMore">
			<div class="label_left">อื่นๆ</div>
			<div class="label_right"><input type="text" name="OtherSolution" id="OtherSolution" class="form-control" value="<?=$dataDoc['OtherSolution']?>"></div>
		</div>
	</div>
	<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">วดป. สถานะปัจจุบัน :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="StatusPresentDate" id="StatusPresentDate" value="<?=ConvertDate($dataDoc['StatusPresentDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
	<div class="clean"></div>
</div>
</div>
<!--************************************ Sheet 2 End ****************-->

<!--*************************** Sheet 3 Start ***********************-->
<div role="tabpanel" id="pernelfee" class="tab-pane fade" aria-labelledby="pernelfee-tab">
<div class="incontent">	
	<div class="info">
		<div class="info_left">
			<div class="label_left">อัตราค่าธรรมเนียมประมาณการ (บาท) :</div>
			<div class="label_right"><input type="text" name="EstimateFee" id="EstimateFee" class="form-control form-w250" value="<?=$dataDoc['EstimateFee']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ขอเบิกค่าธรรมเนียมราชการ :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="TakeFeeDate" id="TakeFeeDate" value="<?=ConvertDate($dataDoc['TakeFeeDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">อัตราค่าธรรมเนียมจ่ายจริง (บาท) :</div>
			<div class="label_right"><input type="text" name="RevenueFee" id="RevenueFee" class="form-control form-w250" value="<?=$dataDoc['RevenueFee']?>"></div>
		</div>
		<div class="info_left clean">
			<div class="label_left">วดป. ที่ออกใบเสร็จค่าธรรมเนียมราชการ :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="OpenRecieptDate" id="OpenRecieptDate" value="<?=ConvertDate($dataDoc['OpenRecieptDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
		    <div class="label_left">เลขที่ใบเสร็จค่าธรรมเนียม :</div>
			<div class="label_right"><input type="text" name="RecieptNo" id="RecieptNo" class="form-control form-w250" value="<?=$dataDoc['RecieptNo']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. บนเล่มทะเบียนเครื่องจักร:</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="MacRegisBookDate" id="MacRegisBookDate" value="<?=ConvertDate($dataDoc['MacRegisBookDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่บนเล่มทะเบียนเครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MacRegisBookNo" id="MacRegisBookNo" class="form-control form-w250" value="<?=$dataDoc['MacRegisBookNo']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่แผ่นป้ายทะเบียนเครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MacPlateNo" id="MacPlateNo" class="form-control form-w250" value="<?=$dataDoc['MacPlateNo']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ส่งเล่มทะเบียน :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="SendRegisBookDate" id="SendRegisBookDate" value="<?=ConvertDate($dataDoc['SendRegisBookDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">วดป. ที่งานแล้วเสร็จ :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="CompleteWorkDate" id="CompleteWorkDate" value="<?=ConvertDate($dataDoc['CompleteWorkDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ยกเลิกงาน :</div>
			<div class="label_right">
				<div class="input-group date form-w250">
  					<input type="text" class="form-control" name="CancelWorkDate" id="CancelWorkDate" value="<?=ConvertDate($dataDoc['CancelWorkDate'],'d/m/Y')?>">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
	</div>
	<div class="clean"></div>
</div>
</div>
<!--*************************************Sheet 3 End ****************-->

<!--*************************************Sheet 4  ****************-->
<div role="tabpanel" id="machine" class="tab-pane fade" aria-labelledby="machine-tab">
	<div class="incontent">
		<div class="info">
			<?php include('include/editMachine.php'); ?>

		</div>
		<div class="clean"></div>
	</div>
</div>
<!--*************************************Sheet 4  End ****************-->
<input type="hidden" name="DocID" value="<?=$dataDoc['DocID']?>">
</div>
<div class="clean mt-57"></div>
<div class="content-save">
  <div class="content-body">
	<input type="button" id="SubmitFrmEditDoc" class="btn btn-success" value="บันทึก"></div>
  </div>
</form>
</div>

<script src="js/doc.js"></script>
<!--****************Script ***************************-->
<script type="text/javascript">
$(document).ready(function(){
	SetJuristicTypeID();
	SetProblemID();
	SetSolutionID();
	SetStatusPresentID();
});
$("#SubmitFrmEditDoc").on('click',function(){
		if($(".from-doc").valid()){
			$.ajax({
           type: "POST",
           url: 'include/updateDoc.php',
           data: $("#frmEditDoc").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                //window.location.href = 'index.php?page=detailDoc&id='+data.DocID;
            }else{
              AlertError();
            }
           }
         });
		}
});
</script>




