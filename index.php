<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PU CSC DEPT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
               <h2 class="logo"><img src="./img/pu_logo.png" width="80" height="80" alt="PU CSC DEPT"></h2> 
               
            </div>
               
            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="programmes.html">PROGRAMMES</a></li>
                    <li><a href="faculty.html">FACULTY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div> 
        </div>

        <div class="content">
            <h1>Computer Science <br><span>Department</span></h1>
            <p class="par">The Department aims at imparting quality education in Computer Science & Engineering and Information Technology through various post-graduate programmes. <br> It also offers an atmosphere conducive for research scholars for pursuing research in various advanced areas of Computer Science, Engineering and Information Technology.</p>
            
            <button class="cn"><a href="logout.php">logout</a></button>
        </div>
    </div>

    <div class="end-text">
        <p>Copyright © @PU CSC. All Rights Reserved. Designed By GD.</p>
    </div>
</body>
</html>


