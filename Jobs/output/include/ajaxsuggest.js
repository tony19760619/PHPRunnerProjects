/*
+-------------------------------------------------------------------------------+
| Copyright (c) 2006-2007 Andrew G. Samoilov, Universal Data Solutions inc.	|
| All rights reserved.                                                  	|
|                                                                       	|
| Redistribution and use in source and binary forms, with or without    	|
| modification, are permitted provided that the following conditions    	|
| are met:                                                              	|
|                                                                       	|
| o Redistributions of source code must retain the above copyright      	|
|   notice, this list of conditions and the following disclaimer.       	|
| o Redistributions in binary form must reproduce the above copyright   	|
|   notice, this list of conditions and the following disclaimer in the 	|
|   documentation and/or other materials provided with the distribution.	|
|                                                                       	|
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   	|
| "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     	|
| LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR 	|
| A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  	|
| OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, 	|
| SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      	|
| LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, 	|
| DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY 	|
| THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   	|
| (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE 	|
| OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  	|
+-------------------------------------------------------------------------------+
*/

var cur = -1,
	suggestValues = [];

setTimeout( function() {
	$("body, a").on("click", DestroySuggestDiv);
	$("body").on("click", "input", DestroySuggestDiv);
}, 2000);

/**
 * Hide search suggests container
 */
function DestroySuggestDiv() {
	cur = -1;
	$("#search_suggest").html("").css("visibility", "hidden");
	$("#search_suggest_iframe").remove();
}

/**
 * Set position for the search suggest
 * @param {DOM element} obj
 * @param {mixed} lyr
 */
function setLyr( obj, lyr ) {
	var objPos = $(obj).offset();
	
	if (lyr == 'search_suggest') {
		objPos.top += $(obj).outerHeight();
		lyr = $("#" + lyr);
	}	
	lyr.css({
		top: objPos.top + "px",
		left: objPos.left + ( Runner.isDirRTL() ? $(obj).outerWidth() - lyr.outerWidth() : 0 ) + "px" 
	});
}	

function moveUp( oElement, searchType ) {
	var $suggests = $("#search_suggest").children();
	
	if ( !$suggests.length || cur < -1) {
		return;
	}
	
	cur--;
	if ( cur == -2) {
		cur = $suggests.length - 1; 
		oElement.focus(); 
	}
	$suggests.each( function( i, suggest ) {
		suggest.className = i == cur ? "suggest_link_over" : "suggest_link";
		if ( i == cur ) {
			oElement.value = suggestValues[ cur ];
		}
	});
}
		
function moveDown( oElement, searchType ) {
	var $suggests = $("#search_suggest").children();
	
	if ( !$suggests.length || cur >= $suggests.length ) {
		return;
	}
	
	cur++;
	$suggests.each( function( i, suggest ) {
		suggest.className = i == cur ? "suggest_link_over" : "suggest_link";
		if ( i == cur ) {
			oElement.value = suggestValues[ cur ];
		}
	});

	if ( cur == $suggests.length ) {
		cur = -1; 
		oElement.focus(); 
	}
}

function suggestOver(div_value){
	$("div.suggest_link_over").each(function(){
		this.className = 'suggest_link';
	}) ;
	div_value.className = 'suggest_link_over';
	cur = div_value.id.substring(10);
}

function suggestOut(div_value){
	div_value.className = 'suggest_link';
}

function searchSuggest( oEvent, oElement, searchType, SUGGEST_TABLE, id ) {
	id = id === undefined ? 1 : id;
	oEvent = window.event || oEvent;
    cur = -1;
	
	var iKeyCode = oEvent.keyCode, 
		fieldForSearch,
		sType = "";
		
	switch( searchType ) {
		case "ordinary":
			fieldForSearch = $("select#ctlSearchField");
		    if (!fieldForSearch.length) {
		    	fieldForSearch = $("#simpleSrchFieldsCombo" + id);
		    }
		    fieldForSearch = fieldForSearch.length ? fieldForSearch.val() : '';

			sType = $("#ctlSearchOption");
		    if (!sType.length){
		    	sType = $("#simpleSrchTypeCombo" + id);
		    }
			sType = sType.length ? sType.val() : "";
			break;
		case "advanced":
			fieldForSearch = oElement.name.substring(6);
			if($("[name=asearchopt_"+fieldForSearch+"]").length)
				sType=$("[name=asearchopt_"+fieldForSearch+"]").val();
			break;
		case "advanced1":
			fieldForSearch = oElement.name.substring(7);
			if($("[name=asearchopt_"+fieldForSearch+"]").length)
				sType=$("[name=asearchopt_"+fieldForSearch+"]").val();
			break;
	}
	
	Runner.runnerAJAX( SUGGEST_TABLE, {
			searchFor: oElement.value, 
			searchField: fieldForSearch || '',
			rndVal: new Date().getTime(),
			start: sType == "Starts with" ? 1 : 0,
			searchType: searchType
		}, 
		function( respObj ) {
			if ( !respObj.success ) {
				DestroySuggestDiv();
				return;	
			}
			var $suggests = $("#search_suggest"),
				$suggest, i, j;
			
			if ( respObj.result.length ) {
				$suggests.css({ visibility: "visible"});
			} else {
				DestroySuggestDiv();
			}
			
			$suggests.html("");
			Runner.setZindexMaxToElem( $suggests );

			for (i = 0, j = 0; i < respObj.result.length; i++, j++) {
				suggestValues[j] = respObj.result[i].realValue;
				
				$suggest = $('<div id="suggestDiv' + i + '"></div>')
					.addClass('suggest_link')
					.html( respObj.result[i].value )
					.appendTo( $suggests )
					.bind('click', { suggest: suggestValues[j] }, function(e) {
						oElement.value = e.data.suggest;
						DestroySuggestDiv();
					})
					.bind({
						mouseover: function() {
							suggestOver( this );
						},
						mouseout: function() {
							suggestOut( this );
						}
					});	
			}
		});
		
	setLyr(oElement, "search_suggest");
}

function searchSuggest_new( oEvent, ctrl, srchTypeCombo, searchType, suggestUrl ) {
	oEvent = window.event || oEvent;
    var iKeyCode = oEvent.keyCode, fieldForSearch = ctrl.fieldName, ctrlTable = ctrl.table, 
    	ctrlField = ctrl.fieldName, ctrlId = ctrl.id, ctrlInd = ctrl.ctrlInd,        
		sType = (srchTypeCombo.length ? srchTypeCombo.val() : '' );

	cur = -1;
	
	Runner.runnerAJAX( suggestUrl, {
			searchFor: ctrl.getValue(), 
			searchField: fieldForSearch,
			rndVal: new Date().getTime(),
			start: sType == "Starts with ..." ? 1 : 0,
			searchType: searchType
		},
		function( respObj ) {
			if ( !respObj.success || !respObj.result.length ) {
				DestroySuggestDiv();
				return;	
			}
			
			var $suggests = $("#search_suggest"),
				$div, i, j;
				
			if ( respObj.result.length ) {
				$suggests.css({ visibility: "visible"});
			}
			
			$suggests.html("");
			Runner.setZindexMaxToElem( $suggests );	
			
			for (i = 0, j = 0; i < respObj.result.length; i++,j++) {
				suggestValues[j] = respObj.result[i].realValue;
				$div = $('<div id="suggestDiv' + i + '"></div>')
					.addClass('suggest_link')
					.html( respObj.result[i].value )
					.appendTo( $suggests )
					.bind({
						mouseover: function(e) {
							suggestOver( this );
						},
						mouseout: function(e) {
							suggestOut( this );
						}
					})
					.bind('click', { suggest: suggestValues[j] }, function(e) {
						ctrl.setValue( e.data.suggest, true );
						DestroySuggestDiv();
					});				
			}	
		});
		
	setLyr( ctrl.getDispElem().get(0), "search_suggest" );
}
