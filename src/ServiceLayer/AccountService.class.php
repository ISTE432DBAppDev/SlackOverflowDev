<?php
require_once '';
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
   */
  public function createAccount($userName, $pwd) {
    $userName = filter_var($userName, FILTER_SANITIZE_STRING);
    $pwd = filter_var($pwd, FILTER_SANITIZE_STRING);

    $status = $this -> dataClass ->createAccount($userName, $pwd);
    return $status;
  }

  /**
   * @param $userName
   * @param $pwd
   * @return bool|null
   */
  public function loginAccount($userName, $pwd) {
    $userName = filter_var($userName, FILTER_SANITIZE_STRING);
    $pwd = filter_var($pwd, FILTER_SANITIZE_STRING);

    $status = $this -> dataClass ->loginAccount($userName, $pwd);
    return $status;
  }
}
