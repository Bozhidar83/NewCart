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
<!--<img src="/projects/PHP-Web-Development/NewCart/content/2ma3zqc773n3rt0d.png" alt="site-logo" class="img-responsive img-rounded"/>-->
<table border="1">
<?php foreach ($model as $v) :?>
    <tr>
        <td><?= $v['id']; ?></td>
        <td><?= $v['productName']; ?></td>
        <td><?= $v['productPrice']; ?></td>
        <td><?= $v['discount']; ?></td>
        <td><?= $v['quantity']; ?></td>
    </tr>

<?php endforeach; ?>
</table>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="" class="navbar-brand">
                <img src="http://icons.iconarchive.com/icons/fasticon/shop-cart/512/shop-cart-icon.png" alt="site-logo" class="img-responsive img-rounded">
                New Cart
            </a>
        </div>
<!--        <img src="http://sheshtawy.files.wordpress.com/2010/05/extra-firefox.png" class="img-responsive img-thumbnail" style="min-height:300px;height:300px;" alt="Responsive image">-->
        <div class="collapse navbar-collapse" id="navHeaderCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
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
                    <a href="users/register"><span class="glyphicon glyphicon-user"></span> Register</a>
                </li>
                <li>
                    <a href="users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/amazing-pic-1.jpg" alt="picture">
        </div>

        <div class="item">
            <img src="images/amazing-pic-2.jpg" alt="picture">
        </div>

        <div class="item">
            <img src="images/amazing-pic-3.jpg" alt="picture">
        </div>

        <div class="item">
            <img src="images/amazing-pic-6.JPG" alt="picture">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="jumbotron">
        <h1>
            <img src="http://icons.iconarchive.com/icons/fasticon/shop-cart/512/shop-cart-icon.png" alt="site-logo" class="img-responsive img-rounded">
            New Cart
        </h1>
        <h2>&apos;SHOPPING WITH PLEASURE&apos;</h2>
        <p>The New Cart is founded to be innovative and modern online shop, where the important are clients and their satisfaction of shopping.</p>
        <p><a href="users/register">Register</a> now and start your shopping adventure.</p>
<!--        <a href="http://www.softuni.bg/trainings/courses/list" class="btn btn-default">Watch Now!</a>-->
<!--        <a href="http://tweeter.com" class="btn btn-info">Tweet it!</a>-->
    </div>
</div>

<div class="container" id="soft-info">
    <div class="row">
        <div class="col-md-3">
            <h3>
                <a href="#">Curriculum</a>
            </h3>
            <p>The curriculum SoftUni is entirely directed to the adoption of fundamental knowledge, developing logical and algorithmic thinking and the acquisition of practical skills for working with the latest software technologies.</p>
            <a href="#" class="btn btn-default">Read more</a>
        </div>
        <div class="col-md-3">
            <h3>
                <a href="#">Trainers</a>
            </h3>
            <p>The trainers team is carefully selected. It consists of people from the IT industry, who are acknowledged professionals and have a lot of practical experience when it comes to giving lectures, training and mentoring people.</p>
            <a href="#" class="btn btn-default">Read more</a>
        </div>
        <div class="col-md-3">
            <h3>
                <a href="#">Certificates</a>
            </h3>
            <p>Acquired diplomas and certificates after studying at SoftUni prove knowledge and skills you have mastered in certain technologies and can be presented to the companies-employers. The Software University issues honorable...</p>
            <a href="#" class="btn btn-default">Read more</a>
        </div>
        <div class="col-md-3">
            <h3>
                <a href="#">Diplomas</a>
            </h3>
            <p>The Software University offers credited programs for state recognized Bachelor degrees and Professional Bachelor degrees. Software University issues certificates for all completed courses, levels (semesters), as well...</p>
            <a href="#" class="btn btn-default">Read more</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <h3>Some news <span>Posted on February 25th 2015</span></h3>
                    </div>
                    <img class="feturedImg" src="images/article-img.JPG" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis, erat fermentum molestie blandit, metus purus fringilla tortor, ac mollis eros enim id enim. Donec eget vehicula augue. Donec in porta arcu. Quisque vestibulum purus non nunc ultrices, et luctus quam pharetra. In placerat nisi eu tellus rhoncus ultrices. Nullam enim diam, facilisis non felis in, scelerisque fermentum mauris. Vivamus non tincidunt dui, eget vestibulum tortor. Ut egestas placerat mi, vel porttitor ligula vestibulum luctus. Integer elementum ex a massa tincidunt, eget vestibulum tellus malesuada. Nam enim ipsum, tincidunt vel scelerisque dignissim, convallis congue sapien. Integer magna odio, eleifend ac facilisis eget, varius eu arcu. Nam consectetur condimentum enim at pellentesque. Donec euismod porta tortor eu egestas.</p>
                    <h4>A heading</h4>
                    <p>Nunc suscipit mollis nisi in tincidunt. Nam dictum neque nec urna ultricies, quis fringilla nisl iaculis. Donec pulvinar euismod dolor, quis varius neque. Integer nisl metus, viverra in risus quis, ultricies auctor mi. Ut eu leo non risus sagittis pretium a id elit. Vestibulum volutpat libero vitae eleifend blandit. Praesent quis luctus mi. Cras id malesuada mauris. Nunc eu ultricies sem. In lacinia lacus lacus, sit amet lobortis erat convallis in. Ut congue viverra leo, sit amet ullamcorper magna sagittis nec.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">lorem Ipsum</h4>
                    <p class="list-group-item-text">In a egestas neque. Cras ut elit nulla. Vestibulum id justo in turpis rutrum facilisis et id diam. Donec varius quam sem, nec ullamcorper tellus efficitur at.</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">lorem Ipsum</h4>
                    <p class="list-group-item-text">In a egestas neque. Cras ut elit nulla. Vestibulum id justo in turpis rutrum facilisis et id diam. Donec varius quam sem, nec ullamcorper tellus efficitur at.</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">lorem Ipsum</h4>
                    <p class="list-group-item-text">In a egestas neque. Cras ut elit nulla. Vestibulum id justo in turpis rutrum facilisis et id diam. Donec varius quam sem, nec ullamcorper tellus efficitur at.</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">lorem Ipsum</h4>
                    <p class="list-group-item-text">In a egestas neque. Cras ut elit nulla. Vestibulum id justo in turpis rutrum facilisis et id diam. Donec varius quam sem, nec ullamcorper tellus efficitur at.</p>
                </a>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer>
    <div class="navbar navbar-default navbar-static-bottom">
        <div class="container">
            <p class="navbar-text pull-left">&copy; 2015 Created by GodGift</p>
<!--            <a href="http://www.softuni.bg" class="navbar-btn btn btn-primary pull-right">Subscribe on Softuni</a>-->
        </div>
    </div>
</footer>

<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Contact us</h4>
            </div>
            <div class="modal-body">
                <p>Connection failed! Please, try again later.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal">Close</a>
                <a class="btn btn-primary" data-dismiss="modal">Send</a>
            </div>
        </div>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php //include('messages.php'); ?>

