function validate(para2){
	            
           var d = para2;
        var a = document.getElementById("password1").value;
        var b = document.getElementById("password2").value;
		var c=document.getElementById("password0").value;

                      if(a=== "") {
                                     return false; }                 

                             else  {
		                            if(c!=d){
			                            document.getElementById("image0").src = "remove.png";
			                            return false;
		                                     }
                                    if ( (a!=b)) {
		                        	document.getElementById("image").src = "remove.png";
			                     return false;
                                                 }
	                               }	
    }