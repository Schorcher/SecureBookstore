<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 4:44 PM
 */

?>

<link href="/css/browse.css" rel="stylesheet">

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Browse books</h1>
        <p class="lead text-muted">Please find the books you want here!</p>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" style="width: 30rem; height: 3rem;">
            <button class="btn btn-outline-success my-2 my-md-4" type="submit">Search</button>
        </form>

    </div>
</section>


<div class="album text-muted">
    <div class="container">

        <div class="row">
            <?php
            global $DB;

            $q = $DB->query('SELECT * FROM books;');

            while ($r = $q->fetch()) {
                echo '<div class="card">';
                echo '<img src="/images/books/'. $r['isbn'] .'.jpg" alt="" class="img-fluid">';
                echo '<p class="card-text">'. $r['title'] .'</p>';
                echo '</div>';
            }

            ?>
        </div>

    </div>
</div>