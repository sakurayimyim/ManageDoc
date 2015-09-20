<form id="frmNewMember" class="from-member">  
<div class="content-list">
  <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">	
  <div class="content-header">
    ข้อมูลส่วนตัวของสมาชิก
  </div>
  
  <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  <div class="panel-body">
  <div class="content-body">
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเข้าใช้งาน :</div>
			<div class="label_right"><input type="text" class="form-control" name="Username" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รหัสผ่าน :</div>
			<div class="label_right"><input type="password" class="form-control" name="Password" id="Password" ></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ยืนยันรหัสผ่าน :</div>
			<div class="label_right"><input type="password" class="form-control" name="CfmPassword" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left ">รหัสสมาชิก :</div>
			<div class="label_right "><input type="text" class="form-control" name="MemberNo" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อ :</div>
			<div class="label_right"><input type="text" class="form-control" name="FirstName" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"> นามสกุล :</div>
			<div class="label_right"><input type="text" class="form-control" name="LastName" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ประเภทผู้ใช้ :</div>
			<div class="label_right">
				<select class="form-control form-w220" name="MemberType" id="MemberType">
					<option value="1">ผู้ดูแลกิจการ</option>
					<option value="2" selected="selected">ผู้ดูแลระบบ</option>
					<option value="3">เจ้าหน้าที่ธนาคาร</option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red"></font> สถาบัน :</div>
			<div class="label_right">
			<select class="form-control form-w220" name="Institute" id="Institute" disabled>
					<option value="0">เลือกสถาบัน</option>
					<option value="1">UOB</option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> สถานะ :</div>
			<div class="label_right">
				<select class="form-control form-w220" name="MemberStatus">
					<option value="1">เปิดใช้งาน</option>
					<option value="2">ปิดใช้งาน</option>
				</select>
			</div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">รูปภาพ :</div>
			<div class="label_right"><input type="file" class="form-control" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="PhoneNum" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เบอร์มือถือ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Mobile" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Email" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">แฟกซ์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Fax" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">Line ID :</div>
			<div class="label_right"><input type="text" class="form-control" name="LineID" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ที่อยู่ :</div>
			<div class="label_right">
			<textarea class="form-control" rows="4" name="Address"></textarea>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">จังหวัด :</div>
			<div class="label_right">
			<select class="form-control form-w220" name="Province">
					<option value="1">เลือกจังหวัด</option>
			</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right">
			<select class="form-control form-w220" name="Aumpur">
					<option value="1">เลือกอำเภอ</option>
			</select>
			</div>
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
	<input type="button" id="SubmitFrmNewMember" class="btn btn-success" value="บันทึก">
	<input type="button" id="" class="btn btn-default" value="ยกเลิก">
  </div>
  </div>
</form>
<script src="js/member.js"></script>




