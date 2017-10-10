<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <?php

    $cookies_type_and_qty = unserialize(@$_COOKIE["panier"]);

    foreach ($cookies_type_and_qty as $key => $val) {
        if($key == 46) {
             echo "Vous avez commandé ".$val." Pecan nuts par Penny !<br>";
        } elseif ($key == 36) {
             echo "Vous avez commandé ".$val." Chocolate chips cuisinés par Bernadette !<br>";
        } elseif ($key == 58) {
             echo "Vous avez commandé ".$val." Chocolate cookie cuisinés par Bernadette !<br>";
        } elseif ($key == 32) {
             echo "Vous avez commandé ".$val." M&M's&copy; cookies cuisinés par Penny !<br>";
        }
    }

    ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
