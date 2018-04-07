<?php
/**
 * Class: Account
 * Date: 4/7/2018
 * Description:
 */

class Account {
  /**
   * @var
   */
  private $accountID;
  /**
   * @var
   */
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
}
