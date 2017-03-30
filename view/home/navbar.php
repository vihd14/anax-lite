<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");
?>

<nav class="navbar transparent">
    <p></p>
    <a href="<?= $urlHome ?>">HOME</a>
    <a href="<?= $urlAbout ?>">ABOUT</a>
    <a href="<?= $urlReport ?>">REPORT</a>
</nav>
<article>
