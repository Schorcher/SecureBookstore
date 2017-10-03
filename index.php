<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:16 PM
 */
require("libs/config.php");
$pageDetails = "INDEX";
$page_title = 'Home';


include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/home_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
