<?php
$navigation = array(
  "#" => "Home",
  "#services" => "Dienstleistungen",
  "#portfolio" => "Portfolio",
  "#aboutus" => "Über uns",
  "#team" => "Team",
  "#contact" => "Kontakt"
);
?>
<nav class="mobile-nav list-group">
  <?php foreach($navigation AS $key => $value): ?>
    <a class="mobile-nav-link list-group-item list-group-item-action" href="<?php echo e($key); ?>">
      <?php echo e($value); ?>
      <?php if($key == "#"): ?>
        <span class="sr-only">(current)</span>
      <?php endif;?>
    </a>
  <?php endforeach; ?>
</nav>
<header class="page-header">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="#">Golden</a>
      <button id="toggle-mobile-nav" class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php foreach($navigation AS $key => $value): ?>
            <a class="nav-item nav-link<?php if($key == "#"): ?> active<?php endif;?>" href="<?php echo e($key); ?>">
              <?php echo e($value); ?>
              <?php if($key == "#"): ?>
                <span class="sr-only">(current)</span>
              <?php endif;?>
            </a>
          <?php endforeach;?> 
        </div>
      </div>
    </nav>
    <div class="jumbotron header-jumbotron text-center d-flex flex-column justify-content-center align-items-center">
      <h2 class="display-6">Herzlich Willkommen!</h2>
      <h1 class="display-5">Wir entwickeln Webseiten</h1>
      <a class="btn btn-primary" href="#services" role="button">Weitere Informationen</a>
    </div>
  </div>
</header>