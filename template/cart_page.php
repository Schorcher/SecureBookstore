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

<div class="container">

    <?php


    global $DB;
    $q = $DB->prepare('SELECT * FROM carts WHERE user_id = :user_id;');
    $q->bindParam(':user_id', $user['id'], PDO::PARAM_INT);
    $q->execute();

    while ($r = $q->fetch()) {
        $q2 = $DB->prepare('SELECT * FROM books WHERE id = :id;');
        $q2->bindParam(':id', $r['book_id'], PDO::PARAM_INT);
        $q2->execute();
        $r2 = $q2->fetch();
        ?>

        <section>
            <div class="container py-3">
                <div class="card">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="/images/books/<?php echo $r2['isbn']; ?>.jpg" class="img-fluid w-25">
                        </div>
                        <div class="col-md-6 px-3">
                            <div class="card-block px-3">
                                <h6 class="card-title"> <?php echo $r2['title']; ?></h6>
                                <p class="card-text"> Quantity: <?php echo $r['count']; ?> </p>
                            </div>
                        </div>
                        <div class="col-md-2 px-3">
                            <div class="card-block px-3">
                                <a href="#" class="btn btn-primary">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php }

    ?>

</div>
