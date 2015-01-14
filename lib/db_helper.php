<?php
/**
* The purpose of this script is to act as an interface to a mysql server
*/

  /**
  * Sends query to the mysql database
  * @param string $query Mysql desired query string
  * @param string $db_hostname Mysql hostname to connect to
  * @param string $db_user Mysql hostname username
  * @param string $db_password Mysql hostname username's password
  * @param string $db_use Desired mysql database for use
  * @author Delvison Castillo delvisoncastillo@gmail.com
  */
  function send_query($query, $db_hostname, $db_user, $db_password, $db_use)
  {
    $db = new mysqli($db_hostname,$db_user,$db_password,$db_use);

    if ($db->connect_errno > 0){
      die('Unable to connect to database');
      return FALSE;
      // TODO: Redirect appropriately
    }

    if ( !$result = $db->query($query) ){
      die('The was an error with the query '. $query);
      return FALSE;
      // TODO: Redirect appropriately
    } else {
      return TRUE;
    }
  }

  /**
  * Receives results for a query to the mysql database
  * @param string $query Mysql desired query string
  * @param string $db_hostname Mysql hostname to connect to
  * @param string $db_user Mysql hostname username
  * @param string $db_password Mysql hostname username's password
  * @param string $db_use Desired mysql database for use
  * @author Delvison Castillo delvisoncastillo@gmail.com
  */
  function receive_query($query, $db_hostname, $db_user, $db_password, $db_use)
  {
    $db = new mysqli($db_hostname,$db_user,$db_password,$db_use);

    if ($db->connect_errno > 0){
      die('Unable to connect to database');
      // TODO: Redirect appropriately
    }

    if ( !$result = $db->query($query) ){
      die('The was an error with the query '. $query);
      // TODO: Redirect appropriately
    } else {
      return $result;
    }
  }
?>
