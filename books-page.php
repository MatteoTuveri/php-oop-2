<?php
include __DIR__.'/server.php';
include __DIR__.'/Models/Books.php';
?>
<?php include __DIR__ .'/Views/Header.php';?>
<main class="container">
<div class="row">
        <?php foreach($books as $item) {
            $item->getCard();
        } ?>
    </div>
</main>
<?php include __DIR__ .'/Views/Footer.php';?>