<?PHP
require_once("../../include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("../../thank-you_bootstrap.html");
   }
}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt</title>
     
    
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='../../scripts/gen_validatorv31.js'></script>
    <script src="../../scripts/pwdwidget.js" type="text/javascript"></script>  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
	
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
    <link rel="stylesheet" href="../../style/menubar_test.css">
    <link rel="stylesheet" href="../../style/alertify.core.css" type="text/css">
    <link rel="stylesheet" href="../../style/style_test.css">
    <link rel="STYLESHEET" type="text/css" href="../../style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="../../style/fg_membersite_test.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/bootstrap-theme.css">
    	
</head>

<body>
    
        <div class="container-fluid">
          <div class="row">
             <div class="col-md-8 col-md-offset-2">
                    <div id="english">
		            <a id="eng" href="../lang/eng/index_eng.html">ENG</a>&nbsp;&nbsp;
	
		  </div>
             </div>
           </div>
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
		        <div id="img">
                    <img src="../../img/LK.jpg" class="img-responsive" alt="img/LK.jpg"/>
		        </div> 
            </div>
           </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

            <div class="dropdownmenu">
            <ul id="nav">
            <li class='active'><a href='admin_index.html'>Avaleht</a></li>
            <li><a href="../../login-home_bootstrap.php">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='../../clients_data.php'>Minu andmed</a></li>
                        <li><a href='all_orders.php'>Tellimuste ajalugu</a></li>
                        <li><a href='all_users.php'>Klientide kontod</a></li>
                        <li><a href='../../change-pwd.php'>Muuda parooli</a></li>
		             	<li><a href='../../logout.php'>Logi välja</a></li>
                       
                    </ul>
                </div>
            </li>
			<li><a href="#">Meist</a>
                <div>
                    <ul>
                        <li><a href="admin_satff.html">Personal</a></li>
                        <li><a href="admin_company.html">Concepts</a></li>
  
                    </ul>
                </div>
            </li>
			<li><a href="#">Teenused</a>
                <div>
                    <ul>
					    <li><a href="./admin_services/admin_data_analysis.html">Andmeanalüüs ja töötlus</a></li>
						<li><a href="./admin_services/admin_stat_modelling.html">Statistiline modelleerimine</a></li>
					    <li><a href="./admin_services/admin_med_stat.html">Meditsiinistatistika</a></li>
                        <li><a href="./admin_services/admin_market_research.html">Turuuring</a></li>
                        <li><a href="./admin_services/admin_finance.html">Finantsaruannete analüüs</a></li>
						<li><a href="./admin_services/admin_consultations.html">Konsultatsioonid</a></li>
  
                    </ul>
                </div>
            </li>
            
            <li><a href="#">Blog</a>
                <div>
                    <ul>
                        <li><a href="../articles/article_sample.php">Näidis</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <li><a href="#">Page 5</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="admin_contact.php">  Kontakt  </a></li>
			<li><a href="./admin_services/admin_tech.php">  Abi  </a></li>
            <li class="pad"></li>
        </ul>
          <div class="dropdown">
            <button class="btn btn-success" type="button" id="menu1" data-toggle="dropdown">Menüü
            <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="../../bootstrap_test.html">Avaleht</a></li>
                <li role="presentation" class="divider"></li>
                        <li><a href='../../clients_data.php'>Minu andmed</a></li>
                        <li><a href='all_orders.php'>Tellimuste ajalugu</a></li>
                        <li><a href='all_users.php'>Klientide kontod</a></li>
                        <li><a href='../../change-pwd.php'>Muuda parooli</a></li>
			            <li><a href='../../logout.php'>Logi välja</a></li>
                <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Meist</a></li>
                <li role="presentation" class="divider"></li>
			  <li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_data_analysis.html">Andmeanalüüs ja töötlus</a></li>
			  <li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_stat_modelling.html"> Statistiline modelleerimine</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_med_stat.html">Meditsiinistatistika</a></li>
			  <li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_market_research.html">Turuuuring</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_finance.html">Finantsaruannete analüüs</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_consultations.html">Konsultatsioonid</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="../articles/article_sample.php">Blogi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="admin_contact.php">Kontakt</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="./admin_services/admin_tech.html">Abi</a></li>
                            
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
                                    
	<h3>Saatke meile e-mail</h3>
	Email: consultinglk@yahoo.com
	<br>
	Või saatke kirja online
	<br>
    </div><!--center-->

<br>			   
<!-- Form Code Start -->
<div id='fg_membersite'>
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
<br> Me oleme ka facebook-is:
<img id="facebook" src="img/facebook.png" onclick="window.location='https://www.facebook.com/consultinglk'" />
    <br></td>
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
        
    </body>
</html>

