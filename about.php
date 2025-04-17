



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




<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about"><br><br><br><br><br>

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>One of the key highlights is the wide variety of doctors available. Whether patients are looking for family physicians for routine check-ups, specialists like cardiologists, neurologists, or even niche experts in fields like endocrinology or dermatology, your site ensures that everyone can find the right care for their needs. It also caters to mental health with psychologists, psychiatrists, and counselors on board, ensuring that both physical and mental well-being are covered.</p>
            <p>But that’s not all—your website also offers access to every type of medicine, from essential prescription medications to over-the-counter treatments and supplements. This makes it easier for patients to obtain what they need without the hassle of searching multiple platforms.</p>
            <a href="https://www.internationalinsurance.com/health/systems/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->



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
            <a href="dental.html"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="ambulance.html"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> medical123@gmail.com</a>
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
