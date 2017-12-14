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
  $chapters = $chapterManager->getChapters(0,1);
  $chaptersToLoad =$chapterManager->getNbChaptersToLoad();
  $countChapters = $chapterManager->getCountChapters();
  require('view/frontend/listChaptersView.php');
}

function chapter($id)
{
  $chapterManager = new ChapterManager();
  $chapter = $chapterManager->getChapter($id);
  require('view/frontend/chapterView.php');
}

function contact()
{
  require('view/frontend/contactView.php');
}
