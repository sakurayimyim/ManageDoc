<div class="content-list" style="background:none !important;">
<ul id="newDocument" class="nav nav-tabs">
    <li role="presentation" class="active">
        <a href="#pernelinf" id="pernelinf-tab" role="tab" data-toggle="tab" aria-controls="pernelinf" aria-expanded="true">
         ข้อมูลทั่วไป
        </a>
    </li>
    <li role="presentation">
        <a href="#perneldetail" id="perneldetail-tab" role="tab" data-toggle="tab" aria-controls="perneldetail">
        รายละเอียดงาน
        </a>
    </li>
    <li role="presentation">
        <a href="#pernelfee" id="pernelfee-tab" role="tab" data-toggle="tab" aria-controls="pernelfee">
        อัตราค่าธรรมเนียม
        </a>
    </li>
</ul>

<div role="tabpanel" id="pernelinf" class="tab-pane fade active in" aria-labelledby="pernelinf-tab">
<div class="incontent">	
	<div class="info">
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ลำดับ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> เลขที่ออก :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">APP :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ทรัพย์ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> สถาบัน :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="clean"></div>
		<div class="info_left">
			<div class="label_left"><font color="red">*</font> ชื่อลูกค้าสถาบัน :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ผู้ติดต่อ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เบอร์โทรศัพท์ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">แฟกซ์ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">เว็บไซต์ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อีเมล์ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ที่อยู่ลูกค้า :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จังหวัด :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">อำเภอ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ทะเบียนโรงงาน :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">ประเภทกิจการ :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">จำนวน :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
		<div class="info_left">
			<div class="label_left">รายละเอียด :</div>
			<div class="label_right"><textarea class="form-control" rows="3"></textarea></div>
		</div>
		<div class="info_left">
			<div class="label_left">เลขที่สัญญาสถานะบัน :</div>
			<div class="label_right"><input type="text" class="form-control" ></div>
		</div>
	</div>
	<div class="clean"></div>
</div>
</div>
</div>

<!--****************Script ***************************-->
<script type="text/javascript">
$('#newDocument a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
  console.log($(this))
})
</script>




