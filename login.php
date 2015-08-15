<?php session_start();  ?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title></title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<body>
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
   <div id="content" style="background-color:#F2F2F2;">
    <div id="login_bg">
      <div id="login_mid">
        <form id="form1" name="form1">
      <div id="login_topic">
        <img src="images/logoIEC.png" width="147" height="135">
      </div>
      <div class="clean30"></div>
      <div class="login_from">
        <input type="text" class="form-control" style="height:40px" name="Username" id="Username" placeholder="Username">
      </div>
      <div class="clean"></div>
      <div class="login_from">
        <input type="password" class="form-control" style="height:40px" name="Password" id="Password" placeholder="Password">
      </div>
      <div class="clean"></div>
      <div class="login_from">
      <input type="button" id="submit" class="btn_login alert" name="submit"value="เข้าสู่ระบบ"/>
      </div>

      <div class="login_form" style="float:left;"><a href="?page=forgetpass">ลืมรหัสผ่าน ?</a></div>
      <div class="login_form" style="float:right;"><a href="../index.php">กลับสู่หน้าหลัก</a></div>
      </form>
    </div>
  </div>
</div>
</form>
<div class="footer">
<div class="footer-coppy">
  Copyright © 2015 standardtour.com. All Rights Reserved. | Develop by ...
</div>
</div>
</body>
</html>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$("#submit").on('click',function(){
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
                window.location.href = 'index.php?page=home';
              }
            }else{
              AlertError();
            }
           }
         });
    return false;
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
