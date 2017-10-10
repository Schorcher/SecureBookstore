<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 9:46 PM
 */
require("libs/config.php");
$pageDetails = "bookstore checkout";
$page_title = 'Checkout Confirmation';

# General Page setup
include('libs/setup.php');

# Add checkout processing function
// include('libs/checkout5.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/checkout_page5.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>