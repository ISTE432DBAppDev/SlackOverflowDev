<?php
require_once '../DataLayer/AccountData.class.php';
require_once '../Models/Account.class.php';

/**
 * Class: AccountService
 * Date: 4/7/2018
 * Description:
 */

class AccountService {

  /**
   * @var AccountData
   */
  private $dataClass;

  /**
   * AccountService constructor.
   */
  public function __construct() {
    $this -> dataClass = new AccountData();
  }

  /**
   * @return AccountData
   */
  public function getDataClass() {
    return $this -> dataClass;
  }

  /**
   * @param $userName
   * @param $pwd
   * @return null|resource
   * example return:
   *
   */
  public function createAccount($userName, $pwd) {
    $userName = filter_var($userName, FILTER_SANITIZE_STRING);
    $salt = getSalt();
    $hasedPWD = hash('sha256', $pwd.$salt);

    $status = $this -> dataClass -> createAccount($userName, $hashedPWD, $salt);
    if ($status == true) {
      return $status;
    } else {
      return "{'error': 'This account name is already in use.'}";
    }
    
  }

  /**
   * @param $userName
   * @param $pwd
   * @return bool|null
   * example return:
   * "true"
   */
  public function loginAccount($userName, $pwd) {
    $userName = filter_var($userName, FILTER_SANITIZE_STRING);
    $salt = $this -> dataClass -> getAccountSalt($userName);
    $hasedPWD = hash('sha256', $pwd.$salt);

    $status = $this -> dataClass -> loginAccount($userName, $hasedPWD);
    return $status;
  }
  
  /**
   * @return $randString
   * @return string
   */
  public function getSalt() {
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
    $randStringLen = 64;

    $randString = "";
    for ($i = 0; $i < $randStringLen; $i++) {
        $randString = $charset[mt_rand(0, strlen($charset) - 1)];
    }

    return $randString;
  }
}

