<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
       <meta name="viewport" content="width=device-width. initial-scale=1">
       <title>Zadanie rekrutacyjne</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/home.css" rel="stylesheet">
        <link href="css/about_us.css" rel="stylesheet">
        <link href="css/gallery.css" rel="stylesheet">
        <link href="css/our_services.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/subscribe.css" rel="stylesheet">
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>




    </head>

<body>
<div class="container-fluid" id="first">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pasek_zwiniety">
                    <span class="sr-only">Przelaczanie paska</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img src="photo/logo.png" alt="Logo"/>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="pasek_zwiniety">
                <ul class="nav navbar-nav navbar-right">
                    <li id="active_top"><a href="#">HOME</a></li>
                    <li><a href="#secondx">ABOUT</a></li>
                    <li><a href="#fourx">SERVICES</a></li>
                    <li><a href="#fivex">GALLERY</a></li>
                    <li><a href="#sixx">BLOG</a></li>
                    <li><a href="#sevenx">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-xs-6">
            <img src="photo/text_home.png"/>
        </div>
        <div class="col-xs-6"></div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <button>
                <img src="photo/button_1.png">
            </button>
        </div>
        <div class="col-xs-6"></div>
    </div>
    <div class="row">
        <div class="col-xs-5"></div>
        <div class="col-xs-2"><img id="scroll" src="photo/scroll.png"></div>
        <div class="col-xs-5"></div>
    </div>
</div>

<div class="container-fluid" id="second">
    <a name="secondx"></a>
    <div class="row">
        <div class="col-xs-6 a">
            <img src="photo/about.png"/>
        </div>
        <div class="col-xs-6 b">
            <img src="photo/text_about.png"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="three">
    <a name="fourx"></a>
    <div class="row">
        <div class="col-xs-6">
            <div class="row a">
                <img src="photo/ourservices_button1.png"/>
            </div>
            <div class="row">
                <img src="photo/ourservices_button2.png"/>
            </div>
            <div class="row">
                <img src="photo/ourservices_button3.png"/>
            </div>
            <div class="row">
                <img src="photo/ourservices_button4.png"/>
            </div>
        </div>
        <div class="col-xs-6">
            <img src="photo/our_services.png"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="four">
    <a name="fivex"></a>
    <div class="row">
        <img src="photo/text_gallery.png"/>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <img src="photo/gallery_1.png"/>
        </div>
        <div class="col-xs-4">
            <div class="row">
                <img src="photo/gallery_2.png"/>
            </div>
            <div class="row">
                <img src="photo/gallery_3.png"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 b">
            <img src="photo/gallery_4.png"/>
        </div>
        <div class="col-xs-6 c">
            <img src="photo/gallery_5.png"/>
        </div>
    </div>
    <div class="row button">
        <img src="photo/button_2.png"/>
    </div>
</div>

<div class="container-fluid" id="five">
    <div class="row">
        <img src="photo/text_subscribe.png"/>
    </div>
    <div class="row">
        <form>
            <div>
                <label for="email"></label>
                <input type="email" class="form" id="email" placeholder="Your email address...">
                <img src="photo/button_3.png"/>
            </div>
        </form>
    </div>
</div>

<div class="container-fluid" id="six">
    <a name="sixx"></a>
    <div class="row a">
        <img src="photo/text_blog.png"/>
    </div>
    <div class="row b">
        <img class="d" src="photo/blog_1.png"/>
        <img src="photo/blog_2.png"/>
        <img class="e" src="photo/blog_3.png"/>
    </div>
    <div class="row c">
        <img src="photo/button_4.png">
    </div>
</div>

<div class="container-fluid" id="seven">
<a name="sevenx"></a>
    <div class="row">
        <img src="photo/text_contact_1.png"/>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <form action="form.php" method="post">
            <input type="hidden" name="pozycja_na_stronie" id="pozycja_na_stronie" value="0" />
                <label for="name"></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your name...">
                <?php
                if(isset($_SESSION['error_name'])) {
                    echo $_SESSION['error_name'];
                }
                ?>

                <label for="email"></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Your email...">
                <?php
                if(isset($_SESSION['error_email'])) {
                echo $_SESSION['error_email'];
                }
                ?>
                <label for="number"></label>
                <input type="text" name="number" class="form-control" id="number" placeholder="Your phone number...">
                <?php
                if(isset($_SESSION['error_number'])) {
                    echo $_SESSION['error_number'];
                }
                ?>

                <textarea name="message">Your message...</textarea>
                <?php
                if(isset($_SESSION['error_message'])) {
                    echo $_SESSION['error_message'];
                }
                ?>
                <input type="submit" value="SEND" class="form-control butt" name="send" />
            </form>

            <?php
            if(isset($_SESSION['mail'])) {
                echo $_SESSION['mail'];
            }
            ?>

        </div>
        <div class="col-xs-6 a">
            <img src="photo/text_contact_2.png"/>
        </div>
    </div>

</div>
<div class="container-fluid c">
    <div class="row">
        <img src="photo/text_footer_1.png"/>
        <img src="photo/logo_small.png"/>
        <img src="photo/text_footer_2.png"/>
    </div>
</div>


<?php
session_destroy();
?>

<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>