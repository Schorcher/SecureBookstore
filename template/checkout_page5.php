<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 9:46 PM
 */
?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Order Confirmed</h1>
    </div>
</section>

<div class="container">
    <div class="row">
        Your order has been placed.
    </div>
    <div class="row">
        It will be delivered between
    <?php $date=strtotime("+3 day"); echo date('M d, Y', $date);?> and <?php $date2=strtotime("+4 day"); echo date('M d, Y', $date2);?>.
    </div>
    <div class="row">
        <button class="btn btn-sm btn-primary" id="finished" name="finished" onclick="document.location.href='browse.php'">Return to Main</button>
    </div>
</div>
