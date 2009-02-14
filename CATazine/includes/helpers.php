<?php
  function GetSqlRows($queryResult)
  {
    $rtrnResult = array();
    while($thisRow =mysql_fetch_assoc($queryResult))
    {
      $rtrnResult[] = $thisRow;
    }
    return $rtrnResult;
  }
?>