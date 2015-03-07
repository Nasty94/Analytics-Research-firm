<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL();
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUserOrder())
   {
        $fgmembersite->RedirectToURL("thank_you_order.php");
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
    <title>Minu konto</title>
     
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="style/menubar.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/verticalmenu.css">
	<link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite_form.css" />
        
    	
</head>

<body>

	
	      <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  
		  <div id="img">
     		 
		  <img src="img/LK.jpg" width=auto height=auto alt="img/LK.jpg">
		  </div> <!-- img -->

<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='#'>Avaleht</a></li>
            <li><a href="login-home.php">Minu konto</a>
                <div>
                    <ul>
                        
                        <li><a href='clients_data.php'>Minu andmed</a></li>
                        <li><a href='make_order.php'>Tellimuse tegemine</a></li>
                        <li><a href='client_orders.php'>Tellimuste ajalugu</a></li>
                        <li><a href='change-pwd.php'>Muuda parooli</a></li>
			            <li><a href='logout.php'>Logi välja</a></li>
                       
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
                        <li><a href="web/articles/article_sample.php">Artikkel 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="login-contact.php">  Kontakt  </a></li>
			<li><a href="#">           </a></li>
			
            <li class="pad"></li>
        </ul>
    </div>

<div id="main" style="height:1000px">
	<h2>Tere, <?= $fgmembersite->UserFullName(); ?>!</h2>

<div id="white-box" >

<!-- Form Code Start -->
<div id='fg_membersite_form'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Minu tellimus</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

<div class='container'>
    <label for="name" >Nimi:</label><br/>
    <input type='text' name='name' id='name' value='<?php echo $fgmembersite->UserFullName() ?>' maxlength="50" required="required" /><br/>   
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <label for='email' >Email:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->UserEmail() ?>' maxlength="50" required="required"/><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='phone_number' >Mobiilinumber:</label><br/>
    <input type='text' name='phone_number' id='phone_number' value='<?php echo $fgmembersite->UserPhoneNumber() ?>' maxlength="50" /><br/>
    <span id='register_phone_number_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for="order" >Tellimuse kirjeldus:</label><br/>
    <textarea name='order' id='order' maxlength="255" rows="3" required="required"></textarea>   
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Sisesta tellimus!' />
</div>

</fieldset>
</form>	

<div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>                  

<div class="center">
   

</div><!--center-->
</div><!--contentInt-->
	
 </div>  <!-- fg_membersite_form -->   		   
	</div> <!-- white box --> 
	</div> <!-- main -->  

<div id="block" >
                     
</div>


	<div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>

</body>
</html>
