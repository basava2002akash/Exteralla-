<?php
include("config.php");
session_start();
$check = $_SESSION['email'];
$select = " SELECT * FROM login WHERE email = '$check' ";
$result = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($result)){
    $user = $row['name'];
}
if($check == true){

}
else{
    header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/est.png">
    <title>
        PLAYER
    </title>
    <link rel="stylesheet" href="style.css" class="css">
    <link rel="stylesheet" href="vapp.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index.php" class="logo">
                    <i class='bx bxs-star bx-tada main-color'></i>E<span class="main-color">S</span>TRELLA<i class='bx bxs-movie-play bx-tada main-color'></i>
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="genre.php">Genre</a></li>
                    <li><a href="language.php">Language</a></li>
                    <li><a href="upload.php">Upload</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="example-history.php">History</a></li>
                    <li><a href="ss.php">Search</a></li>
                </ul>
                <!-- <img src="images/menu.png" id="menuicon" alt="">
                <ul class="menu-box" id="menubox">
                    <li><a href="index.php" class="btn btn-hover"><span>Home</span></a></li>
                    <li><a href="genre.php" class="btn btn-hover"><span>Genre</span></a></li>
                    <li><a href="language.php" class="btn btn-hover"><span>Language</span></a></li>
                    <li><a href="upload.php" class="btn btn-hover"><span>Upload</span></a></li>
                    <li><a href="profile.php" class="btn btn-hover"><span>Profile</span></a></li>
                </ul> -->
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        let menubox = document.getElementById("menubox");
        let menuicon = document.getElementById("menuicon");
        
        menuicon.onclick = function(){
            menubox.classList.toggle("open-menu");

            if(menubox.classList.contains("open-menu")){
                menuicon.src = "images/close.png";
            }
            else{
                menuicon.src = "images/menu.png";
            }
        }
    </script> -->
    <!-- END NAV -->

    <div class="btn">
        <div class="play"></div>
        <p>Play Video</p>
        
        <?php
                    date_default_timezone_set("Asia/Kolkata");
                    $dt=date("d/m/y h:i:sa");
                    $x=$_GET["id"];
                    $fetchVideos = mysqli_query($conn, "SELECT * FROM movies,language,genre where movies.id=genre.id and movies.id=language.id and movies.id=$x");
                    while($row = mysqli_fetch_assoc($fetchVideos)){
                    $location = $row['videoloc'];
                    $title = $row['title'];
                    $genre = $row['genre'];
                    $language = $row['language'];
                    $storyline = $row['storyline'];
                    $cast = $row['cast'];
                    $year = $row['year'];
                    $creator = $row['creator'];
                    $imgg = $row['imageloc'];
                    }
                    echo "
                          <h1>$title</h1>
                          <p>$storyline</p>
                          <p>Genre - $genre</p>
                          <p>Language - $language</p>
                          <p>Year - $year</p>
                          <p>Starring &ensp;</p><p>$cast</p>
                          <h2>Uploaded by $creator</h2>
                    ";
                    $query1="INSERT INTO history(mid,mname,username,dt,imgg) VALUES('".$x."','".$title."','".$user."','".$dt."','".$imgg."')";
                    mysqli_query($conn,$query1);
        ?>
    </div>
    <div class="clip">
        <?php
            //$name = $row['name'];
            echo "<div >
                <video src='".$location."' controls ></video>
                <h2>$title</h2>                
            </div>";
            ?>
        
        <b class="close">Close</b>
    </div>
    <script>
        let btn=document.querySelector('.btn');
        let clip=document.querySelector('.clip');
        let close=document.querySelector('.close');
        let video = document.querySelector('video')
        btn.onclick = function(){
            btn.classList.add('active')
            clip.classList.add('active')
            video.play();
            video.currentTime=0;
        }
        close.onclick = function(){
            btn.classList.remove('active');
            clip.classList.remove('active');
            video.pause();
        }

    </script>
</body>
</html>