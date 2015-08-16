<?php
	$id = $_GET['id'];
	echo $sqlMember = "select * from member where MemberID = $id";
	$sqlQuery = mysql_db_query($dbname, $sqlMember);
	$objResult = mysql_fetch_array($sqlQuery);
?>
<form id="frmEditMember">
<div class="content-list">
  <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">	
  <div class="content-header">
    ข้อมูลส่วนตัวของสมาชิก
  <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
  <div style="float:right;line-height:16px; margin-right:5px;">
  	<img src="images/minus-alt.png" title="ปิดแท็บ">
  </div>
  </a>
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
			<div class="label_right"><input type="password" class="form-control" name="Password" id="Password" value="<?=$objResult['Password']?>" ></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ยืนยันรหัสผ่าน :</div>
			<div class="label_right"><input type="password" class="form-control" name="CfmPassword" value="<?=$objResult['Password']?>" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left ">รหัสสมาชิก :</div>
			<div class="label_right "><input type="text" class="form-control" name="MemberNo" value="<?=$objResult['MemberNo']?>" ></div>
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
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ประเภทผู้ใช้ :</div>
			<div class="label_right">
				<select class="form-control form-w220" name="MemberType">
					<option value="1" <?php if($objResult['MemberLastName'] == 1){ ?> selected="selected"<? } ?>>ผู้ดูแลกิจการ</option>
					<option value="2" <?php if($objResult['MemberLastName'] == 2){ ?> selected="selected"<? } ?>>ผู้ดูแลระบบ</option>
					<option value="3" <?php if($objResult['MemberLastName'] == 3){ ?> selected="selected"<? } ?>>เจ้าหน้าที่ธนาคาร</option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> สถาบัน :</div>
			<div class="label_right">
			<select class="form-control form-w220" name="Institute">
					<option value="0" <?php if($objResult['InstituteID'] == 0){ ?> selected="selected"<? } ?>>เลือกสถาบัน</option>
					<option value="1" <?php if($objResult['InstituteID'] == 1){ ?> selected="selected"<? } ?>>UOB</option>
				</select>
			</div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> สถานะ :</div>
			<div class="label_right">
				<select class="form-control form-w220" name="MemberStatus">
					<option value="1" <?php if($objResult['Status'] == 1){ ?> selected="selected"<? } ?>>เปิดใช้งาน</option>
					<option value="2" <?php if($objResult['Status'] == 2){ ?> selected="selected"<? } ?>>ปิดใช้งาน/บล๊อก</option>
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
		<div class="info_left">
			<div class="label_left">แฟกซ์ :</div>
			<div class="label_right"><input type="text" class="form-control" name="Fax" value="<?=$objResult['Fax']?>"></div>
		</div>
		<div class="info_left">
			<div class="label_left">Line ID :</div>
			<div class="label_right"><input type="text" class="form-control" name="LineID" value="<?=$objResult['LineID']?>"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ที่อยู่ :</div>
			<div class="label_right">
			<textarea class="form-control" rows="4" name="Address"><?=$objResult['Address']?></textarea>
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
<div class="clean mt-57"></div>
<div class="content-list">
  <div class="content-body">
	<input type="button" id="SubmitFrmEditMember" class="btn btn-success" value="บันทึก"></div>
  </div>
</form>
<script type="text/javascript">
	$.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "กรุณาเลือกข้อมูล");
	$("#frmEditMember").validate({
	    rules : {
	    		Username : {
	    			required : true,
	    			minlength : 4,
	    			maxlength : 20
	    		},
                Password : {
                	required : true,
                    minlength : 6,
                    maxlength : 20
                },
                CfmPassword : {
                    equalTo : "#Password"
                },
                FirstName : {
                	minlength : 2,
                	maxlength : 255
                },
                MemberType : {
                	selectcheck: true
                },
                MemberType : {
                	selectcheck: true
                },
                Institute : {
                	selectcheck: true
                }
            },
	    messages: {
	        Username: {
	            required : "กรุณากรอกข้อมูล",
	            maxlength : "กรุณากรอกชื่อผู้ใช้ 4 ถึง 20 ตัวอักษร",
	            minlength : "กรุณากรอกชื่อผู้ใช้ 4 ถึง 20 ตัวอักษร"
	        }, 
	        Password: {
	        	 required : "กรุณากรอกข้อมูล",
	        	 minlength : "กรุณากรอกหัสผ่าน 6 ถึง 20 ตัวอักษร",
	        	 maxlength : "กรุณากรอกชื่อผู้ใช้ 6 ถึง 20 ตัวอักษร",
	        },
	        CfmPassword: {
	        	equalTo : "กรุณากรอกรหัสผ่านให้ตรงกัน",
	        }     
	    },
	    });    
	$("#SubmitFrmEditMember").on('click',function(){
		if($("#frmEditMember").valid()){
			$.ajax({
           type: "POST",
           url: 'include/insertMember.php',
           data: $("#frmNewMember").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                window.location.href = 'index.php?page=listMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
		}
    
    return false;
});
</script>



