<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 7:11 PM
 */

if ($_POST) {
    if (isset($_POST['isShippingAdrress'])) {
        $_SESSION['billingAddress1'] = $_SESSION['shippingAddress1'];
        $_SESSION['billingAddress2'] = $_SESSION['shippingAddress2'];
        $_SESSION['billingCity'] = $_SESSION['shippingCity'];
        $_SESSION['billingState'] = $_SESSION['shippingState'];
        $_SESSION['billingCountry'] = $_SESSION['shippingCountry'];
        $_SESSION['billingZip'] = $_SESSION['shippingZip'];
    }
    else {
        $_SESSION['billingAddress1'] = $_POST['billingAddress1'];
        $_SESSION['billingAddress2'] = $_POST['billingAddress2'];
        $_SESSION['billingCity'] = $_POST['billingCity'];
        $_SESSION['billingState'] = $_POST['billingState'];
        $_SESSION['billingCountry'] = $_POST['billingCountry'];
        $_SESSION['billingZip'] = $_POST['billingZip'];
    }
    header("Location:checkout4.php");
}
?>