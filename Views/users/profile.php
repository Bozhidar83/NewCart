<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/projects/PHP-Web-Development/NewCart/content/styles.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>

<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand">
                <img src="http://icons.iconarchive.com/icons/fasticon/shop-cart/512/shop-cart-icon.png" alt="site-logo" class="img-responsive img-rounded">
                New Cart
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navHeaderCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../">Home</a></li>
                <li><a href="#">Gallery</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Tweeter</a></li>
                        <li><a href="#">Google+</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </li>
                <li><a href="#">About us</a></li>
                <li><a href="#contact" data-toggle="modal">Contact us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../register"><span class="glyphicon glyphicon-user"></span> Register</a>
                </li>
                <li>
                    <a href="../login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<h1>Hello, <?= $model['username']?></h1>

<!--Footer-->
<footer>
    <div class="navbar navbar-default navbar-static-bottom">
        <div class="container">
            <p class="navbar-text pull-left">&copy; 2015 Created by GodGift</p>
            <!--            <a href="http://www.softuni.bg" class="navbar-btn btn btn-primary pull-right">Subscribe on Softuni</a>-->
        </div>
    </div>
</footer>
</body>