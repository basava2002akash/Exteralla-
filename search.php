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
    <title>
        PROFILE
    </title>
    <!--==============ICON==================================--->
    <link rel="shortcut icon" href="images/est.png">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="app.css">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="genre.php">Genre</a></li>
                    <li><a href="language.php">Language</a></li>
                    <li><a href="upload.php">Upload</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <?php
                        if(isset($_SESSION['email'])){
                            echo '<li>
                            <a href="logout.php" class="btn btn-hover">
                                <span>LOGOUT</span>
                            </a>
                        </li>';
                        }
                        else{
                            echo '<li>
                            <a href="login.php" class="btn btn-hover">
                                <span>LOGIN</span>
                            </a>
                        </li>';
                        }
                    ?>
                </ul>
                <img src="images/menu.png" id="menuicon" alt="">
                <ul class="menu-box" id="menubox">
                    <li><a href="index.php" class="btn btn-hover"><span>Home</span></a></li>
                    <li><a href="genre.php" class="btn btn-hover"><span>Genre</span></a></li>
                    <li><a href="language.php" class="btn btn-hover"><span>Language</span></a></li>
                    <li><a href="upload.php" class="btn btn-hover"><span>Upload</span></a></li>
                    <li><a href="profile.php" class="btn btn-hover"><span>Profile</span></a></li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
    </script>
    <!-- END NAV -->
        <form action="" method="POST">
        <div class="box">
            <div class="form">
                <div class="inputBox">
                    <input type="text" name="search" required="required">
                    <span>Enter the movie name</span>
                    <i></i>
                </div>
                <input type="submit" name="submit" value="Search" class="form-btn">
            </div>
        </div>
        </form>

        <?php
if(isset($_POST['submit'])){
   $search = $_POST['search'];
   $fetchVideos = mysqli_query($conn, "SELECT * FROM movies where title like '$search'");
   $t = mysqli_num_rows($fetchVideos);
   if($t==1){
    while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['imageloc'];
        $name = $row['title'];
        $time = $row['runtime'];
        $id =$row['id'];
        echo '
        <div class="section">
        <div class="container">
            <div class="section-header">
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
            <a href="video.php?id='.$id.'" class="movie-item">
                <img src="'.$location.'" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            '.$name.'
                        </div>
                     <div class="movie-infos">
                         <div class="movie-info">
                            <i class="bx bxs-star"></i>
                                <span>9.5</span>
                        </div>
                     <div class="movie-info">
                            <i class="bx bxs-time"></i>
                                <span>'.$time.' mins</span>
                    </div>
                    <div class="movie-info">
                        <span>HD</span>
                    </div>
                    <div class="movie-info">
                        <span>16+</span>
                    </div>
                </div>
            </div>
        </a>
        
        </div>
        </div>
    </div>'
        ;
       }

   }
   else{
    echo '<script>alert("Not Found , Search again")</script>';
   }
   
  
}
    ?>

    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                        <i class='bx bxs-star bx-tada main-color'></i>E<span class="main-color">S</span>TRELLA<i class='bx bxs-movie-play bx-tada main-color'></i>
                        </a>
                        <p>
                            Estrella means a Star that Shines over
                            period lighting up opportunities for independent film-makers around the globe.
                            This is a platform provided for independent  to share
                            their work <br>
                            This platform is going to be the most loved by the
                            film-makers and viewers, we intend to keep no creative restrictions over the maker’s work
                            and let our viewers enjoy cinema to its extent. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <div class="copyright">
        © Copyright TEAM ESTRELLA
    </div>
    <!-- END COPYRIGHT SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>