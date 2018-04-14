import angular from 'angular';
import 'angular-mocks';
import AppModule from '../../../index';

describe('login component controller', () => {
  let $controller;

  beforeEach(() => {
    angular.mock.module(AppModule);

    angular.mock.inject((_$componentController_) => {
      $controller = _$componentController_('login');
    });
  });

  it('should pass this dumby test', () => {
    expect(true).toBeTruthy();
  });
});

