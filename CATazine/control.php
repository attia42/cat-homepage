<?php

///////////////////////////////////////////////////////////////////////
// Page authors:
//		Mohamed Attia	>	snap4422@gmail.com
//		Osama Gamal		>	osama.gma@gmail.com
//
// 15/3/2009
// Description: This function will control the content according to the variable $_REQUEST['page']
///////////////////////////////////////////////////////////////////////

function ContentController() {

	///////////////////////////////////////////////////////////////////
	// Main Pages
	///////////////////////////////////////////////////////////////////
	if ($_REQUEST['page'] == "participate") {
		echo "<h2 class='cont_title'>Participate Page!</h3>";
		// require_once("participate.php");
	}

	else if ($_REQUEST['page'] == "contact") {
		require_once("contact.php");
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

	else if ($_REQUEST['page'] == "newmember") {
		echo "<h2 class='cont_title'>Add new member</h3>";
		require_once("newmember_form.html");
	}
	
	///////////////////////////////////////////////////////////////////////////////
	// Messages
	///////////////////////////////////////////////////////////////////////////////
	else if ($_REQUEST['page'] == "newmember_error") {
		echo "<h2 class='cont_title'>Add new member</h3>";
		echo "<br /><span class='cont_title' style='color: red;'>Check your inputs please!</span>";
		require_once("newmember_form.html");
	}

	else if ($_REQUEST['page'] == "mail_sent") {
		// If contactus mail was sent successfully
		echo "<span class='cont_title'>Thanks you for conatacting us. Your mail have been sent successfully!</span>";
	}

	else if ($_REQUEST['page'] == "mail_fail") {
		// If contact us mail wasn't sent coz the server has problems
		echo "<span class='cont_title' style='color: red;'>Seems that there is a problem with the mail server! You may contact us at <a href='mailto:catazine@catreloaded.net'>catazine@catreloaded.net</a>. Thanks for contacting us.</span>";
	}
	
	else if ($_REQUEST['page'] == "mail_not_valid") {
		// If invalid inputs was used
		echo "<span class='cont_title' style='color: red;'>Please enter valid inputs. If you have problems with the contact us form, you may contact us at <a href='mailto:catazine@catreloaded.net'>catazine@catreloaded.net</a>.</span>";
		require_once("contact.php");
	}


	else if ($_REQUEST['page'] == "feedback_error"){
		// Error in Feedback Page
		echo "<span class='cont_title' style='color: red;'>Check your inputs please!</span>";
		require("feedback_form.html");
	}

	else if ($_REQUEST['page'] == "feedback_success"){
		// Error in Feedback Page
		echo "<span class='cont_title'>Thank you for sharing your opinion, hope you like the next CataZine issues more (isA)!</span>";
	}	

	else if ($_REQUEST['page'] == "viewmembers") {
		echo "<h2 class='cont_title'>Issue members</h3>";
		require_once("viewmembers.php");
	}

	else if ($_REQUEST['page'] == "member") {
		echo "<h2 class='cont_title'>View member detail</h3>";
		require_once("member.php");
	}

	else {
		// Default Page
		require_once("feedback.php");
		$fromIndex = "fromIndex";
	}
}

?>