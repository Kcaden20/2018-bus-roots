<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="left wrap">

      <header>
        <h1><?= $page->title() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
      </header>


    </div>
<div class="overlap">
<?php foreach($page->children()->visible() as $feature): ?>
      <section class="right team wrap wide">

        <h1><?= $feature->title()->html() ?></h1>
        <div class="intro text">
          <?= $feature->about()->kirbytext() ?>
        </div>
        <div class="text">
        <?= $feature->text()->kirbytext() ?>
      </div>

        <ul class="team-list grid gutter-1">
          <?php foreach($feature->children()->visible() as $member): ?>
            <li class="team-item column">
            <?php if($image = $member->image()): ?>
  <figure class="team-portrait">
    <img src="<?= $image->url() ?>" alt="Portrait of <?= $member->title()->html() ?> " />
  </figure>
<?php endif ?>

              <div class="team-info">
                <h3 class="team-name"><?= $member->title()->html() ?></h3>
                <div class="team-about text">
                  <?= $member->about()->kirbytext() ?>
                </div>
              </div>
            </li>
          <?php endforeach ?>
        </ul>

      </section>
<?php endforeach ?>
</div>

  </main>

<?php snippet('footer') ?>