<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta charset='utf-8'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minu konto</title>
     
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="scripts/pwdwidget.js" type="text/javascript"></script> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script>
	
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
    <link rel="stylesheet" href="style/menubar_test.css">
    <link rel="stylesheet" href="style/style_test.css">
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite_test.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-theme.css.map">


        
    	
</head>
<body>
    
        <div class="container-fluid">
          <div class="row">
             <div class="col-md-8 col-md-offset-2">
                    <div id="english">
		            <a id="eng" href="web/lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;

		  </div>
             </div>
           </div>
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
		        <div id="img">
                    <img src="img/LK.jpg" class="img-responsive" alt="img/LK.jpg"/>
		        </div> 
            </div>
           </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

            <div class="dropdownmenu">
            <ul id="nav">
            <li class='active'><a href='index.html'>Avaleht</a></li>
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
                        <li><a href="./web/articles/article_sample.php">Näidis</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="contact_bootstrap.php">  Kontakt  </a></li>
			<li><a href="#">           </a></li>
            <li class="pad"></li>
        </ul>
          <div class="dropdown">
            <button class="btn btn-success" type="button" id="menu1" data-toggle="dropdown">Menüü
            <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html">Avaleht</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href='login.php'>Logi sisse</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href='register.php'>Uus kasutaja</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Meist</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turu uuring</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Med statistika</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="./web/articles/article_sample.php">Blogi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kontakt</a></li>
              
              
            </ul>
          </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          	<div id="main">
	            <div id="white-box" >
	                        <div id="contentInt">

                            <noscript>
                                <p class="note">You have disabled Javascript. This website will not function without it.</p>
                            </noscript>
                    <div class="row">
                    <div class="col-md-6 col-lg-offset-3">
                            <div class="center">
                                    Kontakt
	<br><br>
	Email: leena.ivanova@yahoo.com
	<br>
	Tel: XXXXXX
	<br>
    <img id="facebook" src="img/facebook.png" alt="img/facebook.png" onclick="window.location='https://www.facebook.com/consultinglk'" />
    <br>

</div><!--center-->

<br>			   
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id="contactform">
    <input type='hidden' name='function' id='function' value='contactemail'/>
<table>
 
<tr>
 <td><label for="first_name">First Name *</label></td>
 <td><input  type="text" name="first_name" id="first_name" maxlength="50" size="30"></td> 
</tr>
 
<tr>
 <td><label for="last_name">Last Name *</label></td>
 <td><input  type="text" name="last_name" id="last_name" maxlength="50" size="30"></td> 
</tr>
 
<tr>
 <td><label for="email">Email Address *</label></td>
 <td><input  type="text" name="email" id="email" maxlength="80" size="30"></td>
</tr>
 
<tr>
 <td><label for="telephone">Telephone Number</label></td>
 <td><input  type="text" name="telephone" id="telephone" maxlength="30" size="30"></td>
</tr>
 
<tr>
 <td><label for="comments">Comments *</label></td>
 <td><textarea  name="comments" id="comments"  maxlength="1000" cols="25" rows="6"></textarea></td>
</tr>
 
<tr>
 <td colspan="2" style="text-align:center"><input type="Submit" name='Submit' value="Submit"></td>
</tr>
 
</table>
 
</form>
                            </div><!--center-->
                        </div>
                        </div>
                            </div> <!--contentInt-->
		   		   

             
	            </div> <!-- white box --> 
	        </div> <!-- main -->
	
        </div>
   </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">		  
	        <div id="footer" >
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	        </div>
        </div>
    </div>


    </div>

       <SCRIPT SRC="./js/ajax.js"></SCRIPT>>
        
    </body>
</html>

