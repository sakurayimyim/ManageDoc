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
     <div class="new_button">
    <button type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">สร้างสถาบัน</button>
    </div>
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
      $sqlBank = "SELECT * FROM bank ORDER BY ModifiedDate DESC";
      $bankQuery = mysql_db_query($dbname, $sqlBank);
      while ($objR = mysql_fetch_array($bankQuery)) {
      ?>
        <tr id="<?=$objR['BankID'];?>">
          	<td align="center"><?=$num ?></td>
            <td><?=$objR['BankName']?></td>
            <td><?=$objR['CreatedDate']?></td>
            <td>5</td>
            <td style="border-right:none;">
            <a class="cur-pointer" href="#editModal<?=$objR['BankID'];?>" data-id='"<?=$objR['BankID'];?>"' data-toggle="modal">
			<img src="images/edit.png" width="24" height="24"></a>
			<a class="cur-pointer" onClick="BankDel(<?=$objR['BankID']?>)">
            <img src="images/delete.png" width="24" height="24"></a></td>

        <!-- ******************** Edit Bank **********************************************************-->
        	<input type="hidden" name="edit-Bank" value="<?=$objR['BankID'];?>"> 
			<div class="modal fade" id="editModal<?=$objR['BankID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			  	<form id="frmEditBank" class="form-bank">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">สร้างข้อมูลสถาบัน</h4>
			      </div>
			      <div class="modal-body">
			        <div id="demo1" style="height:60px; overflow:auto">
					<div class="info_left">
						<div class="label_left" style="width:120px;"><font color="red">*</font> ชื่อสถาบัน :</div>
						<div class="label_right" style="width:400px;"><input type="text" class="form-control" name="BankName" id="BankName" value="<?=$objR['BankName'];?>" ></div>
					</div>
					<div class="clean"></div>
					</div>
			      </div>
			      <div class="modal-footer">
			      	<button type="button" class="btn btn-success" id="SubmitFrmEditBank<?=$objR['BankID'];?>">บันทึก</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
			      </div>
			    </div>
			    </form>
			  </div>
			</div>
        </tr>
        <?php $num++; } ?>
    </tbody>
</table>
  </div>
</div>
<!-- ******************** New Bank **********************************************************-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  	<form id="frmNewBank" class="form-bank">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">สร้างข้อมูลสถาบัน</h4>
      </div>
      <div class="modal-body">
        <div id="demo1" style="height:60px; overflow:auto">
		<div class="info_left">
			<div class="label_left" style="width:120px;"><font color="red">*</font> ชื่อสถาบัน :</div>
			<div class="label_right" style="width:400px;"><input type="text" class="form-control" name="BankName" id="BankName" ></div>
		</div>
		<div class="clean"></div>
		</div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" id="SubmitFrmNewBank">บันทึก</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
    </form>
  </div>
</div>



<!-- ******************** Script Bank **********************************************************-->
<script type="text/javascript">
$(document).ready( function () {
    $('#TableBank').DataTable();
    $('#TableBank_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('#TableBank_filter label').css('line-height', '30px');
});
</script>
<script src="js/bank.js"></script>