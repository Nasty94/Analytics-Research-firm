<?PHP
error_reporting(E_ALL); ini_set('display_errors', 1);
require_once("class.phpmailer.php");
require_once("formvalidator.php");

class FGMembersite
{
    var $admin_email;
    var $from_address;
    

    var $connection;
    var $rand_key;
    
    var $error_message;
    
    //-----Initialization -------
    function FGMembersite()
    {
        $this->sitename = 'lkconsulting.com';
        $this->rand_key = '0iQx5oBk66oVZep';
    }
    
   
    function SetAdminEmail($email)
    {
        $this->admin_email = $email;
    }
    
    function SetWebsiteName($sitename)
    {
        $this->sitename = $sitename;
    }
    
    function SetRandomKey($key)
    {
        $this->rand_key = $key;
    }
    
    //-------Main Operations ----------------------
    function MakeOrder()
    {
        if(!isset($_POST['submitted']))
        {
           return false;
        }
        
        $formvars = array();
        
        if(!$this->ValidateRegistrationSubmission())
        {
            return false;
        }
        
        $this->CollectRegistrationSubmission($formvars);
        

        
        if(!$this->SendUserConfirmationEmail($formvars))
        {
            return false;
        }

        $this->SendAdminIntimationEmail($formvars);
        
        return true;
    }



    
    function UserFullName()
    {
        return isset($_SESSION['name_of_user'])?$_SESSION['name_of_user']:'none';
    }
    
    function UserEmail()
    {
        return isset($_SESSION['email_of_user'])?$_SESSION['email_of_user']:'none';
    }
	function UserPhoneNumber()
	
    {
	    return isset($_SESSION['phone_of_user'])?$_SESSION['phone_of_user']:'none';
		
    }


    
    //-------Public Helper functions -------------
    function GetSelfScript()
    {
        return htmlentities($_SERVER['PHP_SELF']);
    }    
    
    function SafeDisplay($value_name)
    {
        if(empty($_POST[$value_name]))
        {
            return'';
        }
        return htmlentities($_POST[$value_name]);
    }
    
    function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }
    
    function GetSpamTrapInputName()
    {
        return 'sp'.md5('KHGdnbvsgst'.$this->rand_key);
    }
    
    function GetErrorMessage()
    {
        if(empty($this->error_message))
        {
            return '';
        }
        $errormsg = nl2br(htmlentities($this->error_message));
        return $errormsg;
    }    
    //-------Private Helper functions-----------
    
    function HandleError($err)
    {
        $this->error_message .= $err."\r\n";
    }
    

    function GetFromAddress()
    {
        if(!empty($this->from_address))
        {
            return $this->from_address;
        }

        $host = $_SERVER['SERVER_NAME'];

        $from ="nobody@$host";
        return $from;
    } 
    
    function GetLoginSessionVar()
    {
        $retvar = md5($this->rand_key);
        $retvar = 'usr_'.substr($retvar,0,10);
        return $retvar;
    }
    


 public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }

    
    function SendUserCopyOrder(&$user_rec)
    {
		require 'PHPMailerAutoload.php';
		$mailer = new PHPMailer;
		//$mailer->SMTPDebug = 2;
		//$mailer->Debugoutput = 'html';
        
        $mailer->CharSet = 'utf-8';
		$mailer->IsSMTP();
		$mailer->Host = 'smtp.gmail.com';
		$mailer->Port = 587;
		$mailer->SMTPSecure = 'tls';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'lkcmailer@gmail.com';  
		$mailer->Password = 'lkconsulting';
        $mailer->addReplyTo('lkcmailer@gmail.com', 'First Last');  
        $mailer->AddAddress($user_rec['email'],$user_rec['name']);
        
        //$mailer->Subject = "Your registration with ".$this->sitename;

        $mailer->setFrom($this->GetFromAddress(),"lkcmailer");
		

        
        $mailer->Subject = "Welcome to ".$this->sitename;

        $mailer->From = $this->GetFromAddress();        
        
        $mailer->Body ="Hello ".$user_rec['name']."\r\n\r\n".
        "You have submitted new order with ".$this->sitename.
        "\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        $this->sitename;

        if(!$mailer->Send())
        {
            $this->HandleError("Failed sending user welcome email.");
            return false;
        }
        return true;
    }
    
    function SendAdminOrder(&$user_rec)
    {
        if(empty($this->admin_email))
        {
            return false;
        }
        $mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($this->admin_email);
        
        $mailer->Subject = "New order received: ".$user_rec['name'];

        $mailer->From = $this->GetFromAddress();         
        
        $mailer->Body ="New order at ".$this->sitename."\r\n".
        "Name: ".$user_rec['name']."\r\n".
        "Email address: ".$user_rec['email']."\r\n";
		"Body: "..$user_rec['order'].
        
        if(!$mailer->Send())
        {
            return false;
        }
        return true;
    }
    

    
    function ValidateOrderSubmission()
    {
        //This is a hidden input field. Humans won't fill this field.
        if(!empty($_POST[$this->GetSpamTrapInputName()]) )
        {
            //The proper error is not given intentionally
            $this->HandleError("Automated submission prevention: case 2 failed");
            return false;
        }
        
        $validator = new FormValidator();
        $validator->addValidation("name","req","Please fill in Name");
        $validator->addValidation("email","email","The input for Email should be a valid email value");
        $validator->addValidation("email","req","Please fill in Email");
        

        
        if(!$validator->ValidateForm())
        {
            $error='';
            $error_hash = $validator->GetErrors();
            foreach($error_hash as $inpname => $inp_err)
            {
                $error .= $inpname.':'.$inp_err."\n";
            }
            $this->HandleError($error);
            return false;
        }        
        return true;
    }
	
    
    function CollectRegistrationSubmission(&$formvars)
    {
        $formvars['name'] = $this->Sanitize($_POST['name']);
	    
        $formvars['email'] = $this->Sanitize($_POST['email']);
		$formvars['phone_number'] = $this->Sanitize($_POST['phone_number']);
       
    }

    function GetAbsoluteURLFolder()
    {
        $scriptFolder = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';

        $urldir ='';
        $pos = strrpos($_SERVER['REQUEST_URI'],'/');
        if(false !==$pos)
        {
            $urldir = substr($_SERVER['REQUEST_URI'],0,$pos);
        }

        $scriptFolder .= $_SERVER['HTTP_HOST'].$urldir;

        return $scriptFolder;
    }
    
 
	function CollectOrderSubmission(&$formvars)
    {
        $formvars['name'] = $this->Sanitize($_POST['name']);
	   
        $formvars['email'] = $this->Sanitize($_POST['email']);
		$formvars['phone_number'] = $this->Sanitize($_POST['phone_number']);
        $formvars['order'] = $this->Sanitize($_POST['order']);
   
    }
	function SendOrder(&$user_rec)
    {
		require 'PHPMailerAutoload.php';
		$mailer = new PHPMailer;
		//$mailer->SMTPDebug = 2;
		//$mailer->Debugoutput = 'html';
        
        $mailer->CharSet = 'utf-8';
		$mailer->IsSMTP();
		$mailer->Host = 'smtp.gmail.com';
		$mailer->Port = 587;
		$mailer->SMTPSecure = 'tls';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'lkcmailer@gmail.com';  
		$mailer->Password = 'lkconsulting';
        $mailer->addReplyTo('lkcmailer@gmail.com', 'First Last');  
        $mailer->AddAddress($user_rec['email'],$user_rec['name']);
        
        //$mailer->Subject = "Your registration with ".$this->sitename;

        $mailer->setFrom($this->GetFromAddress(),"lkcmailer");
		

        
        $mailer->Subject = "New order received from ".$formvars['name'];

        $mailer->From = $formvars['email'];       
        
        $mailer->Body ="Hello this is your new order: ".
        "Phone number ".$formvars['phone_number'].

        $formvars['order'];

        if(!$mailer->Send())
        {
            $this->HandleError("Failed sending user welcome email.");
            return false;
        }
		$this->SendAdminOrder($formvars);
        return true;
    }
    
   
   

    
 /*
    Sanitize() function removes any potential threat from the
    data submitted. Prevents email injections or any other hacker attempts.
    if $remove_nl is true, newline chracters are removed from the input.
    */
    function Sanitize($str,$remove_nl=true)
    {
        $str = $this->StripSlashes($str);

        if($remove_nl)
        {
            $injections = array('/(\n+)/i',
                '/(\r+)/i',
                '/(\t+)/i',
                '/(%0A+)/i',
                '/(%0D+)/i',
                '/(%08+)/i',
                '/(%09+)/i'
                );
            $str = preg_replace($injections,'',$str);
        }

        return $str;
    }    
	
    function StripSlashes($str)
    {
        if(get_magic_quotes_gpc())
        {
            $str = stripslashes($str);
        }
        return $str;
    }    
	
}
?>
