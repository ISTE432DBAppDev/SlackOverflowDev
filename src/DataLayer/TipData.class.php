<?php
/**
 * Class: TipData
 * Date: 4/4/2018
 * Description:
 */

class TipData {
  private $tipID;
  private $accountID;
  private $language;
  private $description;
  private $rating;

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
  public function getLanguage() {
    return $this -> language;
  }

  /**
   * @param mixed $language
   */
  public function setLanguage($language) {
    $this -> language = $language;
  }

  /**
   * @return mixed
   */
  public function getDescription() {
    return $this -> description;
  }

  /**
   * @param mixed $description
   */
  public function setDescription($description) {
    $this -> description = $description;
  }

  /**
   * @return mixed
   */
  public function getRating() {
    return $this -> rating;
  }

  /**
   * @param mixed $rating
   */
  public function setRating($rating) {
    $this -> rating = $rating;
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
  
  public function createTip($accountID, $language, $description) {
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "createTipQuery", "INSERT INTO TIPS (accountID, langauge, description, rating) VALUES ($1, $2, $3, 0)");
      $result = pg_execute($dbconn, "createTipQuery", array($accountID, $language, $description );
  return $result;
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
  }

  public function getAllTips(){
    try {
      $dbconn = $this -> getDBInfo();
      $result = pg_prepare($dbconn, "getAllTipsQuery", "SELECT * FROM TIPS WHERE accountID = $1 AND tipID = $2");
      $result = pg_execute($dbconn, "getAllTipsQuery", array($accountID, $tipID );
  return $result;
    } catch (Exception $e)  {
    echo $e;
    return null;
    }
  }

  public function upvoteTip($tipID){
    /*
     * Rating button will active UserRating Check. Button should be disabled from doing a completed action. If clicked update $rating in Tip. UserRating table should be updated previously in its class.
     */
    //Function only called if UserRating
    //check that accountID passed is not the same accountID stored on the tip
    return null;
  }

  public function downvoteTip($tipID){
    /*
     * Rating button will active UserRating Check. Button should be disabled from doing a completed action. If clicked update $rating in Tip. UserRating table should be updated previously in its class.
     */
    //Function only called if UserRating
    //check that accountID passed is not the same accountID stored on the tip
    return null;
  }
}
