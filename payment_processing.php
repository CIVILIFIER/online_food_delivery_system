<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process payment logic here
    // Retrieve form data
    $cardNumber = $_POST['cardnum'];
    $cardExpiry = $_POST['cardexp'];
    $cardCVC = $_POST['cardcvc'];
    $cardHolderName = $_POST['holdername'];

    // Perform necessary actions like payment processing, validation, etc.
    // Your payment logic...
    
    // Redirect back to the checkout page or display a success message
    header("Location: checkout.php");
    exit();
} else {
    // If accessed directly without POST data, redirect back to checkout
    header("Location: checkout.php");
    exit();
}
?>

<form method="POST" action="payment_processing.php">
    <!-- Your payment form fields -->
    <!-- ... -->
    <div class="form-group">
        <button type="submit" class="btn btn-success form-control" id="makePaymentBtn">Make Payment</button>
    </div>
</form>