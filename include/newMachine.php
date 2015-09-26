<form id="frmNewMachine" class="from-machine">  
<div class="content-list">
  <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">	
  <div class="content-header">
    ข้อมูลรายละเอียดเครื่องจักร
  </div>
  
  <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  <div class="panel-body">
  <div class="content-body">
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อสถานที่ตั้งเครื่องจักร :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineLocName" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (ไทย) :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineName" ></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (อังกฤษ) :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineNameEng" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> แบบ :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineModel" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รุ่น :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineGen" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> หมายเลขเครื่อง :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineNo" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดเครื่อง :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineSize" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดความสามารถ :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineAbility" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ผู้ผลิต :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachineOwner" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ราคา/หน่วย :</div>
			<div class="label_right"><input type="text" class="form-control" name="MachinePrice" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ไฟล์แนบรายละเอียด :</div>
			<div class="label_right"><input type="file" class="form-control" name="FileWord"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ละติจูด :</div>
			<div class="label_right"><input type="text" class="form-control" name="Latitude" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ลองจิจูด :</div>
			<div class="label_right"><input type="text" class="form-control" name="Longitude" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ไฟล์แนบแผนที่:</div>
			<div class="label_right"><input type="file" class="form-control" name="FileMap"></div>
		</div>
		
	</div>
	<div class="clean"></div>
   </div>
   </div>
   </div>
</div>
</div>
<div class="clean"></div>
<div class="content-list" style="margin-top:1px;">
  <div class="content-body" style="margin-left:16.5%;">
	<input type="button" id="SubmitFrmMachine" class="btn btn-success" value="บันทึก">
	<input type="button" id="" class="btn btn-default" value="ยกเลิก">
  </div>
  </div>
</form>
<script src="js/machine.js"></script>




