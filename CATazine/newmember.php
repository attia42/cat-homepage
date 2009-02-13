<?php

require_once("includes\\validation.php");
require("config\\db.inc");

if(isset($_POST["name"]) && isset($_POST["email"]))
{

  $name = $_POST["name"];
  $email = $_POST["email"];
  
  if(CheckEmail($email) && !empty($name))
  {
    $email2 = $_POST["email2"];
    $address = $_POST["address"];
    $education = $_POST["education"];
    $information = $_POST["information"];
    if(!empty($email2) && !CheckEmail($email2))
    {
      $_REQUEST['page'] = "newmember_error";
      include("index.php");
    }
    else
    {
      $name = CleanForSql($name);
      $email = CleanForSql($email);
      $email2 = CleanForSql($email2);
      $address = CleanForSql($address);
      $education = CleanForSql($education);
      $information = CleanForSql($information);
    
    
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
      
      $query = "INSERT INTO members (name, email, email2, address, education, information) VALUES('$name', '$email', '$email2', '$address', '$education', '$information')";
      if(!mysql_query($query))
      {
        echo 'Query failed '.mysql_error();
        exit();
      }
      
      $_POST = array();
      $_REQUEST['page'] = "newmember";
      include("index.php");
    }
  }
  else
  {
     $_REQUEST['page'] = "newmember_error";
     include("index.php");
  }
}
else
{
	require("newmember_form.html");
}




?>