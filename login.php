<?php session_start();  ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title></title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<body style="background:#1A2229;">
<div class="alert-success">
  <div class="alert-img"><img src="images/check.png" alt="checkmark"></div>
  <div class="alert-txt">Success</div>
  <div class="alert-detail"> You did not set the proper return e-mail address.</div>
</div>
<div class="alert-error">
  <div class="alert-img"><img src="images/error.png" alt="checkmark"></div>
  <div class="alert-txt">Error</div>
  <div class="alert-detail"> You did not set the proper return e-mail address.</div>
</div>
<form id="frmLogin">
    <div id="login_bg">
      <div id="login_mid">
      <form id="form1" name="form1">
      <div id="login_topic"><img src="images/logintop.png" width="350" height="50"></div>
      <div class="clean30"></div>
      <div class="login_from">
        <input type="text" class="form-control" style="height:40px" name="Username" id="Username" placeholder="Username">
      </div>
      <div class="clean20"></div>
      <div class="login_from">
        <input type="password" class="form-control" style="height:40px" name="Password" id="Password" placeholder="Password">
      </div>
      <div class="clean20"></div>
      <div style="float:left;margin-left:35px;"><a href="?page=forgetpass">ลืมรหัสผ่าน ?</a></div>
      <div style="float:right;margin-right:35px;">
      <input type="button" id="submit" class="btn_login alert" name="submit"value="เข้าสู่ระบบ"/>
      </div>
      </form>
      <div class="clean"></div>
      <div id="reserve">© By SakuraYim All Right Reserved 2015</div>
    </div>
  </div>

</form>

</body>
</html>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).keypress(function(e) {
    if(e.which == 13) {
        $("#submit").click();
    }
});
$("#submit").on('click',function(){
  if($("#frmLogin").valid()){
    $.ajax({
           type: "POST",
           url: 'include/checkLogin.php',
           data: $("#frmLogin").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
              if(data.MemberType == 1){
                window.location.href = 'index.php?page=reportDoc';
              }else if(data.MemberType == 2){
                window.location.href = 'index.php?page=listDoc';
              }else{
                window.location.href = 'index.php?page=listDoc';
              }
            }else{
              AlertError();
            }
           }
         });
  }else{
    return false;
  }
});
$("#frmLogin").validate({
      rules: {
        Username: "required",
        Password: "required"
     },
      messages: {
      Username: "กรุณากรอกข้อมูล",
      Password: "กรุณากรอกข้อมูล",
    }
});
function AlertSuccess(){
  $(".alert-success").fadeIn( "slow", function() {
    $(".alert-success").delay(2000).fadeOut(400);
  });
}
function AlertError(){
  $(".alert-error").fadeIn( "slow", function() {
    $(".alert-error").delay(2000).fadeOut(400);
  });
}
</script>
