<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 4:44 PM
 */

?>
<link href="/css/browse.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Customer Login</h1>
        <p class="lead text-muted">In order to purchase books, view/track orders, or access your account, please sign in.</p>
    </div>
</section>

<div class="container">

    <form class="form-signin" action="login.php" method="post" role="form">
        <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="inputEmail"
               placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="inputPassword"
               placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <div class="g-recaptcha" data-sitekey="6LfpICwUAAAAACjmFOkQ7MY1IDlPyihaC_Mf2w5l"></div>

        <br/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>
