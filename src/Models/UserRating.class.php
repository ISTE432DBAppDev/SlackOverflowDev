<?php
/**
 * Class: UserRating
 * Date: 4/7/2018
 * Description:
 */

class UserRating {
  /**
   * @var
   */
  private $accountID;
  /**
   * @var
   */
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
}
