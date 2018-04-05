<?php
/**
 * Class: UserRating
 * Date: 4/4/2018
 * Description:
 */

class UserRating {
  private $accountID;
  private $tipID;
  private $status;

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

  /**
   * @return mixed
   */
  public function getStatus() {
    return $this -> status;
  }

  /**
   * @param mixed $status
   */
  public function setStatus($status) {
    $this -> status = $status;
  }

  public function createUserRating($accountID, $tipID, $status){
    return null;
  }

  public function updateUserRating($accountID, $tipID, $status){
    return null;
  }

  public function checkUserRating($accountID, $tipID){
    return null;
  }
}
