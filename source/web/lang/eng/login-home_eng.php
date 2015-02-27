<?PHP
require_once("../../../include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login_eng.php");
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
    <title>My account</title>
     
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>	
    <script type='text/javascript' src='../../../scripts/gen_validatorv31.js'></script>
    <script src="../../../scripts/pwdwidget.js" type="text/javascript"></script>   
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="../../../style/menubar.css">
	<link rel="stylesheet" href="../../../style/style.css">
	<link rel="stylesheet" href="../../../style/verticalmenu.css">
	<link rel="STYLESHEET" type="text/css" href="../../../style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="../../../style/fg_membersite.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        
    	
</head>

<body>

	
	      <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  
		  <div id="img">
     		 
		  <img src="../../../img/LK.jpg" width=auto height=auto alt="../../../img/LK.jpg">
		  </div> <!-- img -->

<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index_loggedin_eng.php'>Home</a></li>
            <li><a href="#">My account</a>
                <div>
                    <ul>
                        
                        <li><a href='../../../change-pwd.php'>Change password</a></li>
						<li><a href='logout_eng.php'>Log out</a></li>
                       
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
                        <li><a href="../../articles/article_sample.php">What You Need from your manager to be successful!</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="../../../contact.php">  Contact  </a></li>
			<li><a href="#">           </a></li>
			
            <li class="pad"></li>
        </ul>
    </div>
	<div id="main">
	<h2>Hello, <?= $fgmembersite->UserFullName(); ?>!</h2>
	
	<div id="white-box" >
	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
                      
			 


<div class="center">
					
					
<div id='verticalmenu'>
<ul>

   <li class='active has-sub'><a href='#'><span>My orders</span></a>
      <ul>
         <li><a href='../../../make_order.php'><span>Make order</span></a></li>
         <li><a href='../../../client_orders.php'><span>History</span></a></li>
         </li>
      </ul>
   </li>
   
   <li class='last'><a href='../../../clients_data.php'><span>My data</span></a></li>
</ul>
</div>
		

</div><!--center-->
</div> <!--contentInt-->
		   		   

             
	</div> <!-- white box --> 
	</div> <!-- main -->
	

		  
	<div id="footer" >
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>

</body>
</html>
