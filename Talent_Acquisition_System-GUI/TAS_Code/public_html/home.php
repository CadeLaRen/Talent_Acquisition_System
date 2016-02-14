<!DOCTYPE html>
<!--
This is the home page; serving as the central hub for links to rest of the pages. This is a derivative of
index.html page minus the "welcome" animation.
-->
<html>
    <head>
        <title>TAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="scripts/jquery.js"></script>
        <script src="scripts/materialize.js"></script>
        <link type="text/css" rel="stylesheet" href="styles/materialize.css" />

        <script src="scripts/animation.js"></script>
        <link type="text/css" rel="stylesheet" href="styles/display.css" />
        <link rel="shortcut icon" href="favicon.ico">
        <script>
            $(document).ready(function () {

                var ht = $(window).height();
                $('.parallax-container').css('height', $(window).height());


                var root = $('html, body');
                $('#down-button').click(function () {
                    if (ht < $(document).height()) {
                        $(root).animate({
                            scrollTop: ht
                        }, 3000);
                    }
                    ht = ht + ht;
                    return false;
                });

                $('.menu_black').click(function () {
                    $('#slide-out').removeClass('hidden');
                });

            });
        </script>
    </head>


    <body>
        <style>
            a.button-collapse {
                top:10px;
                left:20px;
                position: absolute;
                z-index: 99;
            }
            .content{
                margin-left: 2%;
                padding: 2%;
                position:absolute; 
                bottom:0px;
                background-color: rgba(0,0,0,0.7);
            }
        </style>


        <!-- Menu bar on top left Start-->
        <a data-activates="slide-out" class="button-collapse">
            <i class="menu_black"></i>
        </a>
        <ul id="slide-out" class="side-nav fixed hidden">
            <li><a href="#About">About the Test</a></li>
            <li><a href="#Instructions">Instructions</a></li>
            <li><a href="#Personality">Personality Types</a></li>
            <li><a href="#Test">Take Test</a></li>
            <li><a href="#!">Site Help</a></li>
            <li><a href="#!">Developers</a></li>
        </ul>
        <!-- Menu bar on top left End-->


        <!-- Login Registration Form Trigger -->
        <a style="position:fixed; top:20px; right:20px;" id="members_btn" class="modal-trigger waves-effect waves-light btn" href="#LRForm">Members</a>

        <!-- Login Registration Form Start -->
        <div id="LRForm" class="modal">
            <div class="modal-content">

                <!-- Login Form -->
                <form action="logProcessing.php" method="post"  class = "login col s12" >
                    <div class = "row">
                        <div class = "input-field col s5">
                            <input name = "l_email" type = "email" class = "validate" required autofocus>
                            <label for = "l_email">Email</label>
                        </div>
                        <div class = "input-field col s5">
                            <input name = "l_pwd" type = "password" class = "validate" required >
                            <label for = "l_pwd">Password</label>
                        </div>
                        <div class = "input-field col s2">
                            <button type="submit" class="btn-floating btn-large red" style="float:right;"><i class="send_white"></i></button>
                        </div>
                    </div>
                </form>

                <!-- Registration Form -->
                <form name="log"  action="regProcessing.php" method="post"  class = "col s12 register hidden" >
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="first_name" type="text" class="validate" required autofocus>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="last_name" type="text" class="validate" required >
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" type="password" class="validate" required >
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10">
                            <input name="email" type="email" class="validate" required  >
                            <label for="email">Email</label>
                        </div>
                        <div class = "input-field col s2">
                            <button type="submit" class="btn-floating btn-large red" style="float:right;">
                                <i class="send_white"></i>
                            </button>
                        </div>
                    </div>  
                </form>
            </div>

            <div class="progress">
                <div id="progressBar" class=""></div>
            </div>

            <div class="modal-footer" >
                <a class="modal-action waves-effect waves-green btn-flat " style="text-align:left;" id="logreg">Register</a>
                <a class="modal-action modal-close waves-effect waves-green btn-flat" style="text-align:left;">Close</a>
            </div>
        </div>
        <!-- Login Registration Form End -->

        <!-- Parallax Images and Content Start-->
        <div>
            <div class="parallax-container" id="About">
                <div class="parallax"><img src="images/Testing.jpg" alt=""/></div>

                <div class="row container content ">
                    <h2 class="header "><a href="abouttest.html" class="yellow-text text-lighten-2">About MBTI and the Test</a></h2>
                    <p class="white-text">Swiss psychiatrist Carl Jung developed a theory early in the 20th century to describe basic 
                        individual preferences and explain similarities and differences between people.</p>
                </div>
            </div>

            <div class="parallax-container" id="Instructions">
                <div class="parallax"><img src="images/instructions.jpg"></div>

                <div class="row container content">
                    <h2 class="header"><a href="instructions.html"  class="deep-orange-text text-accent-1">Instructions for the Test</a></h2>
                    <p class="white-text ">Instructions are very necessary and must be read throughly before
                        taking the test.</p>
                </div>
            </div>

            <div class="parallax-container" id="Personality">
                <div class="parallax"><img src="images/Personalities.jpg" alt=""/></div>
                <div class="row container content">
                    <h2 class="header"><a href="personality.html" class="indigo-text text-darken-1">Personality Profiles List</a></h2>
                    <p class="white-text">Learn more about different types of personalities classified under
                        the MBTI research</p>
                </div>
            </div>
            <div class="parallax-container" id="Test">
                <div class="parallax"><img src="images/ready.jpg" alt=""/></div>
                <div class="row container content">
                    <h2 class="header"><a href="mbti.php" class="blue-grey-text">Take the MBTI test NOW!</a></h2>
                    <p class="white-text">What are you waiting for? Take the test and find your hidden
                        talents. You need to be logged in to take the test.</p>
                </div>
            </div>
        </div>
        <!-- Parallax Images and Content End-->

        <div  class="btn-floating btn-large red" id="down-button" style="position:fixed;bottom:20px;right:20px">
            <i class="down_white"></i>
        </div> 
    </body>
</html>
