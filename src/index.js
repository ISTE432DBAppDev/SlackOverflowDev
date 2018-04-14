import angular from 'angular';
import '@uirouter/angularjs';
import 'angular-ui-bootstrap';
import 'font-awesome/css/font-awesome.min.css';
import 'typeface-roboto';
import 'bootstrap/dist/css/bootstrap.min.css';
import './index.scss';

import CommonModule from './app/common/common.module';
import HomeModule from './app/common/home/home.module';
import LanguageModule from './app/components/language/language.module';
import LoginModule from './app/components/login/login.module';
import PostsModule from './app/components/posts/posts.module';
import TipsModule from './app/components/tips/tips.module';
import TopicModule from './app/components/topic/topic.module';

const AppModule = angular
  .module('app', [
    'ui.router',
    'ui.bootstrap',
    CommonModule,
    LoginModule,
    TopicModule,
    TipsModule,
    PostsModule,
    HomeModule,
    LanguageModule
  ])
  .config(($stateProvider, $urlRouterProvider, $locationProvider) => {
    'ngInject';
    $locationProvider.html5Mode(true).hashPrefix('!');
    $urlRouterProvider.otherwise('/');
  })
  .name;

export default AppModule;

