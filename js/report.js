function ReportApprove(DocID){
  if(DocID != null && DocID != ""){
    bootbox.confirm("คุณต้องการอนุมัติเอกสารใช่หรือไม่", function(result){ 
      if(result){
        $.ajax({
           type: "POST",
           url: 'include/approveDoc.php',
           data: { 
            DocID : DocID
           }, 
           success: function(data)
           {
            console.log(data);
            if(data.IsResult == true){
              AlertSuccess();
              $("tr#DocID"+data.DocID).remove()
            }else{
              AlertError();
            }
           }
         });
      }
    })
  }
}