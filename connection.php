<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'DIT1';

    $all=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

    if(!$all){
        die(mysqli_error($all));
    }
?>

