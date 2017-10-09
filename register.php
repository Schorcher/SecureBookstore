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


if ($_POST) {
    global $DB;
    $pass_1 = $_POST['inputPassword_1'];
    $pass_2 = $_POST['inputPassword_2'];
    $firstName = $_POST['inputFirstName'];
    $lastName = $_POST['inputLastName'];
    $email = $_POST['inputEmail'];

    if ($pass_1 == $pass_2) {
        $hashed_password = strong_encrypt($pass_1);

        $q = $DB->prepare('INSERT INTO users(first_name,last_name,email,password) VALUES(:firstName,:lastName,:email,:password);');
        $q->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $q->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $q->bindParam(':email', $email, PDO::PARAM_STR);
        $q->bindParam(':password', $hashed_password, PDO::PARAM_STR);

        $q->execute();

        header('Location: login.php');
    }

}


include(D_TEMPLATE . '/header.php');
?>

<?php include(D_TEMPLATE . '/register_page.php'); ?>

<?php
include(D_TEMPLATE . '/footer.php');
?>
