<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:20 PM
 */
?>

<!DOCTYPE HTML>
<HTML>
<head>
    <title><?php echo($page_title); ?> - Bookstore</title>
<link rel="icon" href="http://artoo.kennesaw.edu/_resources/images/favicon.ico" type="text/png"/>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="../css/default.css" rel="stylesheet">
</head>
<body>
<!-- Add Code below here -->

<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" role="navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">Secure Bookstore</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item <?php if ($page_title == 'Home') {echo 'active';} ?>"><a class="nav-link" href="/index.php">Home</a></li>
            <li class="nav-item <?php if ($page_title == 'Browse') {echo 'active';} ?>"><a class="nav-link" href="/browse.php">Browse</a></li>
            <li class="nav-item <?php if ($page_title == 'About Us') {echo 'active';} ?>"><a class="nav-link" href="/about.php">About</a></li>
            <li class="nav-item <?php if ($page_title == 'Help') {echo 'active';} ?>"><a class="nav-link" href="#">Help</a></li>
        </ul>

        <ul class="nav navbar-nav">
            <li class="nav-item">
                <button id="btn-cart" class="btn btn-default nav-link" onclick="window.location.href='/cart.php'"><i
                            class="fa fa-shopping-cart"></i></button>
            </li>
            <?php
            if (isLoggedIn()) {

                if ($debug == 1) {
                    echo '<li class="nav-item">';
                    echo '<buton id="btn-debug" class="btn btn-default nav-link"><i class="fa fa-bug"></i></buton>';
                    echo '</li>';
                }

                echo '<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" id="dropdown01"
                               aria-haspopup="true" aria-expanded="false">' . $user['fullname_reverse'] . '</a>';
                echo '<div class="dropdown-menu" aria-labelledby="dropdown01">';

                echo '<a class="dropdown-item" href="/account.php">Account Settings</a>';
                echo '<a class="dropdown-item" href="/logout.php">Logout</a>';
                echo '</div>';
                echo '</li>';
            } else {
                echo '<li class="nav-item pull-right "><a class="nav-link" href="../login.php">Login</a></li>';
            }
            ?>
        </ul>


    </div>
</nav>