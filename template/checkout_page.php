<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/6/2017
 * Time: 1:15 PM
 */
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Shipping Address</h1>
    </div>
</section>

<div class="container">

    <form class="form-signin" action="checkout.php" method="post" role="form">
        <label for="shippingAddress1" class="sr-only">Address 1</label>
        <input type="text" id="shippingAddress1" class="form-control" name="shippingAddress1" required autofocus>
        <label for="shippingAddress2" class="sr-only">Address 2</label>
        <input type="text" id="shippingAddress2" class="form-control" name="shippingAddress2">
        <label for="shippingCity" class="sr-only">City</label>
        <input type="text" id="shippingCity" class="form-control" name="shippingCity" required>
        <label for="shippingState" class="sr-only">State</label>
        <select id="shippingState" name="shippingState" class="form-control" required>
<?php include("city_list.php") ?>
        </select>
        <label for="shippingCountry" class="sr-only">Country</label>
        <select id="shippingCountry" name="shippingCountry" class="form-control" required>
<?php include("country_list.php") ?>
        </select>
        <label for="shippingZip" class="sr-only">Zipcode</label>
        <input type="number" id="shippingZip" name="shippingZip" class="form-control" required>
        <input type="hidden" name="checkoutPage" id="checkoutPage" value="shipping">
<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER']))
    $previous = $_SERVER['HTTP_REFERER'];
?>
        <input type="button" class="btn" value="Back"
               onclick="document.location.href = '<?php $previous ?>'" />
        <input type="submit" value="Next">
    </form>
</div>