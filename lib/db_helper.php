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
    $db = mysqli_connect($db_hostname,$db_user,$db_password,$db_use) or
      die("Unable to connect to mysql database");

    echo "<br>".$query;
    mysqli_query($db,$query);
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
  // function receive_query($query, $db_hostname, $db_user, $db_password, $db_use)
  // {
  //   $db = mysqli_connect($db_hostname,$db_user,$db_password,$db_use) or
  //     die("Unable to connect to mysql database");
  //
  //   $result = mysqli_query($db_handle,"SELECT * FROM comments");
  //
  //   // if(!$result){
  //   //   printf("Error: %s\n",mysqli_error($db_handle));
  //   //   exit();
  //   // }
  //
  //   // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  //
  //   return result;
  // }
?>
