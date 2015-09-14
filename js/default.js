//---Alert & Loading
function AlertSuccess(){
  $(".alert-success").fadeIn( "slow", function() {
    $(".alert-success").delay(2000).fadeOut(400);
  });
}
function AlertError(){
  $(".alert-error").fadeIn( "slow", function() {
    $(".alert-error").delay(2000).fadeOut(400);
  });
}
function Loading(IsLoad){
	if(IsLoad){

	}else{
		
	}
}
//---Date Picker
$('.input-group.date').datepicker({
	format: "dd/mm/yyyy",
	language: "th",
	autoclose: true,
	todayHighlight: true
});
//---Menu
$("#Logout").on('click',function(){
  window.location.href = 'index.php?page=logout';
});
$("#NewMember").on('click',function(){
  window.location.href = 'index.php?page=newMember';
});
$("#ListMember").on('click',function(){
  window.location.href = 'index.php?page=listMember';
});
$("#NewDoc").on('click',function(){
  window.location.href = 'index.php?page=newDoc';
});
$("#ListDoc").on('click',function(){
  window.location.href = 'index.php?page=listDoc';
});
$("#ManageProfile").on('click',function(){
  window.location.href = 'index.php?page=manageProfile';
});