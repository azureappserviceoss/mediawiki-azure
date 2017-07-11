<?php


    $connectstr_dbhost = getenv('DATABASE_HOST');
    $connectstr_dbname = getenv('DATABASE_NAME');;
    $connectstr_dbusername = getenv('DATABASE_USERNAME');;
    $connectstr_dbpassword = getenv('DATABASE_PASSWORD');


$hostname = gethostname();

$wgWPIOptionStore = array(
		//Screen1
		'lang' => 'en',
		//Screen2
		'dbserver' => $connectstr_dbhost,
		'dbname' => $connectstr_dbname,
		'dbprefix' => 'mw_',
		'dbuser' => $connectstr_dbusername,
		'dbpass' => $connectstr_dbpassword,
		'installdbuser' => $connectstr_dbusername,
		'installdbpass' => $connectstr_dbpassword,
		//Screen3
		'sitename' => 'MyWiki',
		'adminname' => getenv('SITE_ADMIN_USERNAME'),
		'pass' => getenv('SITE_ADMIN_PASSWORD'),
		'scriptpath' => substr($hostname, 0,strrpos($mystring, ".")),
	    'enablefileupload' => 'No',
		'usewindowsazure' => 'No',
		'azureaccount' => 'accountname',
		'azurekey' => 'accountkey',
        'wikiId' => 'mywiki'
	);