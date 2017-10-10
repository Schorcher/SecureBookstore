<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 9:46 PM
 */
require("libs/config.php");
$pageDetails = "bookstore checkout";
$page_title = 'Checkout Order';

# General Page setup
include('libs/setup.php');

# Add checkout processing function
include('libs/checkout4.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/checkout_page4.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>