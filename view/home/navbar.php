<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");

?><navbar>
<p></p>
<a href="<?= $urlHome ?>">Home</a> |
<a href="<?= $urlAbout ?>">About</a>
</navbar>
