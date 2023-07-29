<?php
@include 'config.php';
session_start();
$check = $_SESSION['email'];
$select = " SELECT * FROM login WHERE email = '$check' ";
$result = mysqli_query($conn, $select);
while($row = mysqli_fetch_assoc($result)){
    $creator = $row['name'];
}
if($check == true){
}
else{
    header('location:login.php');
}
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $language = $_POST['lang'];
    $runtime = $_POST['runt'];
    $storyline = $_POST['story'];
    $cast = $_POST['cast'];
    $year = $_POST['year'];
    $vname = $_FILES['video']['name'];
    $vtarget_dir = "video/";
    $vtarget_file = $vtarget_dir . $_FILES["video"]["name"];
    $iname = $_FILES['img']['name'];
    $itarget_dir = "images/";
    $itarget_file = $itarget_dir . $_FILES["img"]["name"];
 
    if(move_uploaded_file($_FILES['video']['tmp_name'],$vtarget_file) && move_uploaded_file($_FILES['img']['tmp_name'],$itarget_file)){
           // Insert record
           $query1 = "INSERT INTO movies(title,runtime,storyline,cast,year,creator,imagename,imageloc,videoname,videoloc) VALUES('".$title."','".$runtime."','".$storyline."','".$cast."','".$year."','".$creator."','".$iname."','".$itarget_file."','".$vname."','".$vtarget_file."')";
           mysqli_query($conn,$query1);
           $query2 = "INSERT INTO genre(genre) VALUES('".$genre."')";
           mysqli_query($conn,$query2);
           $query3 = "INSERT INTO language(language) VALUES('".$language."')";
           mysqli_query($conn,$query3);
           
          echo '<script>alert("Upload successfully")</script>';
         }       
    
    else{
       echo '<script>alert("file not uploaded")</script>';
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        UPLOAD
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
    <link rel="stylesheet" href="movup.css">
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
                    <li><a href="#">UPLOAD</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="ss.php">Search</a></li>
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
    <form action="" method="post" enctype='multipart/form-data'>
    <div class="box-mu">
        
        <div class="form">
            <h1>UPLOAD YOUR MOVIE</h1>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <div class="inputBox">
                <input type="text" name="title" required="required">
                <span>ENTER MOVIE TITLE</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="genre" required="required">
                <span>ENTER MOVIE GENRE</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="lang" required="required">
                <span>ENTER MOVIE LANGUAGE</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="runt"required="required">
                <span>ENTER MOVIE RUNTIME (in mins)</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="year"required="required">
                <span>ENTER MOVIE YEAR</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="cast"required="required">
                <span>ENTER MOVIE CAST</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" name="story"required="required">
                <span>ENTER MOVIE STORYLINE</span>
                <i></i>
            </div>
            <div class="fu">
                <span style="color:#BF40BF" class="imge">Upload Poster </span><input type='file' name='img'/>
                <br>
                <br>
                <span style="color:#BF40BF" class="vid">Upload Video </span> <input type='file' name='video' />
                <br>
            </div>
            <input type="submit" name="submit" value="UPLOAD" class="form-btn">
        </div>
        
    </div>
    </form> 
    
    <!-- END NAV -->   
</body>
</html>