<?php

require_once('model/PostManager.php');


function index()
{
  $postManager = new PostManager();
  $fivePosts = $postManager->getFivePosts();

  require('view/frontend/home.php');
}
function listPosts()
{
  $postManager = new PostManager();
  $posts = $postManager->getPosts();

  require('view/frontend/listPostsView.php');
}
