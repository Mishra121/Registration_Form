function validate(){
	var fname=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var mobno=document.getElementById('mobile').value;
	var stdno=document.getElementById('stno').value;
	var rollno=document.getElementById('rollno').value;
	var emailreg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$/;

	if(fname!="" && email!="" && mobno!="" && stdno!="" && rollno!="") {
		if (email.match(emailreg)) {
			if(mobno.length==10){
					if (stdno.length==7) {
						if (rollno.length==10) {
							if (document.getElementById('male').checked||document.getElementById('female').checked) {
								if ( document.getElementsByName('branch')[0].value !="" ){
									return true;
								}
   									else{
   										alert('Select your branch !');
   										return false;
   									} 
							}
							else{
								alert('Select your gender !');
								return false;
							}
						}
						else{
							alert('roll no is invalid');
							return false;
						}
					}
				else{
					alert('student no is invalid');
					return false;
				}
			}
			else{
				alert('enter mobile no of 10 digits');
				return false;
			}
		}
		else{
			alert("enter a valid email ");
			return false;
		}
	}
	else{
		alert("All fields are required");
		return false;
	}
}