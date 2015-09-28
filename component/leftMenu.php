<div class="menu-left">
  <div class="menu-profile"> 
  <div class="menu-profile-img">
    <img src="images/profile.png" width="40" height="40">
  </div>
  <div class="menu-profile-name">
  <?=$_SESSION['FullName']?>
  </div>
  <div class="menu-profile-status">
  <?php 
    if($_SESSION['MemberType'] == 1){
      echo "ผู้ดูแลระบบ";
    }else if($_SESSION['MemberType'] == 2){
      echo "ผู้ดูแลกิจการ";
    }else{
      echo "เจ้าหน้าที่ธนาคาร";
    }
    ?>
    
  </div>
  </div>
  <div class="menu-title">
    เมนูจัดการข้อมูลในระบบ
  </div>
  <?php if($_SESSION['MemberType'] == 1){ ?>
  <div class="left-menu-head pointer left-img-3 <?php if($_GET['page'] == 'reportDoc'){ echo "menu-left-reportDoc-active"; } ?>" id="ReportDoc">
    <div class="pdd-l20 m-head">
        รายงานสรุปเอกสาร
    </div>
  </div>
  <?php }?>
  <?php if($_SESSION['MemberType'] == 1 || $_SESSION['MemberType'] == 2){ ?>
  <div class="left-menu-head pointer left-img-3 <?php if($_GET['page'] == 'newDoc'){ echo "menu-left-newDoc-active"; } ?>" id="NewDoc">
    <div class="pdd-l20 m-head">
        สร้างเอกสาร
    </div>
  </div>
  <div class="left-menu-head pointer left-img-4 <?php if($_GET['page'] == 'listDoc'){ echo "menu-left-listDoc-active"; } ?>" id="ListDoc">
    <div class="pdd-l20 m-head">
        รายการเอกสารทั้งหมด
    </div>
  </div>
  <?php }?>
   <?php if($_SESSION['MemberType'] == 1){ ?>
  <div class="left-menu-head pointer left-img-1 <?php if($_GET['page'] == 'newMember'){ echo "menu-left-newMem-active"; } ?>" id="NewMember">
  <div class="menu-left-addmem"></div>
    <div class="pdd-l20 m-head">
        เพิ่มสมาชิก
    </div>
  </div>
  <div class="left-menu-head pointer left-img-2 <?php if($_GET['page'] == 'listMember'){ echo "menu-left-listMem-active"; } ?>" id="ListMember">
    <div class="pdd-l20 m-head">
        รายการสมาชิก
    </div>
  </div>
   <?php }?>
  <div class="left-menu-head pointer left-img-5 <?php if($_GET['page'] == 'manageProfile'){ echo "menu-left-manageProfile-active"; } ?>" id="ManageProfile">
    <div class="pdd-l20 m-head">
         จัดการข้อมูลส่วนตัว
    </div>
  </div>
  <div class="left-menu-head pointer left-img-6" id="Logout">
    <div class="pdd-l20 m-head">
        ออกจากระบบ
    </div>
  </div>
  </div>