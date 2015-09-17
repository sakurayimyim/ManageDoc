<style type="text/css">
  .txt-center{
    text-align: center;
  }
</style>
<div class="content-list">
  <div class="content-header">
    เอกสารทั้งหมด
  </div>
  <div class="content-body">
      <table id="table_id" class="display">
     <thead>
        <tr>
          <th width="35">ลำดับ</th>
          <th width="85">รหัสงานบริษัท</th>
          <th width="145">เลขที่สัญญาสถาบัน/ลูกค้า</th>
          <th width="40">ประเภทนิติกรรม</th>
          <th>ชื่อลูกค้าสถาบัน/ลูกค้า</th>
          <th width="45">สถานะปัจจุบัน</th>
          <th class="txt-center" width="95">รายละเอียดงานติดปัญหา</th>
          <th></th>
          <th></th>
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
            <td><?=$objR['JuristicTypeID']?></td>
            <td><?=$objR['CustomerName']?></td>
            <td><?=$objR['StatusPresentID']?></td>
            <td><?=$objR['']?></td>
            <td><a href="">Edit</a></td>
            <td><a href="">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
  </div>

</div>