<?php

/*
Page authors: Osama Gamal, Mohamed Attia
Mails: osama.gma@gmail.com, snap4422@gmail.com
*/

//This function will control the content according to the variable $_REQUEST['page']
function ContentController() {
	if ($_REQUEST['page'] == "participate") {
		echo "<h2 class='cont_title'>Participate Page!</h3>";
		// require_once("participate.php");
	}
	else if ($_REQUEST['page'] == "contact") {
		echo "<h2 class='cont_title'>Contact Us Page!</h3>";
		//	require_once("contact.php");
	}
	else if ($_REQUEST['page'] == "archive") {
		echo "<h2 class='cont_title'>Archive Page!</h3>";
		//	require_once("archive.php");
	}
	else if ($_REQUEST['page'] == "team") {
		echo "<h2 class='cont_title'>CATazine Team Page!</h3>";
		//	require_once("team.php");
	}
	else if ($_REQUEST['page'] == "about") {
		echo "<h2 class='cont_title'>About CATazine Page!</h3>";
		//	require_once("about.php");
	}
	else if ($_REQUEST['page'] == "mailed") {
		echo "<h6 class='cont_title' style='text-decoration: blink;'>Thanks you for conatacting us. Your mail have been sent!</h6>";
	}
	else {
		// Default Page
		require_once("feedback.php");
	}
}
?>