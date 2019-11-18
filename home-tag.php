<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <li class="nav-item" >
                <a class="nav-link" data-target="#myModal" data-toggle="modal" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="about" href="registration.php">Sign UP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-value="portfolio" href="products.html">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-value="blog"
                   href="https://www.freecodecamp.org/news/learn-bootstrap-4-in-30-minute-by-building-a-landing-page-website-guide-for-beginners-f64e03833f33/">Links</a>
            </li>
        </ul>
    </div>
</nav>
<?php include_once "login-tag.php"?>