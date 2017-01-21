<SCRIPT>
  function SendAjaxVals(ParamVals, ControlToUpdate){
      $.ajax({
		type: "POST",
		url: settings.global["webRootPath"] + "ajax.php",
		data: { ParamVals: ParamVals}
		})
		.done(function( msg ) {
		  ControlToUpdate.innerHTML = msg ;
	   });
    }
</SCRIPT>