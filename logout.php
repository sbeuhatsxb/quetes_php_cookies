<?php
session_destroy();
@$cookies_type_and_qty=[];
setcookie("panier", serialize($cookies_type_and_qty), time() + (86400 * 30), "/");
header("Location: index.php");
 ?>
