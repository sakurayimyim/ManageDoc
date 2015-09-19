
<style type="text/css">
  .txt-center{
    text-align: center;
  }
  .justicName{
    width: 160px;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    -ms-text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    
  }
</style>

<div class="content-list">
  <div class="content-header">
    ข้อมูลสถาบัน
  </div>
  <div class="content-body">
      <table id="TableBank" class="display table-bordered">
     <thead>
        <tr>
          <th>#</th>
          <th>ชื่อสถาบัน</th>
          <th>สร้างข้อมูลเมื่อ</th>
          <th>จำนวนพนักงาน</th>
          <th style="border-right:none;"></th>
        </tr>
    </thead>
    <tbody>
    <?php
      $num=1;
      $sqlBank = "SELECT * FROM bank";
      $bankQuery = mysql_db_query($dbname, $sqlBank);
      while ($objR = mysql_fetch_array($bankQuery)) {
      ?>
        <tr>
          <td align="center"><?=$num ?></td>
            <td><?=$objR['BankName']?></td>
            <td><?=$objR['CreatedDate']?></td>
            <td>5</td>
            <td style="border-right:none;">
            <a href=""><img src="images/edit.png" width="24" height="24"></a>
            <a href=""><img src="images/delete.png" width="24" height="24"></a></td>
        </tr>
        <?php $num++; } ?>
    </tbody>
</table>
  </div>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#TableBank').DataTable();
    $('#TableBank_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('#TableBank_filter label').css('line-height', '30px');
});
</script>