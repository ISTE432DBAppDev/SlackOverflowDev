<?php
/**
 * Class: UserRating
 * Date: 4/4/2018
 * Description:
 */

class UserRating {
  private $accountID;
  private $tipID;

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
  public function getTipID() {
    return $this -> tipID;
  }

  /**
   * @param mixed $tipID
   */
  public function setTipID($tipID) {
    $this -> tipID = $tipID;
  }

  public function createUserRating($accountID, $tipID){
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "createUserRatingQuery", "INSERT INTO USERRATING (accountID, tipsID) VALUES ($1, $2)");
      $result = pg_execute($dbconn, "createUserRatingQuery", array($accountID, $tipID );
  return $result;
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
  }

  public function checkUserRating($accountID, $tipID){
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "checkUserRatingQuery", "SELECT FROM USERRATING WHERE accountID = $1 AND tipID = $2");
      $result = pg_execute($dbconn, "checkUserRatingQuery", array($accountID, $tipID );
      
      $numRows = pg_num_rows($result);
      if ($count == 1) {
        return true;
      } else {
        return false;
      }
  return $result;
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
  }
}
