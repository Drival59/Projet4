<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

function indexAdmin()
{

  require('view/backend/indexAdminView.php');
}

function logout()
{
  session_unset();
  header('Location: index.php');
}
