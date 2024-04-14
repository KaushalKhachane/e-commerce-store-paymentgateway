<?php include 'components/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
;
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <title>Refund Policy</title>
    <!-- Add your CSS stylesheet link here -->
</head>

<body>

    <?php include 'components/user_header.php'; ?>



    <section>
        <h2>Refund Policy for Payment Gateway Services</h2>
        <p>Thank you for using our payment gateway services.</p>

        <h3>Refunds</h3>
        <p>We offer refunds for transactions under certain circumstances:</p>
        <ul>
            <li>If a payment transaction is duplicated due to a technical error, we will issue a refund for the
                duplicate payment.</li>
            <li>If a payment transaction is made fraudulently using your account without your authorization, we will
                refund the unauthorized charges after conducting an investigation.</li>
            <li>If a payment transaction is processed incorrectly, resulting in overcharging, we will refund the excess
                amount.</li>
        </ul>

        <h3>Non-Refundable Transactions</h3>
        <p>There are certain transactions that are non-refundable:</p>
        <ul>
            <li>Transactions for services already rendered or products already delivered.</li>
            <li>Transactions where the user has knowingly provided incorrect payment information.</li>
            <li>Transactions where the user has violated our terms of service or engaged in fraudulent activities.</li>
        </ul>

        <h3>Refund Process</h3>
        <p>To request a refund, please contact our customer support team with the details of your transaction. Refunds
            will be issued to the original payment method used for the transaction.</p>

        <h3>Contact Us</h3>
        <p>If you have any questions about our refund policy, please contact us:</p>
        <ul>
            <li>Email: support@example.com</li>
            <li>Phone: +123456789</li>
        </ul>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>