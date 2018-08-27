<!DOCTYPE html>
<html>
            <!-- include all modules -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RestFull API bmADeveloper</title>
                              <!-- include all modules files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <script src="/js/onclickScript.js" type="text/javascript" charset="utf-8" async defer></script>
                                     <!-- End -->
  </head>
             <!-- End -->

<body>
              <!-- Navigation Bar -->
    <section class="hero is-primary">
        <nav class="navbar">
            <div class="navbar-brand">
            <a class="navbar_item">
            <i class="fab fa-pied-piper-alt"></i>
            <strong>bmAndroid</strong>
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                <span></span>
                <span></span>
                <span></span>
            </span>
            </div>
            <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
                <a class="navbar-item" href="http://test.bm">
                <span class="icon">
                <i class="fas fa-home"></i>
                </span>
                    Home
                </a>
                <a class="navbar-item" id="showModal_signup">
                <span class="icon">
                <i class="fas fa-user-plus"></i>
                </span>
                    SignUp
                </a>
                <a class="navbar-item" href="contactus.php">
                <span class="icon">
                <i class="fas fa-phone"></i>
                </span>
                    Contact Us
                </a>
                <a class="navbar-item" href="notice.php">
                <span class="icon">
                <i class="fas fa-flag-checkered"></i>
                </span>
                    Notice
                </a>

                <p class="navbar-item""  href="notice.php">
                    <input class="input is-small is-focused" type="text" placeholder="user-name">
                    <span class="icon">
                        <i class="fas fa-user-secret"></i>
                    </span>
                </p>

                <p class="navbar-item""  href="notice.php">
                <input class="input is-small is-focused" type="password" placeholder="********">
                <span class="icon">
                            <i class="fas fa-key"></i>
                        </span>
                </p>
                <div class="navbar-item">
                    <button class="button is-link">login</button>
                </div>

                </div>
            </div>
        </nav>
    </section>
               <!-- End -->

                     <!-- Body -->
    <div class="hero-body" style="padding-top:8">
        <div class="container has-text-centered">
            <div class="level">
                <div class="level-item">
                <figure class="image is-128x128">
                    <img class="is-rounded" src="/icon/IMG_4297.jpg">
                </figure>
                </div>
            </div>
            <div class="level">
                <div class="level-item">
                    <p class="is-size-3" style="color: #1766A6;">
                        Well Come to my Home page (Restfull API with JWT(pending))
                    </p>
                </div>
            </div>
        </div>
    </div>
                     <!-- End -->
<?php include "pages/signup.php";?>
</body>
</html>