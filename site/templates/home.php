<?php snippet('header') ?>
  <div class="titlewrap">
    <div class="absolute">
      <h1 class="title">BUS ROOTS</h1>
    </div>
    <div class="imgwrap">
      <img src="http://busroots.com/assets/images/bus-05.svg">
    </div>
  </div>
  <main class="main" role="main">

      <div class="left wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      </div>

      <div class="right wrap overlap">
               <div class="intro img">
        <img src="<?= $page->image($page->introimg()->value())->url(); ?>">
      </div>
      </div>

<!--
      <div class="center wrap">
               <div class="intro img">
        <h1>More Coming Soon</h1>
      </div>
-->
      </div>
    </header>



  </main>

<?php snippet('footer') ?>
