<?php

require_once("includes/validation.php");
require_once("includes/helpers.php");
require_once("config/db.inc.php");


if(isset($_GET["id"]))
{
  
    $memberId = $_GET["id"];
  
  
}
else
{
  echo "No user found!";
  exit();
}

$link = mysql_connect(DBHOST, DBUSER, DBPASSWORD);
if (!$link)
{
  die('Not connected : ' . mysql_error());
}
    
    
$db_selected = mysql_select_db(DBNAME, $link);
if (!$db_selected)
{
  
  die ("Database not selected : " . mysql_error());
  header("Location: index.php");
}

$selectMemberQuery = "SELECT * 
                      FROM members
                      WHERE id = '$memberId'";
$member = mysql_query($selectMemberQuery);
if(!$member)
{
  echo 'No user found!';
  exit();
}
$member = GetSqlRows($member);
$member = $member[0];

?>
<div style="direction: ltr">
<?php 

        if( empty($member["avatar"]))
        {
          $member["avatar"] = "images/contact.jpg";
        }
        echo $member["name"] . '<br />
        <img align="right" alt="" src="'. $member["avatar"] . '" style="height: 80px" /><br />
        '. $member["email"] .'<br />
        '. $member["email2"] .'<br />
        '. $member["address"] .'<br />
        '. $member["education"] .'<br />
        '. $member["information"];
        
?>
</div>
