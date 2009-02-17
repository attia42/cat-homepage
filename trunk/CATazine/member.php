<?php

require_once("includes\\validation.php");
require_once("includes\\helpers.php");
require_once("config\\db.inc");


if(isset($_GET["id"]))
{
  if(SanityCheck($_GET["id"], "integer", 5))
  {
    $memberId = $_GET["id"];
  }
  else
  {
    header("Location: index.php");
  }
}
else
{
  header("Location: index.php");
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
}

$selectMemberQuery = "SELECT * 
                      FROM members
                      WHERE id = $memberId";
$member = mysql_query($selectMemberQuery);
if(!$member)
{
  echo 'Query failed '.mysql_error();
  exit();
}
$member = GetSqlRows();
$member = $member[0];

?>
<div style="direction: ltr">
<?php 
if( empty($member["avatar"]))
{
  $member["avatar"] == "..\\images\\contact.jpg";
}
        echo $member["name"] & '<br />
        <img align="right" alt="" src="'& $member["email"] & '" style="height: 16px" /><br />
        '& $member["email"] &'<br />
        '& $member["email2"] &'<br />
        '& $member["address"] &'<br />
        '& $member["education"] &'<br />
        '& $member["information"];
        
?>
</div>
