<?php
include __DIR__.'/server.php';
include __DIR__ .'/Models/Movie.php';
?>
<?php include __DIR__ .'/Views/Header.php';?>
<main class="container">
    <div class="row">
        <?php foreach($movies as $item) {
            $item->printCard($item->getCard());
        } ?>
    </div>

</main>
<?php include __DIR__ .'/Views/Footer.php';?>