<?php

/*
Page author: Osama Gamal
Description: I will put here all functions I will need in the CATSite, These functions will be used to decide the content and the styles will be displayed in the CAT Site
Note: You must require/Include this Page in the top of the index.php page
*/

//This function will control the content according to the variable $_REQUEST['page']
function ContentController() {
	if ($_REQUEST['page'] == "catevents") {
		echo "<h2 class='cont_title'>CAT Events Page!</h3>";
		// require_once("catevents/templates/index.php");
	}
	else if ($_REQUEST['page'] == "about") {
		echo "<h2 class='cont_title'>About Us Page!</h3>";
		//require_once("about.php");
	}
	else if ($_REQUEST['page'] == "contact") {
		echo "<h2 class='cont_title'>Contact Us Page!</h3>";
		//require_once("contact.php");
	}
	else {
		echo "<h2 class='cont_title'>HomePage!</h3>";
		//require_once("home.php");
	}
}

//This function will decide which stylesheet to attach to the index.php page according to the variable $_REQUEST['page']
//Note: You must call this function in the <head> tag
//Warning: If you removed the function call from the index.php the styles of the site won't work.
function StyleController() {
	if ($_REQUEST['page'] == "services") {
		//echo link to this page's stylesheet here
	}
	else if ($_REQUEST['page'] == "catevents") {
		echo '<link href="styles/catevents.css" rel="stylesheet" type="text/css" />';
	}
	else if ($_REQUEST['page'] == "about") {
		//echo link to this page's stylesheet here
	}
	else if ($_REQUEST['page'] == "contact") {
		//echo link to this page's stylesheet here
	}
	else {
		//echo link to this page's stylesheet here
	}
}
?>