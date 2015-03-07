<?PHP
require_once('../../membersite_config.php');
require_once('../../fg_membersite.php');

if(!$fgmembersite->isAdmin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
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
	<link rel="stylesheet" href="style/verticalmenu.css">
	<link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        
    	
</head>

<body>

	
	      <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  
		  <div id="img">
     		 
		  <img src="img/LK.jpg" width=auto height=auto>
		  </div> <!-- img -->

<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index_loggedin.html'>Avaleht</a></li>
            <li><a href="#">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='clients_data.php'>Minu andmed</a></li>
                        <li><a href='all_orders.php'>Tellimuste ajalugu</a></li>
                        <li><a href='all_users.php'>Klientide kontod</a></li>
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
<li><a href="#">Lisa artikkel</a></li>
<li><a href="web/articles/article_sample.php">Näidis</a></li>
<li><a href="#">Page 2</a></li>
<li><a href="#">Page 3</a></li>
<li><a href="#">Page 4</a></li>
<li><a href="#">Page 5</a></li>
</ul>
</div>
</li>
<li><a href="contact.php"> Kontakt </a></li>
<li><a href="#"> </a></li>
<li class="pad"></li>
</ul>
</div>
	<div id="main">
	<h2>Tere, <?= $fgmembersite->UserFullName(); ?>!</h2>
	<h3>Olete administraator.</h3>
	
	<div id="white-box" >
	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
                      
			 


<div class="center">
					
					
<div id='verticalmenu'>
<ul>
   <li><a href='index.html'><span>Avaleht</span></a></li>
   <li class='active has-sub'><a href='#'><span>Minu tellimused</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Ajalugu</span></a>
            <ul>
               <li><a href='#'><span>Konto</span></a></li>
               <li class='last'><a href='#'><span>Kirjeldus</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Page 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Page 2</span></a></li>
               
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Minu sõnumid</span></a></li>
   <li class='last'><a href='logout.php'><span>Lovi välja</span></a></li>
</ul>
</div>
		

</div><!--center-->
</div> <!--contentInt-->
		   		   

             
	</div> <!-- white box --> 
	</div> <!-- main -->

		  
	<div id="footer">
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>

</body>
</html>
