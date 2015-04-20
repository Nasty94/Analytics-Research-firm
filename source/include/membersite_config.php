<?PHP
error_reporting(E_ALL); ini_set('display_errors', 1);
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('LKConsulting.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('anastassia.ivanova.94@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(
//					  /*hostname*/'eu-cdbr-azure-north-b.cloudapp.net',
                      /*hostname*/'%',
//                      /*username*/'bc3106a32eb6a9',
                      /*username*/'root',
//                      /*password*/'ff65da13',
                      /*password*/'',
                      /*database name*/'lkconsult',
                      /*table name*/'users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>