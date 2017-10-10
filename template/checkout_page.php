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

    <form class="form-signin"  action="checkout.php" method="post" role="form">
        <div class="form-group form-inline">
            <label for="shippingAddress1" class="col-form-label col-sm-4">Address 1</label>
            <div class="col-sm-8">
                <input type="text" id="shippingAddress1" class="form-control" name="shippingAddress1" required autofocus />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="shippingAddress2" class="col-form-label col-sm-4">Address 2</label>
            <div class="col-sm-8">
                <input type="text" id="shippingAddress2" class="form-control" name="shippingAddress2" />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="shippingCity" class="col-form-label col-sm-4">City </label>
            <div class="col-sm-8">
                <input type="text" id="shippingCity" class="form-control" name="shippingCity" required />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="shippingState" class="form-control-label col-sm-4">State </label>
            <div class="col-sm-8">
                <select id="shippingState" name="shippingState" class="form-control" required >
                    <?php include("city_list.php") ?>
                </select>
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="shippingCountry" class="form-control-label col-sm-4"> Country</label>
            <div class="col-sm-8">
                <select id="shippingCountry" name="shippingCountry" class="form-control" required >
                    <?php include("country_list.php") ?>
                </select>
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="shippingZip" class="form-control-label col-sm-4">Zipcode </label>
            <div class="col-sm-8">
                <input type="number" id="shippingZip" name="shippingZip" class="form-control" minlength="5" maxlength="9" required />
            </div>
        </div>
        <input type="submit" value="Next" class="btn btn-sm btn-primary float-right"/>
    </form>
</div>