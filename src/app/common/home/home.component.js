/* eslint-disable */
const HomeComponent = {
  template: require('./home.html'),
  controllerAs: 'vm',
  controller: class HomeComponent {
    constructor(HomeService, $scope) {
      'ngInject';
      this.HomeService = HomeService;
    }
    $onInit() {
      this.HomeService.hello();
      const vm = this;
      vm.temp = 'test';
      vm.state = 'login';
      
    }
  }
};

export default HomeComponent;
