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

<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="et">
	<head>	

		<meta http-equiv="Content type" content="text/html; charset=ISO-8859-1">
		<meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Contact</title>
		
	    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style/alertify.core.css" type="text/css">
        <link rel="stylesheet" href="style/style.css" type="text/css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
		<link rel="stylesheet" href="style/menubar.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="style/style.css">
        
		
		
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="js/disable.js"></script>
			
        <script src="script.js"></script>	
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
		<script src="scripts/jquery-1.11.0.min.js"></script>
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
		  <a id="eng" href="lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;
		  <a id="eng" href="lang/rus/index_rus.html">RUS</a>
		  </div>
		  <div id="img">
          
		  <img src="img/LK.jpg" width=auto height=auto>
		  </div> <!-- img -->
		  
       <div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index.html'>Avaleht</a></li>
            <li><a href="#">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='register.php'>Uus kasutaja</a></li>
                        <li><a href='login.php'>Logi sisse</a></li>
                       
                    </ul>
                </div>
            </li>
			<li><a href="#">Meist</a>
                <div>
                    <ul>
                        <li><a href="#">Personal</a></li>
                        <li><a href="#">Concepts</a></li>
  
                    </ul>
                </div>
            </li>
			<li><a href="#">Teenused</a>
                <div>
                    <ul>
                        <li><a href="#">Turuuring</a></li>
                        <li><a href="#">Med. statistika</a></li>
  
                    </ul>
                </div>
            </li>
            
            <li><a href="#">Blog</a>
                <div>
                    <ul>
                        <li><a href="./web/articles/article-sample.php">Artikkel 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">           </a></li>
			<li><a href="#">           </a></li>
			<li><a href="#">           </a></li>
			<li><a href="#">           </a></li>
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
				 
				  <h4>"The secret of business is to know something that nobody else knows."<br>
                        <!--<sub>The purpose of this survey is to test the reliability of the system.</sub>-->
                        <sub>(c)Aristottle Onassis</sub><br></h4><br>
				
					  
	
               <FORM name="mainform" id="FORMmain">

			   		<div class="center">
					
					Kontakti info
                </div> <!--center-->

               </FORM>
			   <FORM name="subform" id="FORM">
			   		   <div id='fg_membersite_form'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Minu tellimus</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Nimi*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phone_number' >Telefoninumber:</label><br/>
    <input type='text' name='phone_number' id='phone_number' value='<?php echo $fgmembersite->SafeDisplay('phone_number') ?>' maxlength="50" /><br/>
    
</div>

<div class='container'>
    <label for="order" >Tellimuse kirjeldus:</label><br/>
    <textarea name='order' id='order' maxlength="2000" rows="3" required="required"></textarea>   
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>	
</div>
                    <br>
			   		<div class="center">
					
					Kontakt
                </div> <!--center-->

               </FORM>

			  
			   <a href="javascript:enable();" >Võta ühendust...</a>
			   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

               <img id="facebook" src="img/facebook.png" onclick="window.location='https://www.facebook.com/consultinglk'" />
		       </div> <!--mainform-->
			   
		      </div> <!--contentInt-->
			  
		      </div> <!-- white box -->
			  
			  
		    </div> <!-- main -->

		  
		  <div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
		  </div>
		  
<script type='text/javascript'>
// <![CDATA[
        
    var frmvalidator  = new Validator("contact");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");


// ]]>
</script>

		  	
	</body>
</html>
