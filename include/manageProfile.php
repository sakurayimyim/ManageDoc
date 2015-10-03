<?php
	$id = $_SESSION['MemberID'];
	$sqlMember = "select * from member where MemberID = $id";
	$sqlQuery = mysql_db_query($dbname, $sqlMember);
	$objResult = mysql_fetch_array($sqlQuery);
?>
<form id="frmEditProfile" class="from-member">
<input type="hidden" name="MemberID" value="<?=$objResult['MemberID']?>">
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
			<div class="label_right"><input type="text" class="form-control" name="Username" value="<?=$objResult['Username']?>" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รหัสผ่าน :</div>
			<div class="label_right"><input type="password" class="form-control" name="Password" id="Password" value="<? echo base64_decode($objResult['Password']) ?>" ></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ยืนยันรหัสผ่าน :</div>
			<div class="label_right"><input type="password" class="form-control" name="CfmPassword" id="CfmPassword" value="<? echo base64_decode($objResult['Password']) ?>" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อ :</div>
			<div class="label_right"><input type="text" class="form-control" name="FirstName" value="<?=$objResult['MemberFirstName']?>" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"> นามสกุล :</div>
			<div class="label_right"><input type="text" class="form-control" name="LastName" value="<?=$objResult['MemberLastName']?>" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">รูปภาพ :</div>
			<div class="label_right"><input type="file" class="form-control" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="PhoneNum"  value="<?=$objResult['PhoneNum']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">เบอร์มือถือ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Mobile" value="<?=$objResult['Mobile']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Email" value="<?=$objResult['Email']?>"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ที่อยู่ :</div>
			<div class="label_right">
			<textarea class="form-control" rows="4" name="Address"><?=$objResult['Address']?></textarea>
			</div>
		</div>
	</div>
	<div class="clean"></div>
   </div>
   </div>
   </div>
</div>
</div>
<div class="clean mt-57"></div>
<div class="content-list">
  <div class="content-body">
	<input type="button" id="SubmitFrmEditProfile" class="btn btn-success" value="บันทึก"></div>
  </div>
</form>
<script src="js/member.js"></script>
<script type="text/javascript">
$( document ).ready(function(){
	var Institute = '<?=$objResult['InstituteID']?>';
	if(Institute != 0 && Institute != ""){
		$("#Institute").prop('disabled',false);
	}
	$("#Password").focus(function(){
		$("#Password").attr("type","text")
	})
	$("#Password").blur(function(){
		$("#Password").attr("type","password")
	});
	$("#CfmPassword").focus(function(){
		$("#CfmPassword").attr("type","text")
	})
	$("#CfmPassword").blur(function(){
		$("#CfmPassword").attr("type","password")
	});
})
</script>



