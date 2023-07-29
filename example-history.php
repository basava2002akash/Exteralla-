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
    <title>History</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    
    
    <style>
    table {
        margin-bottom: 2rem;
    }
    th {
        background-color: #212226;
        color: #fff;
        border: none;
    }
    td {
        border: none;
        vertical-align: middle;
    }
    .movie-img {
        height: 100px;
        width: auto;
        margin-right: 1rem;
    }
    .btn-remove {
        background-color: #d32f2f;
        color: #fff;
        margin-right: 0.5rem;
    }
    .btn-clear {
        background-color: #d32f2f;
        color: #fff;
    }
</style>








</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="index.php" class="logo">
                    <i class='bx bxs-star bx-tada main-color'></i>P<span class="main-color">R</span>OJECT E<i class='bx bxs-movie-play bx-tada main-color'></i>
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="genre.php">Genre</a></li>
                    <li><a href="language.php">Language</a></li>
                    <li><a href="upload.php">Upload</a></li>
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
            </div>
        </div>
    </div>

    <!-- END NAV -->
    <div class="containerr">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM history where username='$user'");
		echo "<h1>History</h1>";
        while($row = mysqli_fetch_assoc($result)){
        $imgg=$row['imgg'];   
        $mname=$row['mname'];
        $dt=$row['dt'];
		echo "<table class='table table-dark'>";
            
		echo	"<thead>
				<tr>
					<th>Movie</th>
					<th>Watched Time</th>
					<th></th>
				</tr>
			</thead>";
		echo  "<tbody>
				<tr>
					<td>
						<img src='$imgg' alt='Arjun Reddy' class='movie-img'>
                        $mname
					</td>
					<td>$dt</td>
				</tr>
			</tbody>";
		echo "</table>";
        }
        // echo "<button type='button' class='btn btn-clear'>Clear History</button>";
        ?>
	</div>


    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                        <i class='bx bxs-star bx-tada main-color'></i>P<span class="main-color">R</span>OJECT E<i class='bx bxs-movie-play bx-tada main-color'></i>
                        </a>
                        <p>
                            Project means a Star that Shines over
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
        © Copyright TEAM Project
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