<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url("css/index.css") ?>" href="<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="/css/index.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
    <meta charset="utf-8">
    <title>The Library App</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="<?php echo base_url("js/index.js") ?>"></script>

</head>

<body>
    <div class="top-bar">
        <div class="toptext">

            <span style="margin-right: 10px;">Help</span>
            <span style="margin-right: 0px;"><?= $userInfo['name']; ?></span>
            <i class="material-icons md-18">person</i>
        </div>
        <div class="logo">
            <img src="<?php echo base_url('images/logo2.jpg'); ?>" alt="logo" height="30px">
        </div>
    </div>
    <div class="row">
        <ul>
            <li><a class="active" href="#start" id="hm" onclick="start();">Home</a></li>
            <li><a href="#search" id="src" onclick="Search();">Search</a></li>
            <li><a href="#Borrow" id="b" onclick="Borrow();">Borrow</a></li>
            <li><a href="#Return" id="r" onclick="Return();">Return</a></li>
            <li><a href="#digitalcollections" id="dc" onclick="digitalcollections();">Digital Collections</a></li>
            <li><a href="#notification" id="n" onclick="Notification();">Notification</a></li>
            <li><a href="#profile" id="p" onclick="Profile();">Profile</a></li>
            <li><a href="#settings" id="s" onclick="Settings();">Settings</a></li>
            <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>

        </ul>
        <script>    
            function start() {
                document.getElementById("start").style.display = "block";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#005c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";

            }

            function Search() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "block";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#005c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
            }

            function Borrow() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "block";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";;
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#005c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";


            }

            function Return() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "block";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#005c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";

            }

            function digitalcollections() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "block";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#005c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
            }
            function Notification() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "block";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#005c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
            }

            function Profile() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "block";
                document.getElementById("settings").style.display = "none";
                document.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#005c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";

            }

            function Settings() {
                document.getElementById("start").style.display = "none";
                document.getElementById("search").style.display = "none";
                document.getElementById("Borrow").style.display = "none";
                document.getElementById("Return").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "block";
                ddocument.getElementById("hm").style.backgroundColor = "#002c5f";
                document.getElementById("src").style.backgroundColor = "#002c5f";
                document.getElementById("b").style.backgroundColor = "#002c5f";
                document.getElementById("r").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#005c5f";
            }
        </script>
        <div class="start" id="start">


            <div class="home" id="home">
                <div>
                    <input type="text" placeholder="Search book">
                    <input type="button" value="search">
                    <!-- <span>Search Icon</span> -->
                </div>

            </div>
            <div class="categoriesdialog" id="categoriesdialog">
                <h1>categories</h1>
                <div class="category-container">        


                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 1">
                        <span>Technology</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/sci.jfif'); ?>" alt="Category 2">
                        <span>Science and research</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>Politics and Law</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>Politics and Law</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>Politics and Law</span>
                    </div>

                </div>
                <div class="category-container">
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>Enviroment</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>business and carrier</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>lifestyle</span>
                    </div>
                    <div class="category-item">
                        <img src="<?php echo base_url('images/tech.jpg'); ?>" alt="Category 3">
                        <span>Art</span>
                    </div>
                </div>


            </div>
        </div>
        <div class="search" id="search">
            <h1>search</h1>
        </div>
        <div class="Borrow" id="Borrow">
            <h1>borrow</h1>
        </div>
        <div class="Return" id="Return">
            <h1>return</h1>
        </div>
        <div class="digitalcollections" id="digitalcollections">
            <h1>digitalcollections</h1>
        </div>
        <div class="notification" id="notification">
            <h1>notifications</h1>
        </div>
        <div class="profile" id="profile">
            <h1>profile</h1>
        </div>
        <div class="settings" id="settings">
            <h1>settings</h1>
        </div>

    </div>
    <div class="footer">
        <p>© Optimus Library 2023</p>
    </div>
</body>

</html>