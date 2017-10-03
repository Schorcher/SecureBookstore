<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:17 PM
 */

require("libs/config.php");
$pageDetails = "login";
$page_title = 'Login';


# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Add login function
include('libs/login.php');

include(D_TEMPLATE . '/header.php');
?>

    <?php include(D_TEMPLATE . '/login_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>