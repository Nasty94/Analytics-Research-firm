<?PHP
require_once("./include/membersite_config.php");
require_once("./include/fg_membersite.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {

    echo $fgmembersite->IsAdmin();
    

     if($fgmembersite->IsAdmin()==0)
	 {
	 $fgmembersite->RedirectToURL("admin.php");
	 }
       
  else{
     	
	 $fgmembersite->RedirectToURL("login-home.php");
	 }
   }
}

elseif( isset( $_REQUEST["provider"] ) )
{ 
	// the selected provider
	$provider_name = $_REQUEST["provider"];
 
	try
	{
        

		// inlcude HybridAuth library
		// change the following paths if necessary 
		$config   = dirname(__FILE__) . '/hybridauth/config.php';
		require_once( "hybridauth/Hybrid/Auth.php" );
		// initialize Hybrid_Auth class with the config file
		$hybridauth = new Hybrid_Auth( $config );
		// try to authenticate with the selected provider
		$adapter = $hybridauth->authenticate( $provider_name );
		// then grab the user profile 
		$user_profile = $adapter->getUserProfile();

	}
 
	// something went wrong?
	catch( Exception $e )
	{
        echo $e;
		//header("Location: http://www.example.com/login-error.php");
	}

	// check if the current user already have authenticated using this provider before 
	$user_exist = $fgmembersite->get_user_by_provider_and_id( $provider_name, $user_profile->identifier );


 
	// if the used didn't authenticate using the selected provider before 
	// we create a new entry on database.users for him
	if(!$user_exist) 
	{
		$fgmembersite->create_new_hybridauth_user(
			$user_profile->email, 
			$user_profile->firstName, 
			$user_profile->lastName, 
			$provider_name,
			$user_profile->identifier
		);
	}
    
	// set the user as connected and redirect him
    $username = $user_profile->identifier;
    if(!isset($_SESSION)){
        session_start(); 
    }
    $fgmembersite->CheckLoginInDB_Hybrid($user_profile->identifier);
    $_SESSION[$fgmembersite->GetLoginSessionVar()] = $username;
	$fgmembersite->RedirectToURL("login_home_bootstrap.php");

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv="Content type" content="text/html; charset=ISO-8859-1">
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
     
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>      
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite_test.css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/menubar_test.css" type="text/css" media="all">
    <link rel="stylesheet" href="style/style_test.css" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-theme.css">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    
  
</head>
    </html> 
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
            <li><a href="#">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='register.php'>Uus kasutaja</a></li>
                        <li><a href='#'>Logi sisse</a></li>
                       
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
            <li><a href="contact.php">  Kontakt  </a></li>
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
<div class="row">
<div class="col-md-6 col-lg-offset-3">
	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
       


			   		<div class="center">

<!-- Form Code Start -->

<div id='fg_membersite'>

<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Logi sisse</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req_bootstrap.php'>Forgot Password?</a></div>
</fieldset>
</form>
</div>
</div>

<fieldset>
    <legend>Või kasuta muud teenusepakkujat:</legend>
    <a href="login.php?provider=google"><img src="img/google_plus_sm.png" alt="img/google_plus_sm.png" /></img></a>
</fieldset>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

</div>


    </div> <!--center-->

    </div> <!--contentInt-->
    </div>
    </div>   

             
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


    </div> <!--fluid-container-->

        
    </body>

