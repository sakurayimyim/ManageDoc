$("#SubmitFrmMachine").on('click',function(){
		if($("#frmNewMachine").valid()){
			$.ajax({
           type: "POST",
           url: 'include/insertMachine.php',
           data: $("#frmNewMachine").serialize(), 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
                window.location.href = 'index.php?page=newMachine';
            }else{
              AlertError();
            }
           }
         });
		}
    return false;
});
