<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 4:44 PM
 */

global $DB;

?>

<link href="/css/browse.css" rel="stylesheet">


<?php

if (isset($_GET['book'])) {

    $q = $DB->prepare('SELECT * FROM books WHERE isbn=:isbn;');
    $q->bindParam(':isbn', $_GET['book'], PDO::PARAM_STR);
    $q->execute();
    $r = $q->fetch();
    ?>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading"><?php echo $r['title']; ?></h1>
            <p class="lead text-muted"><?php echo $r['isbn']; ?></p>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/books/<?php echo $r['isbn']; ?>.jpg" class="img-fluid"/>
            </div>
            <div class="col-md-4 offset-md-2">
                <p class="lead text-muted">Author: <?php echo $r['author']; ?></p>
                <p class="lead text-muted">ISBN: <?php echo $r['isbn']; ?></p>
                <p class="lead text-muted">Course: <?php echo $r['course']; ?></p>
                <p class="lead text-muted">Professor: <?php echo $r['professor']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="lead text-muted">Description: </p>
                <p class="lead text-muted"><?php echo $r['description']; ?></p>
            </div>
        </div>
    </div>

    <?php
} else {
    ?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Browse books</h1>
            <p class="lead text-muted">Please find the books you want here!</p>

            <form class="form-inline" action="/browse.php" method="get" role="search" name="search">
                <input class="form-control mr-sm-2" type="text" placeholder="Search"
                       style="width: 30rem; height: 3rem;">
                <button class="btn btn-outline-success my-2 my-md-4" type="submit">Search</button>
            </form>

        </div>
    </section>
    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <?php
                $q = $DB->query('SELECT * FROM books;');
                while ($r = $q->fetch()) {
                    echo '<div class="card">';
                    echo '<a href="/browse.php?book=' . $r['isbn'] . '">';
                    echo '<img src="/images/books/' . $r['isbn'] . '.jpg" alt="" class="img-fluid">';
                    echo '<p class="card-text">' . $r['title'] . '</p>';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>