
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
      <table id="table_id" class="display table-bordered">
     <thead>
        <tr>
          <th>#</th>
          <th>รหัสงาน</th>
          <th>เลขที่สัญญา</th>
          <th>ประเภทนิติกรรม</th>
          <th >ชื่อลูกค้าสถาบัน/ลูกค้า</th>
          <th>สถานะปัจจุบัน</th>
          <th class="txt-center">ปัญหา</th>
          <th style="border-right:none;"></th>
        </tr>
    </thead>
    <tbody>
    <?php
      $sqlDocDetail = "SELECT * FROM document";
      $docQuery = mysql_db_query($dbname, $sqlDocDetail);
      while ($objR = mysql_fetch_array($docQuery)) {
      ?>
        <tr>
          <td align="center"><?=$objR['ListNo']?></td>
            <td><?=$objR['WorkCode']?></td>
            <td><?=$objR['ContractNo']?></td>
            <td><div class="justicName">
            <?php
            $sqlJuristicType = "SELECT JuristicTypeID, JuristicTypeName FROM juristictype WHERE JuristicTypeID = '".$objR['JuristicTypeID']."'";
            $juristicTypeQuery = mysql_db_query($dbname, $sqlJuristicType);
            $objJur = mysql_fetch_array($juristicTypeQuery);
              echo $objJur['JuristicTypeName'];
            ?>
            </div></td>
            <td><div class="justicName">
            <?=$objR['CustomerName']?></div></td>
            <td><div class="justicName">
              <?php
              $sqlStatus = "SELECT StatusPresentID,StatusPresentName FROM statuspresent where StatusPresentID = '".$objR['StatusPresentID']."'";
              $statusQuery = mysql_db_query($dbname, $sqlStatus);
              $objStatus =  mysql_fetch_array($statusQuery);
              echo $objStatus['StatusPresentName'];
              ?>
            </div></td>
            <td></td>
            <td style="border-right:none;">
            <a href=""><img src="images/edit.png" width="24" height="24"></a>
            <a href=""><img src="images/delete.png" width="24" height="24"></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
  </div>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable({
    "bSort": false,
    "bAutoWidth": false,
     aoColumns : [
      { "sWidth": "45px"},
      { "sWidth": "85px"},
      { "sWidth": "145px"},
      { "sWidth": "105px"},
      { "sWidth": "105px"},
      { "sWidth": "105px"},
      { "sWidth": "72px"},
      { "sWidth": "76px"}
    ]
});
    $('#table_id_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('#table_id_filter label').css('line-height', '30px');
});
</script>