
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
    เอกสารทั้งหมด
  </div>
  <div class="content-body">
      <table id="DocTable" class="display table-bordered">
     <thead>
        <tr>
          <th>#</th>
          <th>ชื่อสถานบันการเงิน/ลูกค้า</th>
          <th>ประเภทนิติกรรม</th>
          <th class="txt-center">จำนวนทั้งหมด</th>
          <th class="txt-center">จำนวนงานคงค้าง</th>
          <th class="txt-center">จำนวนงานแล้วเสร็จ</th>
          <th class="txt-center" style="border-right:none;">ปัญหา</th>
        </tr>
    </thead>
    <tbody>
    <?php
      $num=1;
      $sqlReport = "SELECT BankID,JuristicTypeID,COUNT(DocID) AS doc 
      FROM document 
      WHERE IsDelete='0' GROUP BY BankID, JuristicTypeID ORDER BY BankID ASC";
      $reportQuery = mysql_db_query($dbname, $sqlReport);
      while ($objR = mysql_fetch_array($reportQuery)) {
      ?>
        <tr>
          <td align="center"><?=$num?></td>
            <?php
              $sqlBank = "SELECT BankName
              FROM bank 
              WHERE BankID = '".$objR['BankID']."'";
              $bankQuery = mysql_db_query($dbname, $sqlBank);
              $objB = mysql_fetch_array($bankQuery) ?>
            <td><?=$objB['BankName']?></td>
            <?php
              $sqlBank = "SELECT JuristicTypeName
              FROM JuristicType 
              WHERE JuristicTypeID = '".$objR['JuristicTypeID']."'";
              $bankQuery = mysql_db_query($dbname, $sqlBank);
              $objJ = mysql_fetch_array($bankQuery) ?>
            <td title="<?=$objJ['JuristicTypeName'] ?>"><div class="justicName">
            <?php echo $objJ['JuristicTypeName'];?>
            </div></td>
            <td align="center"><?=$objR['doc']?></td>
            <?php
            $sqlNotApprove = "SELECT count(DocID) AS notapprove FROM document 
            WHERE ApproveStatus = '0' AND JuristicTypeID = '".$objR['JuristicTypeID']."' AND BankID = '".$objR['BankID']."'";
            $notApproveQuery = mysql_db_query($dbname, $sqlNotApprove);
            $objNa = mysql_fetch_array($notApproveQuery); ?>
            <td align="center"><?=$objNa['notapprove'] ?></td>
            <?php 
            $sqlApprove = "SELECT count(DocID) AS approve FROM document 
            WHERE ApproveStatus = '1' AND JuristicTypeID = '".$objR['JuristicTypeID']."'AND BankID = '".$objR['BankID']."'";
            $approveQuery = mysql_db_query($dbname, $sqlApprove);
            $objA = mysql_fetch_array($approveQuery); ?>
            <td align="center"><?=$objA['approve'] ?></td>
            <td align="center" style="border-right:none;">
            <img src="images/pb.png" width="24" height="24">
            </td>
        </tr>
        <?php $num++; } ?>
    </tbody>
</table>
  </div>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#DocTable').DataTable({
    "bSort": true,
    "autoWidth": false,
     aoColumns : [
      { "sWidth": "10px"},
      { "sWidth": "300px"},
      { "sWidth": "220px"},
      { "sWidth": null},
      { "sWidth": null},
      { "sWidth": null},
      { "sWidth": "35px"}
    ]
});  
});
</script>