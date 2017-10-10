<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 6:19 PM
 */
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Card Info</h1>
    </div>
</section>

<div class="container">

    <form class="form-signin" action="checkout2.php" method="post" role="form">
        <div class="form-group form-inline">
            <label for="cardNumber" class="col-sm-4">Card Number</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="cardNumber" name="cardNumber" minlength="16" maxlength="16" required autofocus />
            </div>

        </div>
        <div class="form-group form-inline">
            <label for="CVC" class="col-sm-4">3-digit Security Code</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="CVC" name="CVC" minlength="3" maxlength="3" required />
            </div>
        </div>
        <div class="form-group form-inline">
            <div class="btn-group">
                <input type="button" class="btn btn-primary btn-sm" value="Previous" onclick="document.location.href='checkout.php'" />
            </div>
            <div class="btn-group pull-right">
                <input type="submit" class="btn btn-primary btn-sm float-right" value="Next" />
            </div>
        </div>
    </form>
</div>