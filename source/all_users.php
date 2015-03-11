<?PHP

require_once('./include/fg_membersite.php');
require_once('./include/membersite_config.php');

if($fgmembersite->isAdmin()==0)
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
    <title>Minu konto</title>
     
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>   
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
	<link rel="stylesheet" href="style/menubar.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/verticalmenu.css">
    <link rel="stylesheet" href="style/order_history_table.css">
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
     		 
		  <img src="img/LK.jpg" width=auto height=auto alt="img/LK.jpg">
		  </div> <!-- img -->

<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index_loggedin.php'>Avaleht</a></li>
            <li><a href="login-home.php">Minu konto</a>
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
                        <li><a href="web/articles/article_sample.php">Page 1</a></li>
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
	<div id="main">
	<h2>Tere, administraator! Kuupäev: <span id='time'></span></h2> 

	<div id="white-box" >
	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
                      

<div class="center">

    <h3>Kõik kliendid:</h3>

        <script type="text/javascript">
        var sse = new EventSource('./scripts/server-side-script.php');
        sse.addEventListener('LoggedInUsers',function(e){
        var data = e.data;
        //handle your data here

        },false);
        </script>

    <div class="OrderHistoryTable" >
                <table>
                   
                        <tr>
                            <th>
                                Rida
                            </th>
                            <th>
                                Kasutaja ID
                            </th>
                            <th>
                                Kasutaja nimi
                            </th>
                             <th>
                                Kasutaja email
                            </th>
                        </tr>
                    
                        <?php
                            $results = $fgmembersite->GetAllUserData();
                            $i = 1;
                            while($row = mysqli_fetch_array($results))
                            {
                        ?>

                                <tr> 
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['id_user']?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td> 
                                </tr>
                        <?php
                            $i++;
                            }
                        ?>           
                </table>
    </div>	
					
     
</div><!--center--> 
</div><!--contentInt--> 
		   		   

             
	</div> <!-- white box --> 
	</div> <!-- main -->
	
<div id="block" >
                     
</div>

<div id="block" >
                     
</div>
		  
	<div id="footer" >
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>



<!-- This is the code for JavaScript, for streaming server time -->
    <script>
    var source = new EventSource('streaming_data.php');
    var d = document.getElementById('time');
    source.addEventListener('time',function(e){
        var time = e.data;
        d.innerHTML = time;
    },false);
    </script>

</body>
</html>