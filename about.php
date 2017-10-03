<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 5:13 PM
 */
require("libs/config.php");
$pageDetails = "INDEX";
$page_title = 'About Us';

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/about_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
