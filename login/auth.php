<?php

global $connection;

if(isset($_SESSION['id_require']) &&
    empty ($_SESSION['id_require'])) {
    header ('Location: ../index.php')
}

?>