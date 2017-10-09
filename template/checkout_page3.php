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
        <input type="checkbox" class="form-control" id="isShippingAddress" name="isShippingAddress" value="sameAddress" />
        <label for="isShippingAddress" class="sr-only">Same as billing address?</label>

        <label for="billingAddress1" class="sr-only">Address 1</label>
        <input type="text" id="billingAddress1" class="form-control" name="billingAddress1" required autofocus />
        <label for="billingAddress2" class="sr-only">Address 2</label>
        <input type="text" id="billingAddress2" class="form-control" name="billingAddress2" />
        <label for="billingCity" class="sr-only">City</label>
        <input type="text" id="billingCity" class="form-control" name="billingCity" required />
        <label for="billingState" class="sr-only">State</label>
        <select id="billingState" name="billingState" class="form-control" required >
            <?php include("city_list.php") ?>
        </select>
        <label for="billingCountry" class="sr-only">Country</label>
        <select id="billingCountry" name="billingCountry" class="form-control" required >
            <?php include("country_list.php") ?>
        </select>
        <label for="billingZip" class="sr-only">Zipcode</label>
        <input type="number" id="billingZip" name="billingZip" class="form-control" minlength="5" maxlength="9" required />

        <input type="button" class="form-control" value="Previous" onclick="document.location.href='checkout2.php'"/>
        <input type="submit" value="Next" />
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