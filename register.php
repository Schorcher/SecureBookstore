<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:17 PM
 */

require("libs/config.php");
$pageDetails = "register";
$page_title = 'Register';


include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/register_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
