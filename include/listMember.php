<div class="content-list">
  <div class="content-header">
    สมาชิกทั้งหมด
  </div>
  <div class="content-body list-minh650">
      <table id="table_id" class="display ">
     <thead>
        <tr>
          <th width="18%">ชื่อ</th>
          <th width="18%">นามสกุล</th>
          <th width="14%">ประเภทผู้ใช้</th>
          <th width="15%">เบอร์โทรศัพท์</th>
          <th width="15%">อีเมล์</th>
          <th width="10%">สถานะ</th>
          <th></th>
          <th></th>
        </tr>
    </thead>
    <tbody>
    <?php 
      $sqlMember = "select * from member";
      $sqlQuery = mysql_db_query($dbname, $sqlMember);
      while ($objResult =  mysql_fetch_array($sqlQuery)) {
        ?>
        <tr>
            <td><?=$objResult['MemberFirstName']?></td>
            <td><?=$objResult['MemberLastName']?></td>
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
              echo "<span class='f-red'>ปิดใช้งาน/บล๊อก</span>";
            }
            ?>
            </td>
            <td><a href="?page=editMember&id=<?=$objResult['MemberID']?>">Edit</a></td>
            <td><a class="cur-pointer" onClick="MemberDel(<?=$objResult['MemberID']?>)" >Delete</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
</table>
  </div>
</div>
<script src="js/member.js"></script>