
<?php
// Database configuration
$host = 'localhost'; // Your database host
$dbname ='medical'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

$message = [];

// Handle form submission
if(isset($_POST['submit'])) {
    // Create database connection
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize and validate input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Basic validation
    if(empty($name) || empty($number) || empty($email) || empty($date)) {
        $message[] = 'All fields are required!';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Invalid email format!';
    } else {
        // Insert into database
        $sql = "INSERT INTO appointments (name, number, email, date) 
                VALUES ('$name', '$number', '$email', '$date')";

        if($conn->query($sql) === TRUE) {
            $message[] = 'Appointment booked successfully!';
        } else {
            $message[] = 'Error: ' . $sql . '<br>' . $conn->error;
        }
    }

    $conn->close();
}
?>



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




<!-- about section ends -->




<!-- services section ends -->



<!-- doctors section starts  -->



<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment"><br><br><br>

    <h1 class="heading"> <span>appointment</span> now </h1>    

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
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
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
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="ambulance.php"> <i class="fas fa-chevron-right"></i> ambulance service </a>
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


<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get the element containing the satisfied patients count
    const satisfiedPatientsElement = document.querySelectorAll('.icons h3')[1];

    // Extract the initial count
    let satisfiedPatientsCount = parseInt(satisfiedPatientsElement.textContent);

    // Function to update the count
    function updateSatisfiedPatients() {
        // Increment the count
        satisfiedPatientsCount++;

        // Reset if it reaches 100,000
        if (satisfiedPatientsCount > 100000) {
            satisfiedPatientsCount = 1030; // Reset to the initial value
        }

        // Update the element with the new count
        satisfiedPatientsElement.textContent = satisfiedPatientsCount + "+";
    }

    // Set the update to happen every minute (60,000 milliseconds)
    setInterval(updateSatisfiedPatients, 1000);
});

</script>

</body>
</html>
