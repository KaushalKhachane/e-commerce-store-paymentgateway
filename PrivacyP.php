<?php 
include 'components/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <title>Privacy Policy</title>
    <!-- Add your CSS stylesheet link here -->
</head>

<body>

    <?php include 'components/user_header.php'; ?>
    <header>
        <h1>Privacy Policy</h1>
    </header>

    <section>
        <p>Insert your privacy policy content here.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum tortor ac ex sodales, nec congue
            purus vestibulum.</p>

        <h2>Privacy Policy</h2>

        <p>Your privacy is important to us. This Privacy Policy outlines the types of personal information we collect, how we use it, and the choices you have regarding your information.</p>

        <h3>Information We Collect</h3>

        <p>We may collect the following types of personal information:</p>

        <ul>
            <li>Contact information, such as name, email address, phone number, and mailing address.</li>
            <li>Payment information, such as credit card details, for processing transactions.</li>
            <li>Demographic information, such as age, gender, and interests, for marketing purposes.</li>
            <li>Usage data, such as IP address, browser type, and device information, for analytics and security purposes.</li>
        </ul>

        <h3>How We Use Your Information</h3>

        <p>We may use your personal information for the following purposes:</p>

        <ul>
            <li>To process transactions and provide services you request.</li>
            <li>To personalize your experience and improve our website.</li>
            <li>To send promotional emails and marketing communications.</li>
            <li>To detect, prevent, and address technical issues and security vulnerabilities.</li>
        </ul>

        <!-- Add more sections as needed -->

    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>
