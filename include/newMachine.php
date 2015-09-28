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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<link rel="stylesheet" href="js/scrollbar/general.css" type="text/css"/>
<script src="js/scrollbar/jquery.ui.touch-punch.min"></script>
<script src="js/scrollbar/facescroll.js"></script>

<div class="content-list">
<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">	
  <div class="content-header">
    ข้อมูลรายละเอียดเครื่องจักร
    <div style="float:right;"><button type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">เพิ่ม</button></div>
  </div>
  <div class="content-body">
      <table id="TableBank" class="display table-bordered">
    	<thead>
        <tr>
          <th>#</th>
          <th>ชื่อเครื่อจักร</th>
          <th></th>
          <th>รุ่น</th>
          <th>ขนาดเครื่อง</th>
          <th>ขนาดความสามารถ</th>
          <th>ผู้ผลิต</th>
          <th>ราคา/หน่วย</th>
          <th style="border-right:none;">ไฟล์</th>
        </tr>
   	 </thead>
    <tbody>
        <tr>
          <td align="center">1</td>
            <td>เครื่อจักร์</td>
            <td>Eng Machine</td>
            <td>OK</td>
            <td>14*89</td>
            <td>TON33</td>
            <td>ประเทศไทย</td>
            <td>1,250,500.00</td>
            <td style="border-right:none;">เรียกไฟล์ Word</td>
        </tr>
    </tbody>
	</table>
  </div>
</div>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#TableBank').DataTable();
    $('#TableBank_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('#TableBank_filter label').css('line-height', '30px');
});
</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มเครื่องจักร</h4>
      </div>

	<form id="frmNewMachine" class="from-machine">  
      <div class="modal-body">
      <div id="demo1" style="height:400px; overflow:scroll">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อสถานที่ตั้งเครื่องจักร :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineLocName" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (ไทย) :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineName" ></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (อังกฤษ) :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineNameEng" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> แบบ :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineModel" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รุ่น :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineGen" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> หมายเลขเครื่อง :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineNo" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดเครื่อง :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineSize" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดความสามารถ :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineAbility" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ผู้ผลิต :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineOwner" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ราคา/หน่วย :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachinePrice" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">เอกสารแนบ :</div>
			<div class="label_right250"><input type="file" class="form-control" name="FileWord"></div>
		</div>
		<!--<div class="clean"></div>
		<div class="info_left55">
			<div class="label_left"><font color="red">*</font> ละติจูด :</div>
			<div class="label_right250"><input type="text" class="form-control" name="Latitude" disabled="true"></div>
		</div>
		<div class="info_left45">
			<div class="label_left150"><font color="red">*</font> ลองจิจูด :</div>
			<div class="label_right250"><input type="text" class="form-control" name="Longitude" disabled="true" ></div>
		</div> -->
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ไฟล์แนบแผนที่:</div>
			<div class="label_right250"><input type="file" class="form-control" name="FileMap"></div>
		</div>
		<div class="clean"></div>
      </div>
      </div>
      </from>
      <div class="modal-footer">
       <input type="button" id="SubmitFrmMachine" class="btn btn-success" value="บันทึก">
	<input type="button" id="" class="btn btn-default" value="ยกเลิก" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>

<script src="js/machine.js"></script>
<script type="text/javascript">
	jQuery(function(){ // on page DOM load
		$('#demo1').alternateScroll();
		$('#demo2').alternateScroll({ 'vertical-bar-class': 'styled-v-bar', 'hide-bars': false });	
	})
</script>



