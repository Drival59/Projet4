<?php

require_once('model/ChapterManager.php');


function index()
{
  $chapterManager = new ChapterManager();
  $lastChapters = $chapterManager->getLastChapters(3);

  require('view/frontend/indexView.php');
}
function listChapters()
{
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->getChapters();

  require('view/frontend/listChaptersView.php');
}
