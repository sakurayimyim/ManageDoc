$("#JuristicTypeID").on('change',function(){
	var JuristicTypeID = $("#JuristicTypeID").val();
	if(JuristicTypeID == 12){
		$("#JuristicTypeMore").css("display","block");
		$("#OtherJuristicType").focus();
	}else{
		$("#OtherJuristicType").val("");
		$("#JuristicTypeMore").css("display","none");
	}
});
$("#ProblemID").on('change',function(){
	var ProblemID = $("#ProblemID").val();
	if(ProblemID == 40){
		$("#OtherProblemMore").css("display","block");
		$("#OtherProblem").focus();
	}else{
		$("#OtherProblem").val("");
		$("#OtherProblemMore").css("display","none");
	}
});
$("#SolutionID").on('change',function(){
	var SolutionID = $("#SolutionID").val();
	if(SolutionID == 6){
		$("#OtherSolutionMore").css("display","block");
		$("#OtherSolution").focus();
	}else{
		$("#OtherSolution").val("");
		$("#OtherSolutionMore").css("display","none");
	}
});



$("#StatusPresentID").on("change",function(){
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
	
})

