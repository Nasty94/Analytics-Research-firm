<?PHP
error_reporting(E_ALL); ini_set('display_errors', 1);

require_once("./include/membersite_config.php");

if(isset($_POST['function'])){
    $fgmembersite->SendContactEmail();
}


?>