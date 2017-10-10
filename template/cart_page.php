<?php
/**
 * Created by PhpStorm.
 * User: heatherrego
 * Date: 10/9/17
 * Time: 5:50 PM
 */
?>

<link rel="stylesheet" href="/css/about_cards.css">


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Shopping Cart</h1>
        <p class="lead text-muted"> Below is a list of the books in your cart. </p>
    </div>
</section>


<?php

{

$q = $DB->prepare('SELECT * FROM carts WHERE user_id=user_id;');
$q->bindParam(':user_id', $_GET['book'], PDO::PARAM_STR);
$q->execute();
$r = $q->fetch();
?>


<div class="container">
    <section>
        <div class="container py-3">
            <div class="card">
                <div class="row ">
                    <div class="col-md-4">
                        <img src="/images/books/ <?php echo $r['isbn']; ?>.jpg" class="img-fluid w-100">
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">


                            <?php
                            while ($r = $q->fetch()) {
                                echo '<p class="card-title">' . $r['title'] . '</p>';
                            }
                            ?>

                            <h6 class="card-title"></h6>
                            <p class="card-text"> This item is currently in your shopping cart. </p>
                            <a href=" " class="btn btn-primary">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    }

    ?>