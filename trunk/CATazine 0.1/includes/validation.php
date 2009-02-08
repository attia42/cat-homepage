<?php
function CheckEmail($email){
  return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}



function CleanForSql($string)
{
	 $string = mysql_real_escape_string($string);
	 $string = htmlentities($string);
	return $string;
}

/**

    * This function can be used to check the sanity of variables
    *
    * @access private
    *
    * @param string $type  The type of variable can be bool, float, numeric, string, array, or object
    * @param string $string The variable name you would like to check
    * @param string $length The maximum length of the variable
    *
    * return bool
    * I got this Source from : phpro.org
    */

  function SanityCheck($string, $type, $length){

  // assign the type
  $type = 'is_'.$type;

  if(!$type($string))
    {
    return FALSE;
    }
  // now we see if there is anything in the string
  elseif(empty($string))
    {
    return FALSE;
    }
  // then we check how long the string is
  elseif(strlen($string) > $length)
    {
    return FALSE;
    }
  else
    {
    // if all is well, we return TRUE
    return TRUE;
    }
}
?>