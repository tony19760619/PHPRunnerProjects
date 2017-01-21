
Runner.controls.EditHTMLLink=Runner.extend(Runner.controls.Control,{HTMLLinkValue:"<a href='#'>value of my Field:</a>",constructor:function(cfg){this.addEvent(["change","keyup"]);Runner.controls.EditHTMLLink.superclass.constructor.call(this,cfg);this.HTMLLinkValue=this.getFieldSetting("HTMLLinkValue");},getForSubmit:function(){if(!this.appearOnPage()){return[];}
return[this.valueElem.clone().val(this.getValue())]},setFocus:function(){if(!this.appearOnPage()){return[];}
return false;}});Runner.controls.constants["EditHTMLLink"]="EditHTMLLink";