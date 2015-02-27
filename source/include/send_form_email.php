<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "anastassia.ivanova.94@gmail.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>
 
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
    <title>Äitah!</title>
     
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    <script type='text/javascript' src='../scripts/gen_validatorv31.js'></script>
	<script src="../js/disable.js"></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="../style/menubar.css">
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="../style/verticalmenu.css">
	<link rel="STYLESHEET" type="text/css" href="../style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="../style/fg_membersite.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="STYLESHEET" type="text/css" href="../style/fg_membersite_form.css" />
        
    	
</head>
	<body> 
			
	      <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  
		  <div id="english">
		  <br>
		  <a id="eng" href="../web/lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;
	
		  </div>
		  <div id="img">
          
		  <img src="../img/LK.jpg" width=auto height=auto>
		  </div> <!-- img -->
		  
       <div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='../index.html'>Avaleht</a></li>
            <li><a href="#">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='../register.php'>Uus kasutaja</a></li>
                        <li><a href='../login.php'>Logi sisse</a></li>
                       
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
                        <li><a href="../web/articles/article-sample.php">Artikkel 1</a></li>
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
    Äitah! Vastem Teile tellimusele esimesel võimalusel!

</div><!--center-->


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

 
 
 
<?php
 
}
 
?>