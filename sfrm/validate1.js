$(function(){
	
	var name = false;
	var email = false;
	var mobile = false;
	var gender = false;
	var college = false;
	var course = false;
	var branch = false;
	var year = false;
	var stno = false;
	var rollno = false;
	var hostel = false;
	
	$("#name").focusout(function(){
		check_name();
	});

	$("#email").focusout(function(){
		check_email();
	});

	$("#mobile").focusout(function(){
		check_mobile();
	});

	$("#gender").focusout(function(){
		check_gender();
	});

	$("#college").focusout(function(){
		check_college();
		if ($("#college").val()=="Other") 
		{
			$("#stnodiv").hide();
			$("#rollnodiv").hide();
		}
		else
		{
			$("#stnodiv").show();
			$("#rollnodiv").show();
		}
	});

	$("#course").focusout(function(){
		check_course();
		if ($("#course").val()=="MBA/MCA") 
		{
			$("#branchdiv").hide();
		}
		else
		{
			$("#branchdiv").show();
		}
	});

	$("#branch").focusout(function(){
		check_branch();
	});

	$("#year").focusout(function(){
		check_year();
	});

	$("#stno").focusout(function(){
		check_stno();
	});

	$("#rollno").focusout(function(){
		check_rollno();
	});

	$("#hostel").focusout(function(){
		check_hostel();
	});

	
	function check_name(){
		var name_length = $("#name").val().length;

		if (name_length < 5 || name_length > 20) 
		{
			$("#name").css("border","2px solid #d9534f");
			name = true;
		}
		else{
			$("#name").css("border", "2px solid #5cb85c");
		}
	};

	function check_email(){
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

		if (pattern.test($("#email").val())) 
		{
			$("#email").css("border", "2px solid #5cb85c");	
		}
		else
		{
			$("#email").css("border","2px solid #d9534f");
			email = true;
		}
	};

	function check_mobile(){
		var reg = /^[0-9]{1,10}$/;		
		
		if (!reg.test($("#mobile").val())) 
		{
			$("#mobile").css("border","2px solid #d9534f");
			mobile = true;
		}
		else
		{
			$("#mobile").css("border", "2px solid #5cb85c");
		}
	};
	
	function check_gender(){
		if ($('input[name=gender]:checked').length<=0) 
		{
			$("#gender_err").html("gender field not selected");
			$("#gender_err").css({"color":"#d9534f","position":"relative","top":"12px","left":"14px"});
			$("#gender_err").show();	
			gender = true;
		}
		else
		{
			$("#gender_err").hide();
		}
	};


	function check_college(){
		if ($("#college").val()== "Default") 
		{
			$("#college").css("border","2px solid #d9534f");
			college = true;
		}
		else
		{
			$("#college").css("border", "2px solid #5cb85c");
		}
	};

	function check_course(){
		if ($("#course").val()=="Default") 
		{
			$("#course").css("border","2px solid #d9534f");
			course = true;
		}
		else
		{
			$("#course").css("border", "2px solid #5cb85c");
		}
	};

	function check_branch(){
		if ($("#branch").val()=="Default") 
		{
			$("#branch").css("border","2px solid #d9534f");
			branch = true;
		}
		else
		{
			$("#branch").css("border", "2px solid #5cb85c");
		}
	};

	function check_year(){
		if ($("#year").val()=="Default") 
		{
			$("#year").css("border","2px solid #d9534f");
			year = true;
		}
		else
		{
			$("#year").css("border", "2px solid #5cb85c");
		}
	};

	function check_stno(){
		var reg = /^[0-9]{1,7}$/;		
		
		if (!reg.test($("#stno").val())) 
		{
			$("#stno").css("border","2px solid #d9534f");
			stno = true;
		}
		else
		{
			$("#stno").css("border", "2px solid #5cb85c");
		}
	};

	function check_rollno(){
		var reg = /^[0-9]{1,10}$/;		
		
		if (!reg.test($("#rollno").val())) 
		{
			$("#rollno").css("border","2px solid #d9534f");
			rollno = true;
		}
		else
		{
			$("#rollno").css("border", "2px solid #5cb85c");
		}
	};

	function check_hostel(){
		if ($('input[name=hostel]:checked').length<=0) 
		{
			$("#hostel_err").html("hostel field not selected");
			$("#hostel_err").css({"color":"#d9534f","position":"relative","top":"12px","left":"14px"}); 
			$("#hostel_err").show();
			hostel = true;
		}
		else
		{
			$("#hostel_err").hide();
		}
	};

	$(document).on("submit","form",function(e){
		name = false;
		email = false;
		mobile = false;
		gender = false;
		college = false;
		course = false;
		year = false;
		hostel = false;

		check_name();
		check_email();
		check_mobile();
		check_gender();
		check_college();
		check_course();
		check_year();
		check_hostel();

		

		if ($("#college").val()!="Other") 
		{	
			check_stno();
			check_rollno();
		}

		if($("#course").val()!="MBA/MCA")
		{
			check_branch();
		}
		
		if (name == false && email == false && mobile == false &&  college == false && course == false && year == false && gender == false && hostel == false) 
		{
			return true;
		}
		else
		{
			e.preventDefault();
			return false;
		}
	});
	
});