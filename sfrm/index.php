<!DOCTYPE html>
<html>
<head>
    <title>registration form</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="validate1.js" type="text/javascript"></script>
</head>
<body>
<img id="bgimg" src="1.jpg">




<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" data-toggle="validator" name="registration" class="csi" id="validateform">

    <div class="form-title-row">
       <h1 class="animated bounceInDown">Registration Form</h1>
    </div>
       
        <div class="form-row">
            <label  for="name"><span>Name</span></label>
            <input type="text" id="name"  name="name" size="50" />
        </div class="form-row">

		
		<div class="form-row form-group">
            <label for="email"><span>Email</span></label>
            <input type="text" id="email" name="email" size="50"  />
        </div>

		
		<div class="form-row form-group">
            <label for="mobile"><span>Mobile No.</span></label>
            <input type="text" id="mobile" name="mobile"  />
        </div>

		
		 <div class="form-row form-group">
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input id="gender" type="radio" name="gender" value="M">
                            <span>Male</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input id="gender" type="radio" name="gender" value="F">
                            <span>Female</span>
                        </label>
                    </div>
				</div>
                <span id="gender_err"></span>
		</div>
					
       
        <div class="form-row">
            <label for="college"><span>College</span></label>
            <select  name="college" id="college" onmouseout="disable1()">
                <option selected="" value="Default">(Select One)</option>
                <option value="Akg">AKGEC</option>
                <option value="Other">Other</option>
			</select>
        </div>
		
		<div class="form-row">
            <label for="course"><span>Course</span></label>
            <select name="course" id="course" onmouseout="disable2()">
                <option selected="" value="Default">(Select One)</option>
                <option value="B.Tech">B.Tech.</option>
                <option value="M.tech">M.tech.</option>
                <option value="MBA/MCA">MBA/MCA</option>
            </select>
        </div>


        
		
		<div id="branchdiv" class="form-row">
            <label for="branch"><span>Branch</span></label>
            <select name="branch" id="branch" >
                <option selected="" value="Default">(Select One)</option>
                <option value="CS">CSE</option>
                <option value="IT">IT</option>
                <option value="EC">ECE</option>
                <option value="ME">ME</option>
                <option value="CE">CIVIL</option>
				<option value="EN">EN</option>
				<option value="EI">EI</option>
            </select>
        </div>
		
		<div class="form-row">
            <label for="year"><span>Year</span></label>
            <select name="year" id="year">
                <option selected="" value="Default">(Select One)</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
				<option value="4">4</option>
            </select>
        </div>
		
		<div id="stnodiv" class="form-row">
            <label for="stno"><span>Student No.</span></label>
            <input id="stno" type="text" name="stno" size="8"  />
        </div>
		
		<div id="rollnodiv" class="form-row">
            <label for="rollno"><span>Roll No.</span></label>
            <input id="rollno" type="text" name="rollno" size="10" />
        </div>

		
		<div class="form-row">
               <label><span>Hosteler</span></label>
               <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" id="hostel" name="hostel" value="Y">
                            <span>Yes</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" id="hostel" name="hostel" value="N">
                            <span>No</span>
                        </label>
                    </div>
                </div>
                <span id="hostel_err"></span>
        </div>


        <div class="form-row">

        <button type="submit" name="submit">Submit Form</button>
		</div>
    </div>


    <div class="phpout">
        <?php 


            if (isset($_POST["submit"])) 
            {   
                $Msg="";
                $Err="";
                $name=$email=$mobile=$gender=$college=$course=$branch=$year=$stno=$rollno=$hostel="";

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $mobile = test_input($_POST["mobile"]);
                $college = test_input($_POST["college"]);
                $course = test_input($_POST["course"]);
                $branch = test_input($_POST["branch"]);
                $year = test_input($_POST["year"]);
                $stno = test_input($_POST["stno"]);
                $rollno = test_input($_POST["rollno"]);
                 

                if ((!isset($_POST["gender"]))||(!isset($_POST["hostel"]))) 
                {
                    $Err = "Fill in all the details..";
                    echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                }

                elseif (!preg_match("/^[A-Za-z ]*$/",$name)) 
                {
                    $Err = "Only letter and white space allowed in name...";
                    echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>'; 
                }

                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $Err = "Invalid email id..";
                    echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';    
                }
  
                elseif (!preg_match('/^[6-9]\d{9}$/', $mobile)) 
                {
                    $Err = "Invalid Mobile Number..";
                    echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                }

                elseif (($college=="Default")||($course=="Default")||($year=="Default")) 
                {
                    $Err = "Fill in all the details..";
                    echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';                       
                }

                elseif ($college == "Other"||$college == "Akg") 
                {
                    if ($course == "MBA/MCA") 
                    {
                        $branch == NULL;
                        
                        if ($college == "Other") {
                            $stno == NULL;
                            $rollno == NULL;
                            run($stno,$rollno,$branch);
                        }

                        elseif ($college == "Akg")
                        {
                            if (!preg_match('/^(1)\d{6}$/', $stno)) 
                            {
                                $Err ="Invalid Student Number..";
                                echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                            }

                            elseif (!preg_match('/^(1)\d{9}$/', $rollno)) 
                            {
                                $Err = "Invalid Roll Number..";
                                echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                            }

                            else
                            {
                                run($stno,$rollno,$branch);    
                            }                       
                        }
                    }
                    
                    elseif(($course == "B.Tech")||($course == "M.Tech"))
                    {
                        if ($college == "Other") {
                            $stno == NULL;
                            $rollno == NULL;
                            run($stno,$rollno,$branch);
                        }

                        elseif ($college == "Akg")
                        {
                            if (!preg_match('/^(1)\d{6}$/', $stno)) 
                            {
                                $Err ="Invalid Student Number..";
                                echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                            }

                            elseif (!preg_match('/^(1)\d{9}$/', $rollno)) 
                            {
                                $Err = "Invalid Roll Number..";
                                echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                            }

                            else
                            {
                                run($stno,$rollno,$branch);    
                            }                       
                        }
                    }
                }
            }

                function run($a,$b,$c){

                $Msg="";
                $Err="";
                $name=$email=$mobile=$gender=$college=$course=$branch=$year=$stno=$rollno=$hostel="";


                $name = $_POST["name"];
                $email = $_POST["email"];
                $mobile = $_POST["mobile"];
                $college = $_POST["college"];
                $course = $_POST["course"];
                $branch = $c;
                $year = $_POST["year"];
                $stno = $a;
                $rollno = $b;


                    if ((!empty($name))&&(!empty($email))&&(!empty($mobile))&&(!empty($college))&&(!empty($course))&&(!empty($year))) 
                    {   
                        $gender = $_POST["gender"];
                        $hostel = $_POST["hostel"];
                        $link = mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"rform"); 

                        $count=0;
                        $res = mysqli_query($link,"select * from registration where email ='$email'");
                        $count = mysqli_num_rows($res);

                        $count_2 = 0;
                        $res_2 = mysqli_query($link,"select * from registration where mobile ='$mobile'");
                        $count_2 = mysqli_num_rows($res_2);

                        if(($count > 0)||($count_2 > 0))
                        {      
                          $Err="Registration Already Done, Don't try Again !!";
                          echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                        }
                        else
                        {
                          $link = mysqli_connect("localhost","root","");
                          mysqli_select_db($link,"rform");
                          mysqli_query($link,"insert into registration values('','$name','$email','$mobile','$gender','$college','$course','$branch','$year','$stno','$rollno','$hostel')");
                          $Msg="Registration Sucessfully Done !";  
                          echo '<p style="color:#5EDF09; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Msg.'</p>';   
                        }
                    }

                    else
                    {
                        $Err = "Fill in all the details";
                        echo '<p style="color:#b3003b; font-size:20px; font-family: sans serif; font-weight:bold; text-align: center; position:relative; top:13px;">'.$Err.'</p>';
                    }        
                }
        ?>
    </div>
</form>
</body>
</html>
