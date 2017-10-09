<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 6:16 PM
 */
require("libs/config.php");
$pageDetails = "bookstore checkout";
$page_title = 'Checkout Card Info';

# General Page setup
include('libs/setup.php');

# Add checkout processing function
include('libs/checkout2.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/checkout_page2.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>