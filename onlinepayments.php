<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_payment'])) {
    $total_amount = $_POST['total_amount'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>FOOD COURT</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/041a644664.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <style>
        .padding {
            padding: 5rem !important
        }
        .form-control:focus {
            box-shadow: 10px 0px 0px 0px #ffffff !important;
            border-color: #4ca746
        }
        #paymentSuccess {
            display: none;
        }
    </style>
</head>
<body>
    </script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Your navigation content -->
    </nav>
    <!-- End Navigation -->

    <div class="jumbotron text-center">
        <h1>Online Payment Method</h1>
    </div>

    <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <div class="col-md-6 text-right" style="margin-top: -5px;"></div>
                            <div class="row">
                                <div class="col-md-6"> <span><strong>CREDIT/DEBIT CARD PAYMENT</strong></span> </div>
                            </div>
                        </div>
                        <div class="card-body" style="height: 350px">
                            <form method="POST" action="inc/onlinepayment.inc.php">
                                <!-- Your payment form fields -->
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <input type="text" name="cardnum" class="form-control" placeholder=".... .... .... ...." autocomplete="off" required maxlength="16">
                                </div>
                                <div class="row">
                                    <div class="col-md-6" class="form-group">
                                        <label>CARD EXPIRY</label>
                                        <input type="text" name="cardexp" class="form-control" autocomplete="off" placeholder=".. / ...." maxlength="7" required>
                                    </div>
                                    <div class="col-md-6" class="form-group">
                                        <label>CARD CVC</label>
                                        <input type="text" name="cardcvc" class="form-control" autocomplete="off" placeholder="..." maxlength="3" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>CARD HOLDER NAME</label>
                                    <input type="text" name="holdername" class="form-control" autocomplete="off" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" id="paymentForm">
        <!-- Your payment form fields -->
        <!-- ... -->

        <div class="form-group">
            <button type="submit" class="btn btn-success form-control" id="makePayment">Make Payment</button>
        </div>
    </form>

    <!-- Your other HTML content -->

    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevents default form submission
            
            // Here, you can simulate a successful payment process (Replace this with actual payment processing logic)
            // For demonstration purposes, we'll show an alert
            alert('Payment Successful!');
            
            // Redirect to checkout.php after a short delay
            setTimeout(function() {
                window.location.href = 'checkout.php';
            }, 2000); // Redirect after 2 seconds (2000 milliseconds)
        });
    </script>
</body>
</html>

<?php
} else {
    header("Location: checkout.php");
    exit();
}
?>
