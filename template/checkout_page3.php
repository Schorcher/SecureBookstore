<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/9/2017
 * Time: 6:38 PM
 */
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Billing Address</h1>
    </div>
</section>

<div class="container">

    <form class="form-signin" action="checkout3.php" method="post" role="form">
        <div class="form-group form-inline">
                <input type="checkbox" class="form-control" id="isShippingAddress" name="isShippingAddress" value="sameAddress" />

            <label for="isShippingAddress" class="col-form-label">Same as billing address?</label>
        </div>

        <div class="form-group form-inline">
            <label for="billingAddress1" class="col-form-label col-sm-4">Address 1</label>
            <div class="col-sm-8">
                <input type="text" id="billingAddress1" class="form-control" name="billingAddress1" required autofocus />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="billingAddress2" class="col-form-label col-sm-4">Address 2</label>
            <div class="col-sm-8">
                <input type="text" id="billingAddress2" class="form-control" name="billingAddress2" />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="billingCity" class="col-form-label col-sm-4">City</label>
            <div class="col-sm-8">
                <input type="text" id="billingCity" class="form-control" name="billingCity" required />
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="billingState" class="col-form-label col-sm-4">State</label>
            <div class="col-sm-8">
                <select id="billingState" name="billingState" class="form-control" required >
                    <?php include("city_list.php") ?>
                </select>
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="billingCountry" class="col-form-label col-sm-4">Country</label>
            <div class="col-sm-8">
                <select id="billingCountry" name="billingCountry" class="form-control" required >
                    <?php include("country_list.php") ?>
                </select>
            </div>
        </div>
        <div class="form-group form-inline">
            <label for="billingZip" class="col-form-label col-sm-4">Zipcode</label>
            <div class="col-sm-8">
                <input type="number" id="billingZip" name="billingZip" class="form-control" minlength="5" maxlength="9" required />
            </div>
        </div>

        <div class="form-group form-inline">
            <input type="button" class="btn btn-primary btn-sm" value="Previous" onclick="document.location.href='checkout2.php'"/>
            <input type="submit" value="Next" class="btn btn-primary btn-sm float-right" />
        </div>
        <script>
            $(document).ready(function(){
                $('#isShippingAddress').click(function(){
                    if (this.checked) {
                        $("#billingAddress1").attr("disabled", true);
                        $("#billingAddress2").attr("disabled", true);
                        $("#billingCity").attr("disabled", true);
                        $("#billingState").attr("disabled", true);
                        $("#billingCountry").attr("disabled", true);
                        $("#billingZip").attr("disabled", true);
                    } else {
                        $('#billingAddress1').removeAttr("disabled");
                        $('#billingAddress2').removeAttr("disabled");
                        $('#billingCity').removeAttr("disabled");
                        $('#billingState').removeAttr("disabled");
                        $('#billingCountry').removeAttr("disabled");
                        $('#billingZip').removeAttr("disabled");
                    }
                });
            });
        </script>
    </form>
</div>