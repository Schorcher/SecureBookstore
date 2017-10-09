<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 4:45 PM
 */

?>

<link href="/css/browse.css" rel="stylesheet">


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Customer Registration</h1>
        <p class="lead text-muted">In order to purchase books, view/track orders, or access your account, please
            register.</p>
    </div>
</section>

<div class="container">

    <form class="form-signin" action="register.php" method="post" role="form">
        <!-- <h2 class="form-signin-heading">Please sign in</h2> -->

        <label for="inputFirstName" class="sr-only">First Name</label>
        <input type="text" id="inputFirstName" class="form-control" name="inputFirstName"
               placeholder="First Name" required autofocus>

        <label for="inputLastName" class="sr-only">Last Name</label>
        <input type="text" id="inputLastName" class="form-control" name="inputLastName"
               placeholder="Last Name" required>

        <br/>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="inputEmail"
               placeholder="Email address" required>

        <br/>

        <label for="inputPassword_1" class="sr-only">Password</label>
        <input type="password" id="inputPassword_1" class="form-control" name="inputPassword_1"
               placeholder="Password" required>
        <label for="inputPassword_2" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword_2" class="form-control" name="inputPassword_2"
               placeholder="Confirm Password" required>

        <br/>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>

</div>