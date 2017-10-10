<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:46 PM
 */

require("libs/config.php");
$pageDetails = "browse";
$page_title = 'Browse';


include('libs/setup.php');


if ($_POST) {
    global $DB;
    $idInput = $_POST['idInput'];
    $isbn = $_POST['isbnInput'];
    $quantity = $_POST['quantityInput'];
    $user_id = $user['id'];
    $dateCreated = 'NOW()';


    $query = $DB->prepare('INSERT INTO carts(user_id, book_id, count, type, date_created) VALUES(:userid, :bookid, :quantity, :bookType, :date_created);');
    $query->bindParam(':userid', $user_id, PDO::PARAM_INT);
    $query->bindParam(':bookid', $idInput, PDO::PARAM_STR);
    $query->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $query->bindParam(':bookType', $isbn, PDO::PARAM_STR);
    $query->bindParam(':date_created', $dateCreated, PDO::PARAM_STR);
    $query->execute();

    header('Location: cart.php');
}


include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/browse_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>