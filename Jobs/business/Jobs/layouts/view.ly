@version=2
beginblock top 
begincontainer vertical style=empty align=center width=500  all
	
begincontainer vertical style=empty align=center width=500  view
  	begincontainer wvpadding=0 vertical style=empty pdf
 		brick left viewpdf
    endcontainer
    begincontainer wvpadding=0 vertical style=fields fields
        brick color2 view_header
		brick viewfields 
		brick color2 viewbuttons
    endcontainer
	endcontainer	
    begincontainer vertical style=empty width=100% details
        brick viewdetails
   endcontainer
   endcontainer
endblock