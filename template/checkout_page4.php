<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 9:45 PM
 */
?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Confirm Order Details</h1>
    </div>
</section>

<div class="container">
    <h1>Shipping Address</h1>
    <div class="row">
        <div class="col-sm-4"><b>Address 1:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingAddress1']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Address 2:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingAddress2']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>City:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingCity']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>State:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingState']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Country:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingCountry']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Zipcode:</b></div>
        <div class="col-sm-8"><?php $_SESSION['shippingZip']?></div>
    </div>

    <h1>Billing Address</h1>
    <div class="row">
        <div class="col-sm-4"><b>Address 1:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingAddress1']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Address 2:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingAddress2']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>City:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingCity']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>State:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingState']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Country:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingCountry']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Zipcode:</b></div>
        <div class="col-sm-8"><?php $_SESSION['billingZip']?></div>
    </div>

    <h1>Payment Info</h1>
    <div class="row">
        <div class="col-sm-4"><b>Total Due:</b></div>
        <div class="col-sm-8"><?php $_SESSION['cartGrandTotal']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Card Number:</b></div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Expiration:</b></div>
        <div class="col-sm-8"><?php $_SESSION['expMonth'] . '/' . $_SESSION['expYear']?></div>
    </div>
    <div class="row">
        <div class="col-sm-4"><b>Security code:</b></div>
        <div class="col-sm-8"><?php $_SESSION['CVC']?></div>
    </div>

    <form class="form-signin" action="checkout4.php" method="post" role="form">
        <input type="button" value="Cancel" onclick="document.location.href='cart.php'">
        <input type="submit" value="Confirm" class="btn btn-primary btn-sm float-right" />
    </form>
</div>
