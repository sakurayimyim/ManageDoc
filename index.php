<?php 
  session_start(); 
  include('config/config.php');
  if($_SESSION['MemberID'] == ""){
    echo "<script>window.location = '/ManageDoc/login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title></title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery.dataTables.min.css" type="text/css"/>

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
<div id="content">
  <?php include("component/header.php"); ?>
   <!-- Left Menu -->
   <?php include("component/leftMenu.php"); ?>
  <!-- List Data-->
  <?
  if ($_GET['page']!=''){ 
        $page= $_GET['page']; 
      }else{
        $page= 'home';
        }
        switch ($page){
          case 'home' : include('include/listDoc.php'); break;
          case 'newDoc' : include('include/newDoc.php'); break;
          case 'logout' : logout(); break;
          }
     ?>  
</div>
</body>
</html>
<?php
  function logout(){
  session_destroy();
  echo "<meta http-equiv='refresh' content='2; url=/ManageDoc/login.php'>";
  /*
  global $dbname;
  $sqllog="select * from log where sessID = '".$_SESSION['sessID']."'";
    $result=mysql_db_query($dbname,$sqllog); 
    while ($objResult=mysql_fetch_array($result)) {
        $logID = $objResult['logID']; 
$insertLog = mysql_db_query($dbname,"UPDATE log SET logountdate = NOW() where logID = '$logID'");
      if($insertLog){ 
  session_destroy();
echo "<meta http-equiv='refresh' content='1; url=?bpage=homepage'>";
      }else{
        echo "เกิดข้อผิดพลาด";
      }

}*/
}
?>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
    $('#table_id_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('#table_id_filter label').css('line-height', '30px');
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
$("#Logout").on('click',function(){
  window.location.href = 'index.php?page=logout';
})
</script>
 