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
  .add-machine{
  	float: right;
  	clear: both;
  	margin: 20px 0px;
  }
  .upload-file{
  	width: 135px;
  }
</style>
<div class="add-machine">
	<button type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">เพิ่ม</button>
</div>
<table id="TableMachine" class="display table-bordered">
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
          <th>ไฟล์</th>
          <th style="border-right:none;"></th>
        </tr>
   	 </thead>
    <tbody>
    <?php 
    $listNO = 1;
    $sqlMachine = "SELECT * FROM machine Where DocID = '".$id."' order by MachineID ASC";
    $queryMachine = mysql_db_query($dbname, $sqlMachine);
    while ($dataMach = mysql_fetch_array($queryMachine)) {
    ?>
        <tr id="<?=$dataMach['MachineID'];?>">
          	<td><?=$listNO?></td>
            <td><?=$dataMach['MachineName']?></td>
            <td><?=$dataMach['MachineNameEng']?></td>
            <td><?=$dataMach['MachineModel']?></td>
            <td><?=$dataMach['MachineGen']?></td>
            <td><?=$dataMach['MachineSize']?></td>
            <td><?=$dataMach['MachineAbility']?></td>
            <td><?=$dataMach['MachinePrice']?></td>
            <td>เรียกไฟล์ Word</td>
            <td style="border-right:none;">
              <a class="cur-pointer" href="#editModal<?=$dataMach['MachineID']?>" data-id='"<?=$dataMach['MachineID'];?>"' data-toggle="modal">
              <img src="images/edit.png" width="24" height="24" title="แก้ไข"></a>
              <a class="cur-pointer" onClick="DelMachine(<?=$dataMach['MachineID'];?>)">
              <img src="images/delete.png" width="24" height="24" title="ลบ"></a>
            </td>
            <input type="hidden" name="edit-MachineID[]" value="<?=$dataMach['MachineID'];?>"> 
            <div class="modal fade" id="editModal<?=$dataMach['MachineID']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">เพิ่มเครื่องจักร</h4>
      			</div>
				<div id="frmNewMachine" class="from-machine">  
      			<div class="modal-body">
      			<div id="demo1" style="height:400px; overflow:auto">
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ชื่อสถานที่ตั้งเครื่องจักร :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineLocName[]" id="MachineLocName<?=$dataMach['MachineID']?>"  value="<?=$dataMach['MachineLocName']?>" ></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (ไทย) :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineName[]" id="MachineName<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineName']?>"></div>
				</div>
				<div class="clean"></div> 
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (อังกฤษ) :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineNameEng[]" id="MachineNameEng<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineNameEng']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> รุ่น :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineModel[]" id="MachineModel<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineModel']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> แบบ : </div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineGen[]" id="MachineGen<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineGen']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> หมายเลขเครื่อง :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineNo[]" id="MachineNo<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineNo']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ขนาดเครื่อง :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineSize[]" id="MachineSize<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineSize']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ขนาดความสามารถ :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineAbility[]" id="MachineAbility<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineAbility']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ผู้ผลิต :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachineBuilder[]" id="MachineBuilder<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachineOwner']?>"></div>
				</div>
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ราคา/หน่วย :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-MachinePrice[]" id="MachinePrice<?=$dataMach['MachineID']?>" value="<?=$dataMach['MachinePrice']?>"></div>
				</div>
				<div class="clean"></div>
				<!--
				<div class="info_left">
					<div class="label_left">เอกสารแนบ :</div>
					<div class="label_right250"><input type="file" class="form-control" name="FileWord" id="FileWord"></div>
				</div>
				<div class="clean"></div>
				-->
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ละติจูด :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-Latitude[]" id="Latitude<?=$dataMach['MachineID']?>" value="<?=$dataMach['Latitude']?>"></div>
				</div>
				<div class="info_left">
					<div class="label_left"><font color="red">*</font> ลองจิจูด :</div>
					<div class="label_right250"><input type="text" class="form-control" name="edit-ongitude[]" id="Longitude<?=$dataMach['MachineID']?>" value="<?=$dataMach['Longitude']?>"></div>
				</div> 
				<!--
				<div class="clean"></div>
				<div class="info_left">
					<div class="label_left">ไฟล์แนบแผนที่:</div>
					<div class="label_right250"><input type="file" class="form-control" name="FileMap[]" id="FileMap"></div>
				</div>
				-->
				<div class="clean"></div>
      		</div>
      		</div>
      		</div>
      		<div class="modal-footer">
       			<input type="button" class="btn btn-success edit-row" data-btn="<?=$dataMach['MachineID'];?>" value="บันทึก">
				<input type="button" id="" class="btn btn-default" value="ยกเลิก" data-dismiss="modal">
			      </div>
			    </div>
			  </div>
			</div>

        </tr>
        <?php $listNO++; }?>
    </tbody>
	</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มเครื่องจักร</h4>
      </div>

	<div id="frmNewMachine" class="from-machine">  
      <div class="modal-body">
      <div id="demo1" style="height:400px; overflow:auto">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อสถานที่ตั้งเครื่องจักร :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineLocName" id="MachineLocName" ></div>
		</div>
		<div class="clean"></div>
		
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (ไทย) :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineName" id="MachineName"></div>
		</div>
		<div class="clean"></div> 
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อเครื่องจักร (อังกฤษ) :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineNameEng" id="MachineNameEng"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> รุ่น :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineModel" id="MachineModel"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> แบบ :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineGen" id="MachineGen"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> หมายเลขเครื่อง :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineNo" id="MachineNo"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดเครื่อง :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineSize" id="MachineSize"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ขนาดความสามารถ :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineAbility" id="MachineAbility"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ผู้ผลิต :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachineBuilder" id="MachineBuilder"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ราคา/หน่วย :</div>
			<div class="label_right250"><input type="text" class="form-control" name="MachinePrice" id="MachinePrice"></div>
		</div>
		<div class="clean"></div>
		<!--<div class="info_left">
			<div class="label_left">เอกสารแนบ :</div>
			<div class="label_right250"><input type="file" class="form-control" name="FileWord" id="FileWord"></div>
		</div>
		<div class="clean"></div>
		-->
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ละติจูด :</div>
			<div class="label_right250"><input type="text" class="form-control" name="Latitude" id="Latitude"></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ลองจิจูด :</div>
			<div class="label_right250"><input type="text" class="form-control" name="Longitude" id="Longitude"></div>
		</div> 
		<div class="clean"></div>
		<!--
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left">ไฟล์แนบแผนที่:</div>
			<div class="label_right250"><input type="file" class="form-control" name="FileMap" id="FileMap"></div>
		</div>-->
      </div>
      </div>
      </div>
      <div class="modal-footer">
       <input type="button" id="SubmitFrmMachine" class="btn btn-success" value="บันทึก">
	<input type="button" id="" class="btn btn-default" value="ยกเลิก" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>
<div id="InputMachine" style="display:none;">

</div>
<input type="hidden" name="mDataDelID" id="mDataDelID" value="">
<script src="js/machine.js"></script>
<script type="text/javascript">
	$(".edit-row").on('click',function(){
		var rowid = $(this).data('btn');
		var MachineLocName = $("#MachineLocName"+rowid).val();
    	var MachineName = $("#MachineName"+rowid).val();
    	var MachineNameEng = $("#MachineNameEng"+rowid).val();
    	var MachineModel = $("#MachineModel"+rowid).val();
    	var MachineGen = $("#MachineGen"+rowid).val();
    	var MachineNo = $("#MachineNo"+rowid).val();
    	var MachineSize = $("#MachineSize"+rowid).val();
    	var MachineAbility = $("#MachineAbility"+rowid).val();
    	var MachineBuilder = $("#MachineBuilder"+rowid).val();
    	var MachinePrice = $("#MachinePrice"+rowid).val();
    	//var FileWord = "<input type='file' class='upload-file' name='FileWord[]'>";
    	var Latitude = $("#Latitude"+rowid).val();
    	var Longitude = $("#Longitude"+rowid).val();

    	 console.log(MachineName)
    	 console.log(MachineNameEng)
    	 console.log(MachineModel)
    	 console.log(MachineGen)
    	 console.log(MachineSize)
    	 console.log(MachineAbility)
    	 console.log(MachineBuilder)
    	 console.log(MachinePrice)

		$("#TableMachine").dataTable().fnUpdate(MachineName , $('tr#'+rowid)[0], 1 );
		$("#TableMachine").dataTable().fnUpdate(MachineNameEng , $('tr#'+rowid)[0], 2 );
		$("#TableMachine").dataTable().fnUpdate(MachineModel , $('tr#'+rowid)[0], 3 );
		$("#TableMachine").dataTable().fnUpdate(MachineSize , $('tr#'+rowid)[0], 4 );
		$("#TableMachine").dataTable().fnUpdate(MachineAbility , $('tr#'+rowid)[0], 5 );
		$("#TableMachine").dataTable().fnUpdate(MachineBuilder , $('tr#'+rowid)[0], 6 );
		$("#TableMachine").dataTable().fnUpdate(MachinePrice , $('tr#'+rowid)[0], 7 );

		$("#editModal"+rowid).modal('hide');
	})

function DelMachine(DelID){
	bootbox.confirm("คุณต้องการลบข้อมูล ?", function(result){ 
      if(result){
		$("#TableMachine tr[id="+DelID+"]").remove();
		var dataAllDel = $("#mDataDelID").val();
		if(dataAllDel == ""){
			dataAllDel = DelID;
			$("#mDataDelID").val(dataAllDel); 
		}else{
			dataAllDel += ','+DelID;
			$("#mDataDelID").val(dataAllDel); 
		}
		console.log(dataAllDel);
		}
	});
}
</script>



