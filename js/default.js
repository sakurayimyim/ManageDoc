$(document).ready( function () {

//--- Modify Table
$('.dataTables_filter input').addClass('form-control search-input wflr'); // <-- add this line
    $('.dataTables_filter label').css('line-height', '30px');
    $('.dataTables_length label').css('width','250px');
    $('.dataTables_length label select').addClass('form-control');
    $('.dataTables_length label select').css('display', 'inline-block');
    $('.dataTables_length label select').css('width', '75px');
    $('.paginate_button').css('background','#ffffff');
    $('.paginate_button').css('border-radius','3px');
});

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
$("#ReportDoc").on('click',function(){
  window.location.href = 'index.php?page=reportDoc';
});
$("#GoNewMember").on('click',function(){
  window.location.href = 'index.php?page=newMember';
});
/*
function IsMyData(id){
        $.ajax({
           type: "POST",
           url: 'include/insertDoc.php',
           data: $("#frmNewDoc").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                window.location.href = 'index.php?page=detailDoc&id='+data.DocID;
            }else{
              AlertError();
            }
           }
        });
}
*/

