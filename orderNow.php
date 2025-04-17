

<?php
// Database Configuration
$host = 'localhost';      // Your database host
$dbname = 'medical'; // Your database name
$user = 'root';   // Your database username
$pass = '';   // Your database password

$message = [];

// Form Handling
if(isset($_POST['submit'])) {
    // Create database connection
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $location = htmlspecialchars($_POST['Location']);
    $date = htmlspecialchars($_POST['date']);

    // Validate inputs
    $errors = [];
    
    if(empty($name)) $errors[] = 'Name is required!';
    if(empty($number)) $errors[] = 'Number is required!';
    if(empty($location)) $errors[] = 'Location is required!';
    if(empty($date)) $errors[] = 'Date is required!';

    if(empty($errors)) {
        // Use prepared statement
        $stmt = $conn->prepare("INSERT INTO orders (name, number, location, date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $number, $location, $date);
        
        if($stmt->execute()) {
            $message[] = 'Order placed successfully!';
        } else {
            $message[] = 'Error: ' . $stmt->error;
        }
        
        $stmt->close();
    } else {
        $message = $errors;
    }

    $conn->close();
}
?>


<!-- Your existing HTML form here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    
    <a href="about.php">about</a>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>CareNow</strong>NEED </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="services.php">services</a>
        <a href="doctors.php">doctors</a>
        <a href="appointment.php">appointment</a>
        <a href="review.php">review</a>
        <a href="blogs.php">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->




<!-- home section ends -->

<!-- icons section starts  -->




<!-- icons section ends -->



<!-- about section ends -->




<!-- services section ends -->



<!-- doctors section starts  -->



<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment"><br><br><br><br><br>

    <h1 class="heading"> <span>ORDER </span> NOW </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>order now</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="location"name="Location" placeholder="your Location" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="orderNow" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->




<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="about.php"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="services.php"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="doctors.php"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="appointment.php"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="review.php"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="blogs.php"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="dental.php"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="orderNow.php"> <i class="fas fa-chevron-right"></i> ORDER NOW </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="ambulance.html"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> medical123@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> shu123@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> DHAKA, bangladesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="https://www.facebook.com/shuvo.halder.9847"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/shuvo.halder.9847/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/shuvo-halder-588817302/"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>213-15-4369</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>





</body>
</html>
