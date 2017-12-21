<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

function indexAdmin()
{
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->getChapters();
  $chapters2 = $chapterManager->getChapters();
  require('view/backend/indexAdminView.php');
}

function logout()
{
  session_unset();
  header('Location: index.php');
}

function addChapter($title, $content, $imgChapter)
{
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->createChapter($title, $content, $imgChapter);
  require('view/backend/addChapterView.php');
}

function createChapter()
{
  require('view/backend/addChapterView.php');
}
