<?php 
/**
 * Include file for insert form data.
 */
namespace IB\DONATION;
$prd_name = "AAP";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donation Plateform</title>
        <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div>
                    <img src="asset/images/orphen.jpeg" alt="">
                </div>
                <div>
                <h1>Donation Form</h1>
                <form method="POST" action="payment-proccess.php">
                    <div class="mb-3">
                    <label for="phone_number" class="form-label">Donator Fullname</label>
                        <input type="text" aria-label="First name" class="form-control" name="fname" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone No.</label>
                        <input type="text" class="form-control" id="phone_number" aria-describedby="emailHelp" name="phone_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="input_email1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="input_email1" aria-describedby="emailHelp" name="email" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="donation_amount" class="form-label">Donation Amount</label>
                        <input type="text" class="form-control" id="donation_amount" name="donation_amount" required>
                    </div>
                    <input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
                    <button type="submit" class="btn btn-primary" name="pay_now">Pay Now</button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>