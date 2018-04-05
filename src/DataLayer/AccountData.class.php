<?php
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



  public function createAccount($userName, $pwd){
    return null;
  }

  public function loginAccount($userName, $pwd) {
    return null;
  }

  public function logoutAccount(){
    return null;
  }
}
