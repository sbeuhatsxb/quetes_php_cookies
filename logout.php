<?php
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
@$cookies_type_and_qty=[];
setcookie("panier", serialize($cookies_type_and_qty), time() + (86400 * 30), "/");
header("Location: login.php");
 ?>
