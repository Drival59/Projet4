<?php

require_once('model/PostManager.php');


function index()
{
  $postManager = new PostManager();
  $lastPosts = $postManager->getLastPosts(3);
  
  require('view/frontend/home.php');
}
function listPosts()
{
  $postManager = new PostManager();
  $posts = $postManager->getPosts();

  require('view/frontend/listPostsView.php');
}
