<div class="content-list" style="background:none !important;">
<ul id="newDocument" class="nav nav-tabs">
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
</ul>
<form id="frmNewDoc" class="from-doc">
<div class="tab-content">
<div role="tabpanel" id="pernelinf" class="tab-pane fade active in" aria-labelledby="pernelinf-tab">
<div class="incontent">	
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ลำดับที่ :</div>
			<div class="label_right"><input name="ListNo" id="ListNo" type="text" class="form-control form-w120" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รหัสงานบริษัท :</div>
			<div class="label_right"><input name="WorkCode" id="WorkCode" type="text" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> APP :</div>
			<div class="label_right"><input type="text" name="App" id="App" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ประเภทนิติกรรม :</div>
			<div class="label_right">
				<select class="form-control" name="JuristicTypeID" id="JuristicTypeID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="12">อื่นๆ(เพิ่มเติมภายหลัง)</option>
				</select>
			</div>
		</div>
		<div class="info_left" id="JuristicTypeMore">
			<div class="label_left">อื่นๆ(เพิ่มเติมภายหลัง)</div>
			<div class="label_right"><input type="text" name="OtherJuristicType" id="OtherJuristicType" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อสถาบันการเงิน / ลูกค้า :</div>
			<div class="label_right">
				<select class="form-control" name="BankID" id="BankID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="1"></option>
				</select>
			</div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> เลขที่สัญญาสถาบัน / ลูกค้า :</div>
			<div class="label_right"><input type="text" name="ContractNo" id="ContractNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อลูกค้าสถาบัน / ลูกค้า :</div>
			<div class="label_right"><input type="text" name="CustomerName" id="CustomerName" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่ทะเบียนการค้า :</div>
			<div class="label_right"><input type="text" name="BizRegisNo" id="BizRegisNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right"><input type="text" name="CustomerAddNo" id="CustomerAddNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตรอก / ซอย :</div>
			<div class="label_right"><input type="text" name="CustomerLane" id="CustomerLane" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ถนน :</div>
			<div class="label_right"><input type="text" name="CustomerStreet" id="CustomerStreet" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">คลอง / แม่น้ำ :</div>
			<div class="label_right"><input type="text" name="CustomerRiver" id="CustomerRiver" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right"><input type="text" name="CustomerMoo" id="CustomerMoo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตำบล :</div>
			<div class="label_right"><input type="text" name="CustomerSubDistrict" id="CustomerSubDistrict" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right"><input type="text" name="CustomerDistrictID" id="CustomerDistrictID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จังหวัด :</div>
			<div class="label_right"><input type="text" name="CustomerProvinceID" id="CustomerProvinceID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ติดต่อ (1) :</div>
			<div class="label_right"><input type="text" name="Contact1" id="Contact1" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right"><input type="text" name="Contact1Phone" id="Contact1Phone" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">แฟกซ์ :</div>
			<div class="label_right"><input type="text" name="Contact1Fax" id="Contact1Fax" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right"><input type="text" name="Contact1Email" id="Contact1Email" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เว็บไซต์ :</div>
			<div class="label_right"><input type="text" name="Contact1Web" id="Contact1Web" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ติดต่อ (2) :</div>
			<div class="label_right"><input type="text" name="Contact2" id="Contact2" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right"><input type="text" name="Contact2Phone" id="Contact2Phone" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">แฟกซ์ :</div>
			<div class="label_right"><input type="text" name="Contact2Fax" id="Contact2Fax" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right"><input type="text" name="Contact2Email" id="Contact2Email" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เว็บไซต์ :</div>
			<div class="label_right"><input type="text" name="Contact2Web" id="Contact2Web" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อผู้ถือกรรมสิทธิ์เครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MachineOwner" id="MachineOwner" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right"><input type="text" name="MacOwnerAddNo" id="MacOwnerAddNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตรอก / ซอย :</div>
			<div class="label_right"><input type="text" name="MacOwnerLane" id="MacOwnerLane" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ถนน :</div>
			<div class="label_right"><input type="text" name="MacOwnerStreet" id="MacOwnerStreet" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">คลอง / แม่น้ำ :</div>
			<div class="label_right"><input type="text" name="MacOwnerRiver" id="MacOwnerRiver" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right"><input type="text" name="MacOwnerMoo" id="MacOwnerMoo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตำบล :</div>
			<div class="label_right"><input type="text" name="MacOwnerSubDistrict" id="MacOwnerSubDistrict" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right"><input type="text" name="MacOwnerDistrictID" id="MacOwnerProvinceID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จังหวัด :</div>
			<div class="label_right"><input type="text" name="MacOwnerProvinceID" id="MacOwnerProvinceID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ชื่อสถานที่ตั้งกรรมสิทธิ์เครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MachineLocationName" id="MachineLocationName" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">พิกัดละติจูด :</div>
			<div class="label_right"><input type="text" name="MacLocLatitute" id="MacLocLatitute" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">พิกัดลองจิจูด :</div>
			<div class="label_right"><input type="text" name="MacLocLongitute" id="MacLocLongitute" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่ :</div>
			<div class="label_right"><input type="text" name="MacLocAddrNo" id="MacLocAddrNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตรอก / ซอย :</div>
			<div class="label_right"><input type="text" name="MacLocLane" id="MacLocLane" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ถนน :</div>
			<div class="label_right"><input type="text" name="MacLocStreet" id="MacLocStreet" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">คลอง / แม่น้ำ :</div>
			<div class="label_right"><input type="text" name="MacLocRiver" id="MacLocRiver" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">หมู่ที่ :</div>
			<div class="label_right"><input type="text" name="MacLocMoo" id="MacLocMoo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ตำบล :</div>
			<div class="label_right"><input type="text" name="MacLocSubDistrict" id="MacLocSubDistrict" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right"><input type="text" name="MacLocDistrictID" id="MacLocDistrictID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จังหวัด :</div>
			<div class="label_right"><input type="text" name="MacLocProvinceID" id="MacLocProvinceID" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ใบอนุญาตประกอบกิจการเลขที่ :</div>
			<div class="label_right"><input type="text" name="EnterpriseLicienceNo" id="EnterpriseLicienceNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ประเภทอุตสาหกรรมตาม พรบ. โรงงาน / สจก :</div>
			<div class="label_right"><input type="text" name="IndustryType" id="IndustryType" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จำนวนเครื่องจักรที่ทำนิติกรรม (เครื่อง) :</div>
			<div class="label_right"><input type="text" name="MachineAmnt" id="MachineAmnt" class="form-control form-w250" ></div>
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
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="RecieveWorkDate" id="RecieveWorkDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ครบกำหนดส่งงานสถาบัน / ลูกค้า :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="WorkDueDate" id="WorkDueDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ออกสำรวจเครื่องจักร / ทำแผนผังที่ตั้งเครื่องจักร :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="InspectDate" id="InspectDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. วิศวกรบริษัทฯ ตรวจแบบ :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="EnginInspectDate" id="EnginInspectDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ยื่นเรื่องกับ สนก. :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="OfferDate" id="OfferDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. จนท. สนก.นัดตรวจโรงงาน :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="EnterInspectDate" id="EnterInspectDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ติดแผ่นป้ายทะเบียนเครื่องจักร :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="PlateNoDate" id="PlateNoDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> จนท. สนก. ผู้รับผิดชอบงาน :</div>
			<div class="label_right">
				<select class="form-control" name="ResponseEmpID" id="ResponseEmpID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="1"></option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> หัวหน้า สนก. ผู้รับผิดชอบงาน :</div>
			<div class="label_right">
				<select class="form-control " name="ResponseHeadID" id="ResponseHeadID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="1"></option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">สถานะปัจจุบัน :</div>
			<div class="label_right">
				<select class="form-control" name="StatusPresentID" id="StatusPresentID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="19">อยู่ระหว่างประสานงาน *งานตินปัญหากับลูกค้า</option>
					<option value="20">อื่นๆ(เพิ่มเติมเองภายหลัง)</option>
				</select>
			</div>
		</div>
		<div class="info_left" id="StatusPresentMore">
			<div class="label_left">OtherStatusPresent</div>
			<div class="label_right"><input type="text" name="OtherStatusPresent" id="OtherStatusPresent" class="form-control form-w250" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">วดป. สถานะปัจจุบัน :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="StatusPresentDate" id="StatusPresentDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left" id="ProblemDetail">
			<div class="label_left">รายละเอียดงานติดปัญหา :</div>
			<div class="label_right">
				<select class="form-control" name="ProblemID" id="ProblemID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="1"></option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">OtherProblem</div>
			<div class="label_right"><input type="text" name="OtherProblem" id="OtherProblem" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">แนวทางการแก้ไข :</div>
			<div class="label_right">
				<select class="form-control" name="SolutionID" id="SolutionID">
					<option value="0">กรุณาเลือกข้อมูล</option>
					<option value="1"></option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">OtherSolution</div>
			<div class="label_right"><input type="text" name="OtherSolution" id="OtherSolution" class="form-control form-w250" ></div>
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
			<div class="label_right"><input type="text" name="EstimateFee" id="EstimateFee" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ขอเบิกค่าธรรมเนียมราชการ :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="TakeFeeDate" id="TakeFeeDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">อัตราค่าธรรมเนียมจ่ายจริง (บาท) :</div>
			<div class="label_right"><input type="text" name="RevenueFee" id="RevenueFee" class="form-control form-w250" ></div>
		</div>
		<div class="info_left clean">
			<div class="label_left">วดป. ที่ออกใบเสร็จค่าธรรมเนียมราชการ :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="OpenRecieptDate" id="OpenRecieptDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
		    <div class="label_left">เลขที่ใบเสร็จค่าธรรมเนียม :</div>
			<div class="label_right"><input type="text" name="RecieptNo" id="RecieptNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. บนเล่มทะเบียนเครื่องจักร:</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="MacRegisBookDate" id="MacRegisBookDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่บนเล่มทะเบียนเครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MacRegisBookNo" id="MacRegisBookNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่แผ่นป้ายทะเบียนเครื่องจักร :</div>
			<div class="label_right"><input type="text" name="MacPlateNo" id="MacPlateNo" class="form-control form-w250" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ส่งเล่มทะเบียน :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="SendRegisBookDate" id="SendRegisBookDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">วดป. ที่งานแล้วเสร็จ :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="CompleteWorkDate" id="CompleteWorkDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">วดป. ที่ยกเลิกงาน :</div>
			<div class="label_right">
				<div class="input-group date">
  					<input type="text" class="form-control form-w250" name="CancelWorkDate" id="CancelWorkDate">
  					<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
				</div>
			</div>
		</div>
	</div>
	<div class="clean"></div>
</div>
</div>
<!--*************************************Sheet 3 End ****************-->

</div>
<div class="clean mt-57"></div>
<div class="content-list">
  <div class="content-body">
	<input type="button" id="SubmitFrmNewDoc" class="btn btn-success" value="บันทึก"></div>
  </div>
</form>
</div>

<script src="js/doc.js"></script>
<!--****************Script ***************************-->
<script type="text/javascript">
$('#newDocument a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$("#SubmitFrmNewDoc").on('click',function(){
		//if($("#frmNewMember").valid()){
			$.ajax({
           type: "POST",
           url: 'include/insertDoc.php',
           data: $("#frmNewDoc").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                //window.location.href = 'index.php?page=listMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
		//}
});
</script>




