<?php



/*

Page authors: Osama Gamal, Mohamed Attia

Mails: osama.gma@gmail.com, snap4422@gmail.com

*/



//This function will control the content according to the variable $_REQUEST['page']

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

		echo "<span class='cont_title'>Thanks you for conatacting us. Your mail have been sent!</span>";

	}

	else if ($_REQUEST['page'] == "mail_fail") {

		echo "<span class='cont_title' style='color: red;'>Please Enter Valid Inputs. Seems that there is a problem with the mail server! You may contact us at <a href='mailto:catazine@catreloaded.net'>catazine@catreloaded.net</a>. Thanks for contacting us.</span>";

	}
	
	else if ($_REQUEST['page'] == "mail_not_valid") {

		echo "<span class='cont_title' style='color: red;'>Please Enter Valid Inputs. If you have problems with the contact us form, you may contact us at <a href='mailto:catazine@catreloaded.net'>catazine@catreloaded.net</a>.</span>";
		
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