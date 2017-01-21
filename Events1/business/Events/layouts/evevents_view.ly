@version=2
beginblock top 
begincontainer vertical style=empty align=center width=500  all
	
begincontainer vertical style=empty align=center width=500  main
  	begincontainer wvpadding=0 vertical style=empty pdf
 		brick left viewpdf
    endcontainer
    begincontainer wvpadding=0 vertical style=1 view
        brick color2 viewheader
		begincontainer vertical color=1 style=fields fields
			brick viewfields 
			brick color2 viewbuttons
		endcontainer
    endcontainer
	endcontainer	
    begincontainer vertical style=empty width=100% details
        brick viewdetails
   endcontainer
   endcontainer
endblock