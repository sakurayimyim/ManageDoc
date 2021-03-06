<?php
$bankID = $_GET['bankID'];
$juristicTypeID = $_GET['juristicTypeID'];
$pageID = $_GET['pageID'];
?>
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
          <th>รหัสงาน</th>
          <th>เลขที่สัญญา</th>
          <th>ประเภทนิติกรรม</th>
          <th >ชื่อลูกค้าสถาบัน/ลูกค้า</th>
          <th>สถานะปัจจุบัน</th>
          <th class="txt-center">ปัญหา</th>
          <th class="txt-center" style="border-right:none;">อนุมัติ</th>
        </tr>
    </thead>
    <tbody>
    <?php
      if($pageID==1){
        $sqlDocDetail = "SELECT * FROM document WHERE IsDelete='0' AND BankID='$bankID' AND JuristicTypeID='$juristicTypeID' ORDER BY ApproveStatus ASC";
      }else if ($pageID==2) {
        $sqlDocDetail = "SELECT * FROM document WHERE IsDelete='0' AND BankID='$bankID' AND JuristicTypeID='$juristicTypeID' AND ApproveStatus='0'";
      }else if ($pageID==3) {
        $sqlDocDetail = "SELECT * FROM document WHERE IsDelete='0' AND BankID='$bankID' AND JuristicTypeID='$juristicTypeID' AND ApproveStatus='1'";
      }else if ($pageID==4) {
        $sqlDocDetail = "SELECT * FROM document WHERE IsDelete='0' AND BankID='$bankID' AND JuristicTypeID='$juristicTypeID' AND StatusPresentID='19' ORDER BY ApproveStatus ASC";
      }
      $docQuery = mysql_db_query($dbname, $sqlDocDetail);
      while ($objR = mysql_fetch_array($docQuery)) {
      ?>
        <tr id="DocID<?=$objR['DocID']?>">
          <td align="center"><?=$objR['ListNo']?></td>
            <td><a href="?page=detailDoc&id=<?=$objR['DocID']?>"> <?=$objR['WorkCode']?></a></td>
            <td><?=$objR['ContractNo']?></td>
            <?php
            $sqlJuristicType = "SELECT JuristicTypeID, JuristicTypeName FROM juristictype WHERE JuristicTypeID = '".$objR['JuristicTypeID']."'";
            $juristicTypeQuery = mysql_db_query($dbname, $sqlJuristicType);
            $objJur = mysql_fetch_array($juristicTypeQuery); ?>
            <td title="<?=$objJur['JuristicTypeName'] ?>"><div class="justicName">
            <?php echo $objJur['JuristicTypeName'];?>
            </div></td>
            <td title="<?=$objR['CustomerName']?>"><div class="justicName">
            <?=$objR['CustomerName']?></div></td>
            <?php
              $sqlStatus = "SELECT StatusPresentID,StatusPresentName FROM statuspresent where StatusPresentID = '".$objR['StatusPresentID']."'";
              $statusQuery = mysql_db_query($dbname, $sqlStatus);
              $objStatus =  mysql_fetch_array($statusQuery); ?>
            <td title="<?=$objStatus['StatusPresentName']?>"><div class="justicName">
             <?php echo $objStatus['StatusPresentName'];?>
            </div></td>

            <?php
              $sqlPb = "SELECT  ProblemID,ProblemName FROM problem where ProblemID = '".$objR['ProblemID']."'";
              $pbQuery = mysql_db_query($dbname, $sqlPb);
              $objPb =  mysql_fetch_array($pbQuery); ?>
            <td align="center"><?php if($objR['StatusPresentID']==19){ ?>
              <img src="images/pb.png" width="24" height="24" title="<?=$objPb['ProblemName']?>">
              <?php } ?></td>
            <td align="center" style="border-right:none;">
            <?php if($objR['ApproveStatus']==0){ ?>
            <a class="cur-pointer" onClick="ReportApprove(<?=$objR['DocID']?>)"><img src="images/approvegr.png" width="24" height="24" title="อนุมัติ"></a></td>
            <?php }else{ ?>
                        <a><img src="images/approveg.png" width="24" height="24" title="อนุมัติแล้ว"></a></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </tbody>
</table>
  </div>
</div>
<script src="js/report.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#DocTable').DataTable({
    "bSort": true,
    "autoWidth": false,
     aoColumns : [
      { "sWidth": "10px"},
      { "sWidth": "45px"},
      { "sWidth": "115px"},
      { "sWidth": null},
      { "sWidth": null},
      { "sWidth": null},
      { "sWidth": "35px"},
      { "sWidth": "35px"}
    ]
});  
});
</script>