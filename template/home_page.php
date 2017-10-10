<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:53 PM
 */

?>

<link href="/css/carousel.css" rel="stylesheet">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide img-fluid" src="/images/slide1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption d-block text-left">
                    <h1>Welcome to the Secure Bookstore.</h1>
                    <p>Find any of your class required books right here at your fingertips. We offer tons of the most popular books on the market. Sign up NOW to become a friend of the Bookstore.</p>
                    <p><a class="btn btn-lg btn-primary" href="/login.php" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide img-fluid" src="images/library.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-block">
                    <h1>Finding Your Perfect Book</h1>
                    <p>Our Secure Bookstore is all about helping you find which books meet your needs. If you would like to learn more about how we can find the "Perfect Match" books for you, then simply click here!</p>
                    <p><a class="btn btn-lg btn-primary" href="/about.php" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide img-fluid" src="images/reading.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-block text-right">
                    <h1>Browse Our Inventory.</h1>
                    <p>Take a look through our endless amount books. We offer textbooks at discounted rates that will make you never want to step foot in your school's expensive bookstore again!</p>
                    <p><a class="btn btn-lg btn-primary" href="/browse.php" role="button">Browse books</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container marketing">




</div>