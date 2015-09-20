<div class="content-list">
  <div class="content-header">
    สมาชิกทั้งหมด
  </div>
  <div class="content-body list-minh650">
      <table id="MemberTable" class="display table-bordered">
     <thead>
        <tr>
          <th>ชื่อ - นามสกุล</th>
          <th>ประเภทผู้ใช้</th>
          <th>เบอร์โทรศัพท์</th>
          <th>อีเมล์</th>
          <th>สถานะ</th>
          <th style="border-right:none;"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
      $sqlMember = "select * from member";
      $sqlQuery = mysql_db_query($dbname, $sqlMember);
      while ($objResult =  mysql_fetch_array($sqlQuery)) {
        ?>
        <tr>
            <td><?=$objResult['MemberFirstName']?>&nbsp;<?=$objResult['MemberLastName']?></td>
            <td>
            <?php 
            if($objResult['MemberType'] == 1){
              echo "ผู้ดูแลกิจการ";
            }else if($objResult['MemberType'] == 2){
              echo "ผู้ดูแลระบบ";
            }else{
              echo "เจ้าหน้าที่ธนาคาร";
            }
            ?>
            </td>
            <td><?=$objResult['PhoneNum']?></td>
            <td><?=$objResult['Email']?></td>
            <td>
            <?php 
            if($objResult['Status'] == 1){
              echo "<span class='f-green'>เปิดใช้งาน</span>";
            }else if($objResult['Status'] == 2){
              echo "<span class='f-red'>ปิดใช้งาน</span>";
            }
            ?>
            </td>
            <td style="border-right:none;">
              <a href="?page=editMember&id=<?=$objResult['MemberID']?>">
              <img src="images/edit.png" width="24" height="24" title="แก้ไข"></a>
              <a class="cur-pointer" onClick="MemberDel(<?=$objResult['MemberID']?>)">
              <img src="images/delete.png" width="24" height="24" title="ลบ"></a>
            </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
</table>
  </div>
</div>
<script src="js/member.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#MemberTable').DataTable({
    "bSort": true,
    "autoWidth": false,
     aoColumns : [
      { "sWidth": "230px"},
      { "sWidth": "120px"},
      { "sWidth": "150px"},
      { "sWidth": "180px"},
      { "sWidth": null},
      { "sWidth": "37px"}
    ]
});
});
</script>