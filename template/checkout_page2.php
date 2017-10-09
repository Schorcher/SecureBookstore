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
        <label for="cardNumber" class="sr-only">Card Number</label>
        <input type="number" class="form-control" id="cardNumber" name="cardNumber" minlength="16" maxlength="16" required autofocus />
        <label for="CVC" class="sr-only">3-digit Security Code</label>
        <input type="number" class="form-control" id="CVC" name="CVC" minlength="3" maxlength="3" required />

        <input type="button" class="form-control" value="Previous" onclick="document.location.href='checkout.php'" />
        <input type="submit" class="form-control" value="Next" />
    </form>
</div>