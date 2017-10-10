<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 7:11 PM
 */

if ($_POST) {
    $_SESSION['cardNumber'] = $_POST['cardNumber'];
    $_SESSION['exp'] = $_POST['exp'];
    $_SESSION['CVC'] = $_POST['CVC'];
    header("Location:checkout3.php");
}
?>