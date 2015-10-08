
$("#SubmitFrmNewBank").on('click',function(){
		if($("#frmNewBank").valid()){
			$.ajax({
           type: "POST",
           url: 'include/insertBank.php',
           data: $("#frmNewBank").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
              $("#myModal").modal('hide');
              $("#frmNewBank input").val("");  
                window.location.href = 'index.php?page=listBank&id='+data.BankID;
            }else{
              AlertError();
            }
           }
         });
		}
    return false;
});

$("#SubmitFrmEditBank").on('click',function(){
    if($(".from-bank").valid()){
      $.ajax({
           type: "POST",
           url: 'include/updateBank.php',
           data: $("#frmEditBank").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                $("#myModal").modal('hide');
                $("#frmEditBank input").val(""); 
                window.location.href = 'index.php?page=editMember&id='+data.MemberID;
            }else{
              AlertError();
            }
           }
         });
    }
    return false;
});

function BankDel(BankID){
  if(BankID != null && BankID != ""){
    bootbox.confirm("คุณต้องการลบข้อมูลสถาบันหรือไม่", function(result){ 
      if(result){
        $.ajax({
           type: "POST",
           url: 'include/deleteBank.php',
           data: { 
            BankID : BankID
           }, 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                window.location.href = 'index.php?page=listBank';
            }else{
              AlertError();
            }
           }
         });
      }
    })
  }
}
