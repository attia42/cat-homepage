<?php
require_once("includes\\validation.php");
require_once("includes\\helpers.php");
require_once("config\\db.inc");


$issueNumber = 0;
if(isset($_GET["issue"]) && CheckSanity($_GET["issue"], "integer", 5))
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
$issues   = mysql_query("SELECT id FROM issues");
$issues   = GetSqlRows($issues);
$issueNumber = max($issues);
$issueNumber = $issueNumber["id"];

if($issueNumber > 0)
{
  $authorsQuery   = "SELECT members.id, members.name, topics.name AS topicName, topics.issueId, topics.contentLink  
                     FROM members
                     JOIN topics 
                     ON members.id = topics.memberId
                     WHERE topics.issueId = $issueNumber
                     ORDER BY members.name";
                    
  $managersQuery  = "SELECT members.id, members.name, issuemanagment.position
                     FROM members
                     JOIN issuemanagment
                     ON members.id = issuemanagment.memberId
                     WHERE issuemanagment.issueId = $issueNumber
                     ORDER BY members.name";
}

$managers = mysql_query($managersQuery);
$managers = GetSqlRows($managers);
$authors  = mysql_query($authorsQuery);
$authors  = GetSqlRows($authors); 




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
        </tr>
        
        <?php
          for($i = 0; $i < count($managers); $i++)
          {
            echo "<tr><td>
                {$managers[$i]['name']}</td>";
            echo "<td>
               {$managers[$i]['position']}";
              
            while($managers[$i+1]["name"] == $managers[$i]['name'])
            {
               echo $i;
              
               $i++;
               echo "<br />{$managers[$i]['position']}";
               
            }
           echo "</td></tr>";
          }
        ?>
          
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
        </tr>
        <?php
          for($i = 0; $i < count($authors); $i++)
          {
            echo "<tr><td>
                {$authors[$i]['name']}</td>";
            echo "<td>
               {$authors[$i]['topicName']}";
            while($authors[$i+1]["name"] == $authors[$i]['name'])
            {
              
               $i++;
               echo "<br />{$authors[$i]['topicName']}";
               
            }
            echo "</td></tr>";
          }
        ?>
        </tr>
    </table>
    
    <br />
</div>


<div style="width:70%;">
<form action="index.php?page=viewmembers" method="get">
Select an issue : &nbsp &nbsp &nbsp<select id="Select1" name="issue">
    <?php
    foreach($issues as $id)
    {
      echo "<option>{$id['id']}</option>";
    }
    
    ?>
</select> &nbsp &nbsp &nbsp<input id="Submit1" type="submit" value="View team" style="" />
</form>
    
</div>


</body>

</html>
