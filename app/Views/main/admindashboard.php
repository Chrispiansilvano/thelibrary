<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="<?php echo base_url("css/admindashboard.css") ?>" href="<?php echo date('l jS \of F Y h:i:s A'); ?>"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" /> -->
    <meta charset="utf-8">
    <title>The Library App</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="<?php echo base_url("js/index.js") ?>"></script>
    <style>
        /* the primary colors: dark blue -  #002c5f */
        /* secondary colors:  Tane - #005c5f*/

        body {
            /* font-family: 'Roboto', sans-serif; */
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
        }

        .top-bar {
            background-color: #002c5f;
            padding: 10px;
            /* display: flex; */
            justify-content: space-between;
            /* align-items: center; */
            color: #fff;
        }

        .logo {
            margin-left: 20px;

        }

        .toptext {
            float: right;
        }



        .footer {
            background-color: #002c5f;
            color: #fff;
            text-align: center;
            padding: 10px;
            display: grid;
        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        .material-icons.md-18 {
            font-size: 18px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #002c5f;
            float: left;
            display: flex;
            flex-direction: column;
            font-size: 20px;
            /* border-radius: -10px; */
            height: auto;
            /* Allow the height to adjust based on content */
            min-height: 160vh;
            /* Set a minimum height of 100% viewport height */
        }

        li a {
            display: block;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            /* margin-top: 5px; */
            margin-bottom: 20px;

        }

        li {
            text-align: center;
            transition: 0.3s;


        }

        li:last-child {
            border-bottom: none;
        }

        li a.active {
            background-color: #005c5f;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #005c5f;
            color: white;
            /* transform: scale(1.05); */
        }

        /* styling the add book info form */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #002c5f;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .managebook input[type=button] {
            /* float: right; */
            padding: 9px;
            border: 1px solid black;
            /* margin-top: 8px; */
            /* margin-right: 16px; */
            font-size: 17px;
            width: 10%;
            border-radius: 5%;
            color: white;
            background-color: #002c5f;


        }

        button:hover {
            background-color: #005c5f;
        }
        .booklist {
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
            display: none;
        }

        .managebook {
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* display: none; */
            /* margin-top: 10px; */
        }

        .manageuser {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }

        .issuedbooks {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }

        .digitalcollections {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }

        .notification {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }

        .profile {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }

        .settings {
            display: none;
            padding: 5px;
            /* background-color: red; */
            width: 70%;
            float: left;
            margin-left: 10px;
            /* margin-top: 10px; */
        }
    </style>

</head>

<body>
    <div class="top-bar">
        <div class="toptext">

            <span style="margin-right: 10px;">Help</span>
            <span style="margin-right: 0px;"><?= $adminInfo['name']; ?></span>
            <i class="material-icons md-18">person</i>
        </div>
        <div class="logo">
            <img src="<?php echo base_url('images/logo2.jpg'); ?>" alt="logo" height="30px">
        </div>
    </div>
    <div class="row">
        <ul>
            
            <li><a class="active" href="#managebook" onclick="managebook();" id="mb">Add book</a></li>
            <li><a  href="#booklist" onclick="booklist();" id="bl">Books list</a></li>
            <li><a href="#manageuser" onclick="manageuser();" id="um">Users management</a></li>
            <li><a href="#issuedbooks" onclick="issuedbooks();" id="ib">Issued books</a></li>
            <li><a href="#digitalcollections" onclick="digitalcollections();" id="dc">Digital Collections</a></li>
            <li><a href="#notification" onclick="notification();" id="n">Notification</a></li>
            <li><a href="#profile" onclick="profile();" id="p">Profile</a></li>
            <li><a href="#settings" onclick="settings();" id="s">Settings</a></li>
            <li><a href="<?php echo site_url('adminlogout') ?>">Logout</a></li>
        </ul>
        <script>
            function booklist() {
                document.getElementById("booklist").style.display = "block";
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("bl").style.backgroundColor = "#005c5f";
                


            }
            function managebook() {
                document.getElementById("managebook").style.display = "block";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#005c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";

            }

            function manageuser() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "block";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("um").style.backgroundColor = "#005c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";
            }

            function issuedbooks() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "block";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";;
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#005c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";


            }

            function digitalcollections() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "block";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#005c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";

            }

            function notification() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "block";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "none";
                document.getElementById("n").style.backgroundColor = "#005c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";

            }

            function profile() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "block";
                document.getElementById("settings").style.display = "none";
                document.getElementById("p").style.backgroundColor = "#005c5f";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("s").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";

            }

            function settings() {
                document.getElementById("managebook").style.display = "none";
                document.getElementById("manageuser").style.display = "none";
                document.getElementById("issuedbooks").style.display = "none";
                document.getElementById("digitalcollections").style.display = "none";
                document.getElementById("notification").style.display = "none";
                document.getElementById("profile").style.display = "none";
                document.getElementById("settings").style.display = "block";
                document.getElementById("s").style.backgroundColor = "#005c5f";
                document.getElementById("p").style.backgroundColor = "#002c5f";
                document.getElementById("um").style.backgroundColor = "#002c5f";
                document.getElementById("dc").style.backgroundColor = "#002c5f";
                document.getElementById("ib").style.backgroundColor = "#002c5f";
                document.getElementById("mb").style.backgroundColor = "#002c5f";
                document.getElementById("n").style.backgroundColor = "#002c5f";
                document.getElementById("booklist").style.display = "none";
                document.getElementById("bl").style.backgroundColor = "#002c5f";
            }
        </script>
        <div class="booklist" id="booklist">
            book list
            <br>
            <a href="<?php echo site_url('booklist'); ?>">click here to view the available books in library</a>
        </div>
        <div class="managebook" id="managebook">
            <form action="<?php echo base_url('Addbook') ?>" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="Title" name="Title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" id="Author" name="Author" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" id="ISBN" name="ISBN" required>
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher:</label>
                    <input type="text" id="publisher" name="publisher" required>
                </div>
                <div class="form-group">
                    <label for="edition">Edition:</label>
                    <input type="edition" id="edition" name="edition" required>
                </div>
                <div class="form-group">
                    <label for="Publicationdate">Publication Date:</label>
                    <input type="date" id="Publicationdate" name="Publicationdate" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="5" required></textarea>
                </div>
                <!-- <div class="form-group">
                    <label for="genre">Genre:</label>
                    <select id="genre" name="genre" required>
                        <option value="">Select Genre</option>
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction">Non-Fiction</option>
                        <option value="mystery">Mystery</option>
                        <option value="thriller">Thriller</option> -->
                <!-- Add more genre options as needed -->
                <!-- </select> -->
                <!-- </div> -->
                <div class="form-group">
                    <label for="coverimage">Cover Image:</label>
                    <input type="file" id="coverimage" name="coverimage" accept="image/*" required>
                </div>
                <!-- <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" required>
                </div> -->
                <div class="form-group">
                    <label for="availability">Availability:</label>
                    <select id="availability" name="availability" required>
                        <option value="">Select Availability</option>
                        <option value="in-stock">In stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                        <option value="preorder">Preorder</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>
                <!-- <div class="form-group">
                    <label for="related-books">Related Books:</label>
                    <input type="text" id="related-books" name="related-books">
                </div> -->
                <!-- <div class="form-group">
                    <label for="tags">Tags/Keywords:</label>
                    <input type="text" id="tags" name="tags">
                </div> -->
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="manageuser" id="manageuser">
            <h1>user management</h1>
        </div>
        <div class="issuedbooks" id="issuedbooks">
            <h1>issued books</h1>
        </div>
        <div class="digitalcollections" id="digitalcollections">
            <h1>digital collections</h1>
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