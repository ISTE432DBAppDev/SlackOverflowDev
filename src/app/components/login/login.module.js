import angular from 'angular';
import LoginComponent from './login.component';
import LoginService from './login.service';
import './login.scss';

const LoginModule = angular
  .module('login', [])
  .service('LoginService', LoginService)
  .component('login', LoginComponent)
  .config(($stateProvider) => {
    'ngInject';
    $stateProvider
      .state('login', {
        url: '/',
        component: 'login'
      });
  })
  .name;

export default LoginModule;
