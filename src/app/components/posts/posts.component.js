const PostsComponent = {
  template: require('./posts.html'),
  controller: class PostsComponent {
    constructor(PostsService) {
      'ngInject';
      this.PostsService = PostsService;
    }

    $onInit() {
      this.PostsService.hello();
    }
  }
};

export default PostsComponent;
