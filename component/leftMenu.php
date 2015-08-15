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
      echo "เจ้าของ";
    }else{
      echo "ธนาคาร";
    }
    ?>
    
  </div>
  </div>
  <div class="menu-title">
    เมนูจัดการข้อมูลในระบบ
  </div>
  <div class="left-menu-head pointer">
    <div class="pdd-l20 m-head">
        เพิ่มสมาชิก
    </div>
  </div>
  <div class="left-menu-head pointer">
    <div class="pdd-l20 m-head">
        รายการสมาชิก
    </div>
  </div>
   <div class="left-menu-head pointer">
    <div class="pdd-l20 m-head">
        สร้างเอกสาร
    </div>
  </div>
  <div class="left-menu-head pointer">
    <div class="pdd-l20 m-head">
        รายการเอกสารทั้งหมด
    </div>
  </div>
  <div class="left-menu-head pointer">
    <div class="pdd-l20 m-head">
         จัดการข้อมูลส่วนตัว
    </div>
  </div>
  <div class="left-menu-head pointer" id="Logout">
    <div class="pdd-l20 m-head">
        ออกจากระบบ
    </div>
  </div>
  </div>