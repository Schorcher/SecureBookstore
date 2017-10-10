<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/9/17
 * Time: 9:13 PM
 */

require("libs/config.php");
$pageDetails = "UPDATE";
$page_title = 'UPDATE';


include('libs/setup.php');

if (isset($_GET['id'])) {
    global $DB;
    $q = $DB->prepare('DELETE FROM carts WHERE book_id = :book AND user_id = :user_id;');
    $q->bindParam(':book', $_GET['id'], PDO::PARAM_STR);
    $q->bindParam(':user_id', $user['id'], PDO::PARAM_INT);
    $q->execute();
}


header('Location: cart.php');