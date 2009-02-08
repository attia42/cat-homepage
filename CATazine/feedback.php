<?php 
include('includes\\validation.php');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['feed']) && isset($_POST['help']))
{
	if( !SanityCheck($_POST['name'], "string", 50) || !CheckEmail($_POST['email']) || !SanityCheck($_POST['feed'], 'string', 5000))
	{
		// echo "Check your inputs please";
		$_REQUEST['page'] = "feedback_error";
		include("index.php");
	}
	else
	{
		require("config\\db.inc");
		$link = mysql_connect(DBHOST, DBUSER, DBPASSWORD);
    if (!$link)
    {
    	die('Not connected : ' . mysql_error());
    }
    
    
    $db_selected = mysql_select_db(DBNAME, $link);
    if (!$db_selected)
    {
    	die ("Database not selected : " . mysql_error());
    }
    $name = CleanForSql($_POST['name']);
    $email = CleanForSql($_POST['email']);
    $feed = CleanForSql($_POST['feed']);
    $help = CleanForSql($_POST['help']);
    $time = date('Y-m-d H:i:s', time());
    $query = "INSERT INTO users (name, email, comment, contrib, date) VALUES('$name', '$email', '$feed', '$help', '$time')";
		if(!mysql_query($query))
		{
			 echo 'Query failed '.mysql_error();
       exit();
		}
    else
  	{
  		
  		$_REQUEST['page'] = "feedback_success";
  		include("index.php");
  	}
	}
}
else
{
	require("feedback_form.html");
}





?>