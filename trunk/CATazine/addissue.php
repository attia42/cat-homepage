<?php

require_once("includes\\validation.php");
require_once("includes\\helpers.php");
require_once("config\\db.inc");


if(SanityCheck($_POST["issueNumber"], "integer", 5) )
{
  $issueNumber = $_POST["issueNumber"];
  $uploaddir = '.\\images\\';
  $uploadfile = $uploaddir . basename($_FILES['img']['name']);


  if (!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) 
  {
    
  }
  
  
}




?>

<div>
<form action="addissue.php" method="post">
        <table >
            <tr>
                <td>
                    Issue number</td>
                <td>
                        
        <input id="Text1" type="text" /></td>
            </tr>
            <tr>
                <td>
                    Image</td>
                <td> 
                <input id="File1" type="file" /></td>
            </tr>
            <tr>
                <td>
                   
                    Info</td>
                <td>
                   
                <textarea id="TextArea1" name="S1" cols="20" rows="1"></textarea></td>
            </tr>
            <tr>
                <td>
                    Release Date</td>
                <td>
        
        <input id="Text2" type="text" /></td>
            </tr>
            <tr>
                <td>
                    &nbsp;</td>
                <td>
        <input id="Submit1" align="right" type="submit" value="submit" /></td>
            </tr>
        </table>
        
        </form>
        </div>