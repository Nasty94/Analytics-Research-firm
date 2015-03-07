<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return 
	array(
		"base_url" => "http://localhost/hybridauth",#"http://lk-consulting.azurewebsites.net/source/hybridauth/", 

		"providers" => array ( 
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),
			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "406295690407-rtsb814i5q4br11tnolgpsm8vcp4m8l4.apps.googleusercontent.com", "secret" => "Sj6PXXAaYJ2MVBMqAsSPPA_T" ),
                "scope"           => "https://www.googleapis.com/auth/userinfo.profile ". // optional
                                     "https://www.googleapis.com/auth/userinfo.email"   , // optional
                "access_type"     => "offline",   // optional
                "approval_prompt" => "force",     // optional
                //"hd"              => "domain.com" 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ),
				"trustForwarded" => false
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			// windows live
			"Live" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			"LinkedIn" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),
		),

		// If you want to enable logging, set 'debug_mode' to true.
		// You can also set it to
		// - "error" To log only error messages. Useful in production
		// - "info" To log info and error messages (ignore debug messages) 
		"debug_mode" => true,

		// Path to file writable by the web server. Required if 'debug_mode' is not false
		"debug_file" => "authentication_log.log",
	);
