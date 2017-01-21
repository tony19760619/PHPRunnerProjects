<SCRIPT>
  function SendAjaxVals(ParamVals, ControlToUpdate){
      $.ajax({
		type: "POST",
		url: settings.global["webRootPath"] + "include/ajax_results.php",
		data: { ParamVals: ParamVals}
		})
		.done(function( msg ) {
		  ControlToUpdate.innerHTML = msg ;
	   });
    }
</SCRIPT>