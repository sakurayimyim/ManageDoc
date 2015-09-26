<?php 
  session_start(); 
  include('config/config.php');
  include('lib/lib.php');
  CheckLogin();
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <title></title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css" type="text/css"/>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery.dataTables.min.css" type="text/css"/>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootbox.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.th.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

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
        $page= 'listDoc';
        }
        switch ($page){
          case 'listDoc' : include('include/listDoc.php'); break;
          case 'newDoc' : include('include/newDoc.php'); break;
          case 'newMember' : include('include/newMember.php'); break;
          case 'editDoc' : include('include/editDoc.php'); break;
          case 'editMember' : include('include/editMember.php'); break;
          case 'deleteMember' : include('include/deleteMember.php'); break;
          case 'manageProfile' : include('include/manageProfile.php'); break;
          case 'listMember' : include('include/listMember.php'); break;
          case 'detailDoc' : include('include/detailDoc.php'); break;
          case 'listBank' : include('include/listBank.php'); break;
          case 'reportDoc' : include('include/reportDoc.php'); break;
          case 'listReportDoc' : include('include/listReportDoc.php'); break;
          case 'newMachine' : include('include/newMachine.php'); break;
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
<script src="js/default.js"></script>
