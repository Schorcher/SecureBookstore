<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/6/2017
 * Time: 1:11 PM
 */
require("libs/config.php");
$pageDetails = "bookstore checkout";
$page_title = 'Checkout';

# General Page setup
include('libs/setup.php');

# Add checkout processing function
include('libs/checkout.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/checkout_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>