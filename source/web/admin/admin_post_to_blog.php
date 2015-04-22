<?php
require('../comment-sys/Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);

require_once('../../include/fg_membersite.php');
require_once('../../include/membersite_config.php');


if($fgmembersite->Login()){

	if($fgmembersite->isAdmin()==0)
	{
    	$fgmembersite->RedirectToURL("admin.php");
    	exit;
	}
	else {
    	$fgmembersite->RedirectToURL("../../login_bootstrap.php");
    	exit;
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
    <title>Saada blogisse</title>
     
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type='text/javascript' src='../../scripts/gen_validatorv31.js'></script>
    <script src="../../scripts/pwdwidget.js" type="text/javascript"></script>  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <link rel="STYLESHEET" type="text/css" href="style/comment-main.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" type="text/css">
    <link rel="stylesheet" href="../../style/menubar_test.css">
    <link rel="stylesheet" href="../../style/style_test.css">
    <link rel="STYLESHEET" type="text/css" href="../../style/pwdwidget.css" />
    <link rel="STYLESHEET" type="text/css" href="../../style/fg_membersite_test.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/bootstrap-theme.css">
      
</head>

<body>
    
        <div class="container-fluid text-center">
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
                        <li><a href="admin_staff.html">Personal</a></li>
                        <li><a href="admin_company.html">Concepts</a></li>
  
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
                        <li><a href="admin_post_to_blog.php">Postita blogi</a></li>
                        
  
                    </ul>
                </div>
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
            <li><a href="../../login-contact.php">  Kontakt  </a></li>
			´
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
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turu uuring</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Med statistika</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="../articles/article_sample.php">Blogi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Kontakt</a></li>
              
              
            </ul>
          </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          	<div id="main">
                <h2c>Tere, administraator!</h2c>
	            <div id="white-box" >
	                        <div id="contentInt">
                            <noscript>
                                <p class="note">You have disabled Javascript. This website will not function without it.</p>
                            </noscript>
                            <h1></h1>

       <section id="comments" class="body">
	<div class="center">
	
	  <div class="textart">
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this What You Need from your manager to be successful">What You Need from your manager to be successful</a></h2>
			</header>
			
			<footer class="post-info">
				<abbr class="published" title="2012-02-10T14:07:00-07:00">
					25th February 2015
				</abbr>

				<address class="vcard author">
					By <a class="url fn" href="#">LisBeth</a>
				</address>
			</footer>
			<div class="entry-content">
			<?php
			
			?>
			
			</div>
			
			
			<div class="entry-content">
				<form name="form1" method="post" action="$fgmembersite->InsertBlogPostToDB()">
<p>Title
<input type="text" name="TITLE" size="500">
<br>
Summary
<input type="text" name="SUMMARY" size="500">
<br>
Content
<textarea name="CONTENT" cols="60" rows="15"></textarea>
</p>
<p>
<input type="submit" name="Submit" value="Submit">
</p>
</form>
		</article>
	</div>
			
	</section>
	
	<section id="comments" class="body">
	</div> <!--Center-->
	</div> <!--contentInt-->
		   		   


	  
	  <header>
			<h2c>Tagasiside</h2c>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Jaga oma arvamusega!</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3c>Mida Sina arvad artiklist?</h3c>

      <form action="web/comment-sys/post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Nimi</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Sinu arvamus</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Submit " style="width:50p"/>
        
      </form>
      
    </div>
			
	</section>

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
