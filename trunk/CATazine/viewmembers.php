<?php
require_once("includes\\validation.php");
require_once("includes\\helpers.php");
require_once("config\\db.inc");


$issueNumber = 0;
if(isset($_GET["issue"]) && CheckSanity($_GET["issue"]), "integer", 5)
{
  $issueNumber = $_GET["issue"]; 
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
if($issueNumber == 0)
{
  $authorsQuery = "SELECT members.id, members.name, topics.name AS topicName, topics.issueId, topics.contentLink  
            FROM members 
            JOIN topics 
            ON members.id = topics.memberId
            WHERE topics.issueId = MAX(topics.issueId)
            ORDER BY members.name";
  $managersQuery = "SELECT members.id, members.name, issuemanagment.position
                    FROM members
                    JOIN issuemanagment
                    ON members.id, issuemanagment.memberId
                    WHERE issuemanagment.issueId = MAX(issuemanagment.issueId)
                    ORDER BY members.name";
  
}
else if($issueNumber > 0)
{
  $authorsQuery = "SELECT members.id, members.name, topics.name AS topicName, topics.issueId, topics.contentLink  
                   FROM members
                   JOIN topics 
                   ON members.id = topics.memberId
                   WHERE topics.issueId = '$issueNumber'
                   ORDER BY members.name";
                   
  $managersQuery = "SELECT members.id, members.name, issuemanagment.position
                    FROM members
                    JOIN issuemanagment
                    ON members.id, issuemanagment.memberId
                    WHERE issuemanagment.issueId = '$issueNumber'
                    ORDER BY members.name";
}

$managers = mysql_query($managersQuery);
$managers = GetSqlRows($managers);
$authors = mysql_query($authorsQuery);
$authors = GetSqlRows($authors);

if(!$authors || !$managers)
{
  die ('Query failed '.mysql_error());
  exit();
}





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>
</head>
<body>
<br />
<br />
    <div>
Managers
    <table style="width:70%;">
        <tr>
            <td>
                Name</td>
            <td>
                Position</td>
        
        <?php
          for(int $i = 0; $i < count($managers); $i++)
          {
            echo "<td>
                {$managers[$i]['name']}</td>";
            echo "<td>
               {$managers[$i]['position']}";
            while($managers[$i+1]["name"] == $managers[$i]['name'])
            {
              
               $i++;
               echo "<br />{$managers[$i]['position']}";
               
            }
            echo "</td>";
          }
        ?>
          </tr>
    </table>
<br />
<br />
<br />
Authors<table style="width:70%;">
        <tr>
            <td>
                Name</td>
            <td>
                Topics</td>
        <?php
          for(int $i = 0; $i < count($authors); $i++)
          {
            echo "<td>
                {$authors[$i]['name']}</td>";
            echo "<td>
               {$authors[$i]['position']}";
            while($authors[$i+1]["name"] == $authors[$i]['name'])
            {
              
               $i++;
               echo "<br />{$authors[$i]['topicName']}";
               
            }
            echo "</td>";
          }
        ?>
        </tr>
    </table>
    
    <br />
</div>


<div style="width:70%;">
<form action="" method="get">
Select an issue : &nbsp &nbsp &nbsp<select id="Select1">
    <option></option>
</select> &nbsp &nbsp &nbsp<input id="Submit1" type="submit" value="View team" style="" />
</form>
    
</div>


</body>

</html>
