<?php
include 'DatabaseConnection.class.php';
/**
 * Class: AccountData
 * Date: 4/4/2018
 * Description:
 */

class AccountData {
  private $accountID;
  private $userName;

  /**
   * @return mixed
   */
  public function getAccountID() {
    return $this -> accountID;
  }

  /**
   * @param mixed $accountID
   */
  public function setAccountID($accountID) {
    $this -> accountID = $accountID;
  }

  /**
   * @return mixed
   */
  public function getUserName() {
    return $this -> userName;
  }

  /**
   * @param mixed $userName
   */
  public function setUserName($userName) {
    $this -> userName = $userName;
  }

  private function getDBInfo() {
     try {
       $instance = DatabaseConnection ::getInstance();
       return $conn = $instance -> getConnection();
     } catch (Exception $e) {
       echo $e -> getMessage();
       return null;
     }
  }
  
  public function createAccount($userName, $pwd){
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "createAccountQuery", "INSERT INTO ACCOUNTS (username, password) VALUES ($1, $2)");
      $result = pg_execute($dbconn, "createAccountQuery", array($userName, SHA1($pwd)) );
  return $result;
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
    
  }

  public function loginAccount($userName, $pwd) {
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "loginAccountQuery", "SELECT accountID FROM ACCOUNTS WHERE username=$1 AND password=$2");
      $result = pg_execute($dbconn, "loginAccountQuery", array($userName, SHA1($pwd)) );
      
      $numRows = pg_num_rows($result);
      if ($count == 1) {
        return true;
      } else {
        return false;
      }
  
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
  }
}
