
$.validator.addMethod('selectcheck', function (value) {
    return (value != '0');
}, "กรุณาเลือกข้อมูล");
$(".from-member").validate({
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
$("#MemberType").on('change',function(){
	var MemberType = $("#MemberType").val();
	if(MemberType == 3){
		$("#Institute").prop('disabled',false);
	}else{
		$("#Institute").prop('disabled',true);
	}
});
$("#SubmitFrmNewMember").on('click',function(){
		if($("#frmNewMember").valid()){
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
$("#SubmitFrmEditMember").on('click',function(){
		if($(".from-member").valid()){
			$.ajax({
           type: "POST",
           url: 'include/updateMember.php',
           data: $("#frmEditMember").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                //window.location.href = 'index.php?page=editMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
		}
    return false;
});
$("#SubmitFrmEditProfile").on('click',function(){
    if($(".from-member").valid()){
      $.ajax({
           type: "POST",
           url: 'include/updateProfile.php',
           data: $("#frmEditProfile").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                //window.location.href = 'index.php?page=editMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
    }
    return false;
});
function MemberDel(MemberID){
	if(MemberID != null && MemberID != ""){
    bootbox.confirm("คุณต้องการลบสมาชิก ?", function(result){ 
      if(result){
        $.ajax({
           type: "POST",
           url: 'include/deleteMember.php',
           data: { 
            MemberID : MemberID
           }, 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                //window.location.href = 'index.php?page=editMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
      }
    })
	}
}