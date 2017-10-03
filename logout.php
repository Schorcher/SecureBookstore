<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:17 PM
 */

# Start Session
session_start();

# Process Logout
unset($_SESSION['email']); // Deletes the email key
session_destroy();  // Deletes all of the session keys

# Redirect to login
header('Location: login.php');
