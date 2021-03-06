$(document).ready( function () {
      $('#TableMachine').DataTable();
      $('#TableMachine_filter input').addClass('form-control search-input wflr'); // <-- add this line
      $('#TableMachine_filter label').css('line-height', '30px');
  });
$("#SubmitFrmMachine").on('click',function(){
    var NumID = $('#TableMachine tr').length - 1;
    var MachineLocName = $("#MachineLocName").val();
    var MachineName = $("#MachineName").val();
    var MachineNameEng = $("#MachineNameEng").val();
    var MachineModel = $("#MachineModel").val();
    var MachineGen = $("#MachineGen").val();
    var MachineNo = $("#MachineNo").val();
    var MachineSize = $("#MachineSize").val();
    var MachineAbility = $("#MachineAbility").val();
    var MachineBuilder = $("#MachineBuilder").val();
    var MachinePrice = $("#MachinePrice").val();
    var FileWord = "<input type='file' class='upload-file' name='FileWord[]'>";
    var Latitude = $("#Latitude").val();
    var Longitude = $("#Longitude").val();

    var table = $('#TableMachine').DataTable();
    table.row.add([NumID,MachineName,MachineNameEng,MachineModel,MachineSize,MachineAbility,MachineBuilder,MachinePrice,FileWord]).draw();
    
    var strMachine = "<input type='hidden' name='MachineLocName[]' value='"+MachineLocName+"'>";
      strMachine += "<input type='hidden' name='MachineName[]' value='"+MachineName+"'>";
      strMachine += "<input type='hidden' name='MachineNameEng[]' value='"+MachineNameEng+"'>";
      strMachine += "<input type='hidden' name='MachineModel[]' value='"+MachineModel+"'>";
      strMachine += "<input type='hidden' name='MachineGen[]' value='"+MachineGen+"'>";
      strMachine += "<input type='hidden' name='MachineNo[]' value='"+MachineNo+"'>";
      strMachine += "<input type='hidden' name='MachineSize[]' value='"+MachineSize+"'>";
      strMachine += "<input type='hidden' name='MachineAbility[]' value='"+MachineAbility+"'>";
      strMachine += "<input type='hidden' name='MachineBuilder[]' value='"+MachineBuilder+"'>";
      strMachine += "<input type='hidden' name='MachinePrice[]' value='"+MachinePrice+"'>";
      strMachine += "<input type='hidden' name='MacLocLatitute[]' value='"+Latitude+"'>";
      strMachine += "<input type='hidden' name='MacLocLongitute[]' value='"+Longitude+"'>";

    $("#InputMachine").append(strMachine);

    $("#myModal").modal('hide');
    $("#frmNewMachine input").val("");   
  })
