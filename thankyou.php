<?php
//namespace IB\DONATION;

use Instamojo;
use IB\DONATION\Donation;

require 'inc/class-insert-donation.php';
require 'inc/class-db-connection.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>BNCA: Payment Success</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            #details-container {
                padding-left: 50px;
            }
            @media(max-width: 600px) {
                #details-container  {
                    padding-left: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Demo Instamojo Product Payment </h1>
            </div>
            <?php

            include 'src/instamojo.php';

            $api = new Instamojo\Instamojo('test_d634f0ef9db6ea0bc74defb97ed', 'test_99d9fe164e368ae277b62b07470','https://test.instamojo.com/api/1.1/');

            $payid = $_GET["payment_request_id"] ?? '';
            try {
                $response           = $api->paymentRequestStatus($payid);
                $payment_id         = $response['payments'][0]['payment_id'];
                $amount             = $response['payments'][0]['amount']; 
                $name               = $response['payments'][0]['buyer_name'];
                $email              = $response['payments'][0]['buyer_email'];
                $phone              = $response['payments'][0]['buyer_phone'];
                $acount_status      = $response['payments'][0]['status'];
                $payment_status     = $response['status'];
                //echo "<pre>"; print_r($response); echo "</pre>";
                if ($response && $payment_status  === 'Completed' && $acount_status === 'Credit') {
                    new Donation( $name, $email, $phone, $amount, $payment_status );
                }
            } catch (\Exception $e) {
                print('Error: ' . $e->getMessage());
            }
            ?>
        </div> <!-- /container -->
    </body>
</html>