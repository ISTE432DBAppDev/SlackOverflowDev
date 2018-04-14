const LanguageComponent = {
  template: require('./language.html'),
  controller: class LanguageComponent {
    constructor(LanguageService) {
      'ngInject';
      this.LanguageService = LanguageService;
    }

    $onInit() {
      this.LanguageService.hello();
    }
  }
};

export default LanguageComponent;
