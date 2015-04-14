<?php
require('web/comment-sys/Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);

require_once('include/fg_membersite.php');
require_once('include/membersite_config.php');


if($fgmembersite->Login()){

	if($fgmembersite->isAdmin()==0)
	{
    	$fgmembersite->RedirectToURL("admin.php");
    	exit;
	}
	else {
    	$fgmembersite->RedirectToURL("login.php");
    	exit;
	}
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style/comment-main.css" type="text/css" />
	<meta http-equiv="Content type" content="text/html; charset=ISO-8859-1">
	<meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article sample</title>
     
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
        
</head>

<body id="index" class="home">
    <div id="left"></div>
		  <div id="right"></div>
		  <div id="top"></div>
		  <div id="bottom"></div>
		  
		  <div id="img">
     		 
		  <img src="img/LK.jpg" width=auto height=auto>
		  </div <!-- img -->
		  
<div class="dropdownmenu">
        <ul id="nav">
            <li class='active'><a href='index.html'>Avaleht</a></li>
            <li><a href="#">Minu konto</a>
                <div>
                    <ul>
                        <li><a href='register.php'>Uus kasutaja</a></li>
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
                        <li><a href="#">Näidis</a></li>
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
    </div>
       <br> <br> <br>

	
	<section id="content" class="body">

	 <div id="contentInt">
                 <noscript>
                        <p class="note">You have disabled Javascript. This website will not function without it.</p>
                 </noscript>
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
			PostToBlog();
			?>
			
			</div>
			
			
			<div class="entry-content">
				<form name="form1" method="post" action="$fgmembersite->InsertBlogPostToDB()">
<p>Title
<input type="text" name="TITLE" size="50">
<br>
Summary
<input type="text" name="SUMMARY" size="50">
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
			<h2>Tagasiside</h2>
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

      <h3>Mida Sina arvad artiklist?</h3>

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

	
	<div id="footer" >
                      © 2015  LK Consulting <br>
					  This is a proof-of-concept web application.
	</div>


</body>
</html>
