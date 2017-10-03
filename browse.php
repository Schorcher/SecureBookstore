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

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/browse_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>