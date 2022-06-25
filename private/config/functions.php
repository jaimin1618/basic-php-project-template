<?php 
define('PROJECT_NAME', 'fullstack-project-template'); // REQUIRED FOR USE (do NOT ignore naming project)

function url () {
	return sprintf(
		"%s://%s/",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off'?'https':'http',
		$_SERVER['SERVER_NAME']
	);
}

function app_url ($url='/') {
	echo url() . PROJECT_NAME . $url;
}


	/*
	THIS public_url IS USED FOR ADDING links and scripts: <link type="txt/css" href="<?php echo in_public_url('styles/...'); ?>" 
	*/
function in_public_url ($url='') {
	return app_url() . 'public/' . $url;
}

function in_private_url ($url='') {
	return app_url() . 'private/' . $url;
}


	/* 
	THIS public_file IS USED FOR include() and required() inlude_once(in_public_file('inc/header.php')); 
	*/
function app_folder ($url='') {
	$project_name = PROJECT_NAME;
	return $_SERVER['DOCUMENT_ROOT'] . "/{$project_name}/" . $url;
}

function in_public_folder ($url='') {
	return app_folder('public/') . $url;
}

function in_private_folder ($url='') {
	return app_folder('private/') . $url;
}

function filter_string ($string) {
	$string = trim($string);
	$string = htmlspecialchars($string);
	$string = stripslashes($string);
	return $string;
	/*
	Don't forget $sonn->escape_string(input);
	You also have filter_var(input, CONSTANTS);
	*/
}


?>