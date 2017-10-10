<?php
/**
 * Created by PhpStorm.
 * User: heatherrego
 * Date: 10/9/17
 * Time: 7:06 PM
 */


require("libs/config.php");
$pageDetails = "cart";
$page_title = 'Shopping Cart';


include('libs/setup.php');

$cartSubtotal = 0;


include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/cart_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
