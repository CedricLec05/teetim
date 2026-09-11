<?php
// Indiquer la page
$page = "accueil";

// Inclue le fichier commun contenant le haut du code des écrans de UI
include_once('commun/entete.inc.php');

/** @var stdClass $_ */
?>
<main class="page-accueil">
  <article class="amorce">
    <h1><?= $_->amorceH1; ?></h1>
    <h2><?= $_->amorceH2; ?></h2>
    <h4><?= $_->amorceH4; ?></h4>
  </article>
  <article class="principal">
    <p>
      <?= $_->para1; ?>
    </p>
    <p>
      <?= $_->para2; ?>
    </p>
  </article>
</main>
<?php
// Inclue le fichier commun contenant le bas du code des écrans de UI
include_once('commun/p2p.inc.php');
?>