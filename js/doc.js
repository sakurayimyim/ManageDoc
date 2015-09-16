$("#JuristicTypeID").on('change',function(){
	var JuristicTypeID = $("#JuristicTypeID").val();
	if(JuristicTypeID == 12){
		$("#JuristicTypeMore").css("display","block");
	}else{
		$("#JuristicTypeMore").val("");
		$("#JuristicTypeMore").css("display","none");
	}
});
$("#StatusPresentID").on("change",function(){
	var StatusPresentID = $("#StatusPresentID").val();
	if(StatusPresentID == 19){
		$("#ProblemDetail").css("display","block");
	}else{
		$("#ProblemDetail").css("display","none");
		$("#ProblemDetail").val(0)
	}

	if(StatusPresentID == 20){
		$("#StatusPresentMore").css("display","block");
	}else{
		$("#StatusPresentMore").val("");
		$("#StatusPresentMore").css("display","none");
	}
	
})
