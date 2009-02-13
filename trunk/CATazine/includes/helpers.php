<?php
  function GetSqlRows($queryResult)
  {
    $rtrnResult = array();
    while($thisRow = mysql_fetch_row($queryResult))
    {
      $rtrnResult[] = $thisRow;
    }
    return $rtrnResult;
  }
?>