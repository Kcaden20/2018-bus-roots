<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
<!--
        ___           ___
     /__/|         /  /\
    |  |:|        /  /:/_
    |  |:|       /  /:/ /\
  __|  |:|      /  /:/ /:/_
 /__/\_|:|____ /__/:/ /:/ /\
 \  \:\/:::::/ \  \:\/:/ /:/
  \  \::/~~~~   \  \::/ /:/
   \  \:\        \  \:\/:/
    \  \:\        \  \::/
     \__\/         \__\/
                               ___
      ___        ___          /__/\
     /__/\      /  /\         \  \:\
     \  \:\    /  /:/          \  \:\
      \  \:\  /__/::\      _____\__\:\
  ___  \__\:\ \__\/\:\__  /__/::::::::\
 /__/\ |  |:|    \  \:\/\ \  \:\~~\~~\/
 \  \:\|  |:|     \__\::/  \  \:\  ~~~
  \  \:\__|:|     /__/:/    \  \:\
   \__\::::/      \__\/      \  \:\
       ~~~~                   \__\/











      ___           ___
     /  /\         /  /\
    /  /:/        /  /::\
   /  /:/        /  /:/\:\
  /  /:/  ___   /  /:/~/::\
 /__/:/  /  /\ /__/:/ /:/\:\
 \  \:\ /  /:/ \  \:\/:/__\/
  \  \:\  /:/   \  \::/
   \  \:\/:/     \  \:\
    \  \::/       \  \:\
     \__\/         \__\/
     _____          ___
    /  /::\        /  /\
   /  /:/\:\      /  /:/_
  /  /:/  \:\    /  /:/ /\
 /__/:/ \__\:|  /  /:/ /:/_
 \  \:\ /  /:/ /__/:/ /:/ /\
  \  \:\  /:/  \  \:\/:/ /:/
   \  \:\/:/    \  \::/ /:/
    \  \::/      \  \:\/:/
     \__\/        \  \::/
                   \__\/
      ___           ___
     /__/\         /  /\
     \  \:\       /  /::\
      \  \:\     /  /:/\:\
  _____\__\:\   /  /:/~/::\
 /__/::::::::\ /__/:/ /:/\:\
 \  \:\~~\~~\/ \  \:\/:/__\/
  \  \:\  ~~~   \  \::/
   \  \:\        \  \:\
    \  \:\        \  \:\
     \__\/         \__\/
-->

  <meta name="keywords" content="<?= $site->tags()->html() ?>">
  <meta name="author" content="<?= $site->author()->html() ?>">
  <?php if($site->favicon()->isNotEmpty()): ?>
  <link rel="shortcut icon" href="<?= $site->image($site->favicon())->url() ?>" >

<?php endif ?>
  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/menu.css') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?= js('assets/js/menu.js')?>
</head>
<body class="body">

<?php if($page->isHomePage()): ?>
  <div class="preloader">
    <div class="titlewrap">
    <div class="absolute">
      <h1 class="title">Say Hello To...</h1>
    </div>
    </div>
  </div>
	<div class="page-menu">
		<div class="menu-list">
          <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
		</div>
		<div class="menu-icon"></div>

	</div>



<?php else: ?>

	<div class="page-menu">
		<div class="menu-list">
          <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
		</div>
		<div class="menu-icon"></div>

	</div>

<?php endif ?>



