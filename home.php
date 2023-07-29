<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        HOME
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php">ABOUT US</a></li>
                    <li><a href="ss.php">Search</a></li>
                    
                    <?php
                        if(isset($_SESSION['email'])){
                            echo '
                            <li><a href="example-history.php">HISTORY</a></li>
                            <li>
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
    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="images/pushpa.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                PUSHPA
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>2h 59m</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <!-- <div class="movie-info">
                                    <span>16+</span>
                                </div> -->
                            </div>
                            <div class="item-content-description top-down delay-4">
                            A labourer named Pushpa makes enemies as he rises in the world of red sandalwood smuggling.
                            However, violence erupts when the police attempt to bring down his illegal business.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="video.php?id=25" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="images/avengersendgame.jpeg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                AVENGERS ENDGAME
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>182 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="video.php?id=2" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="images/vikramm.jpeg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                VIKRAM
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>174 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                            A special agent investigates a murder committed by a masked group of serial killers. However, a tangled maze of clues soon leads him to the drug kingpin of Chennai.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="video.php?id=12" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="video.php?id=22"><img src="images/titanic.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            TITANIC
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="video.php?id=23"><img src="images/kgf2.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            KGF CHAPTER 2
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="video.php?id=21"><img src="images/imthat.png" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            I Am That Change 
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="video.php?id=20"><img src="images/saaho.jpeg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            SAAHO
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <!-- <div class="movie-item">
                    <img src="./images/series/wanda.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Wanda Vision
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>120 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                Latest Movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
              $fetchVideos = mysqli_query($conn, "SELECT * FROM movies order by year desc limit 10");
              while($row = mysqli_fetch_assoc($fetchVideos)){
              $location = $row['imageloc'];
              $name = $row['title'];
              $time = $row['runtime'];
              $id =$row['id'];
              echo '<a href="video.php?id='.$id.'" class="movie-item">
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
              </a>';
             }
               ?>
            </div>
        </div>
    </div>
    
    <!-- END LATEST MOVIES SECTION -->
    


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