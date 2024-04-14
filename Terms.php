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
    <title>Terms & Conditions</title>
    <!-- Add your CSS stylesheet link here -->
</head>

<body>

    <?php include 'components/user_header.php'; ?>
    <header>
        <h1>Terms & Conditions</h1>
    </header>

    <section>

        <ol>
            <li><strong>Payment Gateway Usage:</strong> The use of our payment gateway is subject to acceptance of these terms and conditions. By making a payment through our gateway, you agree to abide by these terms.</li>

            <li><strong>Authorized Use:</strong> You agree to use our payment gateway only for lawful purposes and in compliance with all applicable laws and regulations. You shall not use the gateway for any fraudulent or illegal activities.</li>

            <li><strong>Payment Authorization:</strong> By initiating a payment transaction through our gateway, you authorize us to process the payment using the payment method provided.</li>

            <li><strong>Transaction Security:</strong> We employ industry-standard security measures to protect your payment information. However, we cannot guarantee the security of data transmitted over the internet, and you acknowledge and accept the inherent risks of online transactions.</li>

            <li><strong>Payment Processing Time:</strong> We strive to process payments promptly, but we cannot guarantee instant processing. The actual processing time may vary depending on factors such as network delays and bank processing times.</li>

            <li><strong>Payment Confirmation:</strong> Upon successful completion of a payment transaction, you will receive a confirmation email or notification. If you do not receive confirmation within a reasonable time frame, please contact our customer support team.</li>

            <li><strong>Currency Conversion:</strong> If your payment involves currency conversion, the conversion will be performed at the exchange rate determined by our payment processor or financial institution. Additional fees may apply for currency conversion, and you will be notified of these fees before completing the transaction.</li>

            <li><strong>Transaction Limits:</strong> We reserve the right to impose limits on the amount and frequency of transactions made through our gateway. These limits may be adjusted at our discretion and may vary depending on factors such as your account status and transaction history.</li>

            <li><strong>Dispute Resolution:</strong> In the event of any disputes or discrepancies related to payment transactions, please contact our customer support team for resolution. We will investigate the matter promptly and strive to provide a fair resolution.</li>

            <li><strong>Modification of Terms:</strong> We reserve the right to modify these terms and conditions at any time without prior notice. Any changes to these terms will be effective immediately upon posting on our website. It is your responsibility to review these terms periodically for updates.</li>
        </ol>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>
