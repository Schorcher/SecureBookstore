<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:17 PM
 */

require("libs/config.php");
$pageDetails = "account";
$page_title = 'Account Settings';


# Session Start
session_start();

# General Page setup
include('libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Change Password
include('libs/change_password.php');

include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/account_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
