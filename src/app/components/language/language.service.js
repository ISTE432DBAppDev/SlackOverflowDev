export default class LanuageService {
  constructor($log) {
    'ngInject';

    this.$log = $log;
  }

  hello() {
    console.log('This is the language component!');
  }
}
