<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv="Content type" content="text/html; charset=ISO-8859-1">
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
     
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>	
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="style/menubar.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        
    	
</head>

<body>

	
	      <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  <div id="english">
		  <br>
		  <a id="eng" href="../../register.php">EST</a>&nbsp;&nbsp;
		  </div>
		  
		  <div id="img">
     		 
		  <img src="img/LK.jpg" width=auto height=auto>
		  </div <!-- img -->

<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='#'>Home</a></li>
            <li><a href="#">My account</a>
                <div>
                    <ul>
                        <li><a href='../../register.php'>Create an account</a></li>
                        <li><a href='../../login.php'>Log in</a></li>
                       
                    </ul>
                </div>
            </li>
			<li><a href="#">Who we are?</a>
                <div>
                    <ul>
                        <li><a href="#">Our specialists</a></li>
                        <li><a href="#">Concepts</a></li>
  
                    </ul>
                </div>
            </li>
			<li><a href="#">Services</a>
                <div>
                    <ul>
                        <li><a href="#">Market research</a></li>
                        <li><a href="#">Medical statistics</a></li>
  
                    </ul>
                </div>
            </li>
            
            <li><a href="#">Blog</a>
                <div>
                    <ul>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">  Contact  </a></li>
			<li><a href="#">           </a></li>
			
            <li class="pad"></li>
        </ul>
    </div>
	<div id="main">
	<div id="white-box" >
	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
                      <h1></h1>


			   		<div class="center">
		

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Registreerimisvorm</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phone_number' >Phone_number*:</label><br/>
    <input type='text' name='phone_number' id='phone_number' value='<?php echo $fgmembersite->SafeDisplay('phone_number') ?>' maxlength="50" /><br/>
    <span id='register_phone_number_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>

<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->
</div>
</div> <!--center-->


		      </div> <!--contentInt-->
		   		   

             
	</div> <!-- white box --> 
	</div> <!-- main -->

		  
	<div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>