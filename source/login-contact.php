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
    <title>Minu konto</title>
     
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="js/disable.js"></script>
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
		  
		  <div id="english">
		  <br>
		  <a id="eng" href="lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;
	
		  </div>
		  <div id="img">
          
		  <img src="img/LK.jpg" width=auto height=auto>
		  </div> <!-- img -->
		  
       <div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index_loggedin.php'>Avaleht</a></li>
            <li><a href="login-home.php">Minu konto</a>
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
                        <li><a href="staff.html">Personal</a></li>
                        <li><a href="company.html">Ettevõtest</a></li>
  
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
	  

		   		   
<div id="main" style="height:1000px">
	

<div id="white-box" >
<div class="center">
    Kontakt
	<br><br>
	Email: leena.ivanova@yahoo.com
	<br>
	Tel: XXXXXX
	<br>
    <img id="facebook" src="img/facebook.png" onclick="window.location='https://www.facebook.com/consultinglk'" />
    <br>

</div><!--center-->

<br>			   
<!-- Form Code Start -->
<div id='fg_membersite_form'>
<form name="contactform" method="post" action="./include/send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">  
 
 </td>
 
</tr>
 
</table>
 
</form>
<div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>                  


</div><!--contentInt-->
	
 </div>  <!-- fg_membersite_form -->   		   
	</div> <!-- white box --> 
	</div> <!-- main -->  

		  
		  <div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
		  </div>


		  	
	</body>
</html>
