<?php
// Indiquer la page
$page = "casquettes";

// Inclue le fichier commun contenant le haut du code des écrans de UI
include_once('commun/entete.inc.php');
/** @var stdClass $_ */
?>
<main class="page-teeshirts">
    <article class="amorce">
        <h1><?= $_->amorceH1; ?></h1>
    </article>
    <article class="principal">
        <?= $_->enConstruction; ?>
    </article>
</main>
<?php
// Inclue le fichier commun contenant le bas du code des écrans de UI
include_once('commun/p2p.inc.php');
?>