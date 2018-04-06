<?php
require_once 'dbconfig.php';

/**
 * Class: DatabaseConnection
 * Date: 4/6/2018
 * Description:
 */
class DatabaseConnection {
  public function __construct() {
    $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

    try {
      // create a PostgreSQL database connection
      $conn = new PDO($dsn);

      // display a message if connected to the PostgreSQL successfully
      if ($conn) {
        echo "Connected to the <strong>$db</strong> database successfully!";
      }
    }catch
    (PDOException $e){
      // report error message
      echo $e -> getMessage();
    }
  }
}
