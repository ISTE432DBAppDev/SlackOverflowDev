const LoginComponent = {
  template: require('./login.html'),
  controller: class LoginComponent {
    constructor(LoginService) {
      'ngInject';
      this.LoginService = LoginService;
    }

    $onInit() {
      this.LoginService.hello();
    }
  }
};

export default LoginComponent;
