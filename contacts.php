<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Interrogate </title>
        <link type="text/css" rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="material.css">
        <link type="text/css" rel="stylesheet" href="font.css">
        <link rel="icon" href="images/icon1.png" >
    </head>
    <body id="_4">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">i</div><div id="cir">i</div><div id="ntro">nterrogate</div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="categories.php"><li>Categories</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content" class="clearfix">
            
            <div id="box-1">
                <div class="heading">
                    <center>
                    <h1 class="logo"><div id="i">i</div><div id="cir">i</div><div id="ntro">nterrogate</div></h1>
                    <p id="tag-line">where questions are themselves the answers</p>
                    </center>
                </div>
            </div>
            <div id="box-2">
                <div id="text">
                    <h1>Interrogate Inc.</h1>
                    <p style="line-height: 20px;">
                        <a href="">interrogateincorporate@gmail.com</a><br>
                        Contact: +91 (***) ***-****<br>
                        Site By: <a href="">https://yashwanth21.in</a><br>
                        Social: <a href="https://github.com/yashwanth21">Github@Yashwanth21</a><br>
                    </p>
                </div>
            </div>
            
        </div>
    
        <!-- Footer -->
        
        
    </body>
    
</html>