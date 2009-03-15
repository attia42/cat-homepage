<?php
require_once("includes/validation.php");
require_once("includes/helpers.php");
require_once("config/db.inc.php");


$issueNumber = 0;
if(isset($_GET["issue"]))
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
if($issueNumber == 0)
{
  $issueNumber = max($issues);
  $issueNumber = $issueNumber["id"];
  
}

if($issueNumber > 0)
{
  $authorsQuery   = "SELECT members.id, members.name, topics.name AS topicName, topics.issueId, topics.contentLink  
                     FROM members
                     JOIN topics 
                     ON members.id = topics.memberId
                     WHERE topics.issueId = $issueNumber
                     ORDER BY members.name";
                    
  $managersQuery  = "SELECT members.id, members.name, positions.positionName
                     FROM members
                     INNER JOIN issuemanagment
                     ON members.id = issuemanagment.memberId
                     INNER JOIN  positions
                     ON issuemanagment.positionID = positions.ID
                     WHERE issuemanagment.issueId = $issueNumber
                     ORDER BY positions.id";
}

$managers = mysql_query($managersQuery);
$managers = GetSqlRows($managers);
$authors  = mysql_query($authorsQuery);
$authors  = GetSqlRows($authors); 

if(!$authors && !$managers)
{
  die ('No such data!');
  
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
<h3 style="text-align: center; color:rgb(239, 70, 154);">Managers</h3>
    <table cellpadding="0" cellspacing="0" style="width:97%;">
        <tr style="border-bottom: 1px #333 dashed;">
            <td style="border-bottom: 1px #333 solid; text-align:center; border-top: 1px #333 dashed; width:50%;">
                <b>Position</b></td>
            <td style="border-bottom: 1px #333 solid; text-align:center; border-top: 1px #333 dashed; ">
                <b>Name</b></td>
        </tr>
        
        <?php
          for($i = 0; $i < count($managers); $i++)
          {
            echo "<tr><td  style='border-bottom: 1px #333 dashed;'>
                {$managers[$i]['positionName']}</td>";
            echo "<td  style='border-bottom: 1px #333 dashed;'>
              <a href=\"index.php?page=member&id={$managers[$i]['id']}\"> {$managers[$i]['name']}</a>";
              
            while($managers[$i+1]["positionName"] == $managers[$i]['positionName'])
            {
               
              
               $i++;
               echo "<br /><a href=\"index.php?page=member&id={$managers[$i]['id']}\"> {$managers[$i]['name']}</a>";
               
            }
           echo "</td></tr>";
          }
        ?>
          
    </table>
<br />
<br />
<br />
<h3 style="text-align: center; color:rgb(239, 70, 154);">Authors</h3><table cellpadding="0" cellspacing="0" style="width:97%;">
        <tr>
            <td style="border-bottom: 1px #333 solid; text-align:center; border-top: 1px #333 dashed; width:50%;">
                <b>Name</b></td>
            <td style="border-bottom: 1px #333 solid; text-align:center; border-top: 1px #333 dashed;">
                <b>Topics</b></td>
        </tr>
        <?php
          for($i = 0; $i < count($authors); $i++)
          {
            echo "<tr><td  style='border-bottom: 1px #333 dashed;'>
                <a href=\"index.php?page=member&id={$authors[$i]['id']}\">{$authors[$i]['name']}</a></td>";
            echo "<td  style='border-bottom: 1px #333 dashed;'>
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


<div style="width:70%; margin-left:auto; margin-right: auto;">
<form action="index.php" method="get">
Select an issue : &nbsp &nbsp &nbsp<select id="Select1" name="issue">
    <?php
    foreach($issues as $id)
    {
      echo "<option>{$id['id']}</option>";
    }
    
    ?>
</select> &nbsp &nbsp &nbsp<input id="Submit1" type="submit" value="View team" style="" />
<input name="page" value="viewmembers" style="visibility: hidden;"/>
</form>
    
</div>


</body>

</html>
