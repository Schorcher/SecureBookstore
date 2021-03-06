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
                        <div class="col-md-2">
                            <img src="/images/books/<?php echo $r2['isbn']; ?>.jpg" class="img-fluid w-75">
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="card-block px-3">
                                <h6 class="card-title"> <?php echo $r2['title']; ?></h6>
                                <p class="card-text"> Quantity: <?php echo $r['count']; ?> </p>
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="card-block px-3">
                                <p class="card-text"> Unit price: $<?php echo $r2['new_price']; ?></p>
                                <p class="card-text"> Unit Total: $<?php echo($r['count'] * $r2['new_price']); ?> </p>
                                <?php $cartSubtotal += ($r['count'] * $r2['new_price']); ?>
                            </div>
                        </div>
                        <div class="col-md-2 px-3">
                            <div class="card-block px-3">
                                <a href="/update_cart.php?id=<?php echo $r2['id']; ?>"
                                   class="btn btn-primary">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php }

    ?>

    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-md-3 offset-md-8">
                    <p>Subtotal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $cartSubtotal; ?></p>
                    <p>Tax (6%): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php $cartTax = ($cartSubtotal * 0.06);
                        echo $cartTax; ?></p>
                    <p>Shipping: </p>
                    <p>Grand Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo($cartSubtotal + $cartTax); ?></p>
                    <a href="/checkout.php" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
    </section>

    <?php

    $cartGrandTotal = $cartTax + $cartSubtotal;

    $_SESSION['cartGrandTotal'] = $cartGrandTotal;

    ?>

</div>
