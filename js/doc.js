$('#newDocument a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$('#editDocument a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$("#JuristicTypeID").on('change',function(){
	SetJuristicTypeID();
});
$("#ProblemID").on('change',function(){
	SetProblemID();
});
$("#SolutionID").on('change',function(){
	SetSolutionID();
});
$("#StatusPresentID").on("change",function(){
	SetStatusPresentID();
})
$("#GoNewDoc").on('click',function(){
  window.location.href = 'index.php?page=newDoc';
});


function SetJuristicTypeID(){
	var JuristicTypeID = $("#JuristicTypeID").val();
	if(JuristicTypeID == 12){
		$("#JuristicTypeMore").css("display","block");
		$("#OtherJuristicType").focus();
	}else{
		$("#OtherJuristicType").val("");
		$("#JuristicTypeMore").css("display","none");
	}
}
function SetProblemID(){
	var ProblemID = $("#ProblemID").val();
	if(ProblemID == 40){
		$("#OtherProblemMore").css("display","block");
		$("#OtherProblem").focus();
	}else{
		$("#OtherProblem").val("");
		$("#OtherProblemMore").css("display","none");
	}
}
function SetSolutionID(){
	var SolutionID = $("#SolutionID").val();
	if(SolutionID == 6){
		$("#OtherSolutionMore").css("display","block");
		$("#OtherSolution").focus();
	}else{
		$("#OtherSolution").val("");
		$("#OtherSolutionMore").css("display","none");
	}
}
function SetStatusPresentID(){
	var StatusPresentID = $("#StatusPresentID").val();
	if(StatusPresentID == 19){
		$("#ProblemDetail").css("display","block");
		$("#Solution").css("display","block");
		$("#ProblemID").focus();
	}else{
		$("#ProblemDetail").css("display","none");
		$("#ProblemID").val(0)
		$("#OtherProblemMore").css("display","none");
		$("#OtherProblem").val("")
		$("#Solution").css("display","none");
		$("#SolutionID").val(0)
		$("#OtherSolutionMore").css("display","none");
		$("#OtherSolution").val("");
	}
	if(StatusPresentID == 20){
		$("#StatusPresentMore").css("display","block");
	}else{
		$("#OtherStatusPresent").val("");
		$("#StatusPresentMore").css("display","none");
	}
}
function ValidTeb2(){
	var ResponseEmpID = $("#ResponseEmpID").val();
	var ResponseHeadID = $("#ResponseHeadID").val();
	var RecieveWorkDate = $("#RecieveWorkDate").val();
	if(RecieveWorkDate == "" || ResponseEmpID == "0" || ResponseHeadID == "0"){
		$("#perneldetail-tab").click();
		bootbox.alert("กรุณากรอกข้อมูลให้ครบ", function() {});
		return false;
	}else{
		return true;
	}
}
$.validator.addMethod('selectcheck', function (value) {
	return (value != '0');
}, "กรุณาเลือกข้อมูล");
$(".from-doc").validate({
      rules: {
        ListNo: "required",
        WorkCode: "required",
        App: "required",
        JuristicTypeID: "selectcheck",
        BankID: "selectcheck",
        ContractNo: "required",
        RecieveWorkDate: "required",
        ResponseEmpID: "selectcheck",
        ResponseHeadID: "selectcheck"
     },
      messages: {
    	ListNo: "กรุณากรอกข้อมูล",
    	WorkCode: "กรุณากรอกข้อมูล",
    	App: "กรุณากรอกข้อมูล",
    	ContractNo: "กรุณากรอกข้อมูล",
    	RecieveWorkDate: "กรุณากรอกข้อมูล",
  	}
});   
function DocDel(DocID){
	if(DocID != null && DocID != ""){
    bootbox.confirm("คุณต้องการลบเอกสาร ?", function(result){ 
      if(result){
        $.ajax({
           type: "POST",
           url: 'include/deleteDoc.php',
           data: { 
            DocID : DocID
           }, 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                window.location.href = 'index.php?page=listDoc';
            }else{
              AlertError();
            }
           }
         });
      }
    })
	}
}


