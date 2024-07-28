<?php
  class Pages extends Controller {
    public function __construct(){
    }

    public function index(){

      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SHARE POSTS',
        'discription' => 'simple social network built on the zain MVC php framework'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About',
        'discription' => 'app to share posts with other users'

      ];

      $this->view('pages/about' ,$data);
    }
  }