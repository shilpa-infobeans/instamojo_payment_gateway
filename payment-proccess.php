<?php

if (isset($_POST) && isset($_POST['pay_now'])) {

    $product_name   = $_POST["product_name"] ;
    $name           = $_POST["fname"];
    $phone          = $_POST["phone_number"];
    $email          = $_POST["email"];
    $amount         = $_POST["donation_amount"];
    include 'src/instamojo.php';
    $api = new Instamojo\Instamojo('test_d634f0ef9db6ea0bc74defb97ed', 'test_99d9fe164e368ae277b62b07470','https://test.instamojo.com/api/1.1/');
    try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => $product_name,
                "amount" => $amount,
                "buyer_name" => $name,
                "phone" => $phone,
                "send_email" => true,
                "send_sms" => true,
                "email" => $email,
                "mobile" => $phone,
                'allow_repeated_payments' => false,
                "redirect_url" => "http://localhost/instamojo_payment_gateway/thankyou.php",
                //"webhook" => "https://www.djtechblog.com/php/projects/payments/webhook.php"
            ));
    
        $pay_ulr = $response['longurl'];
        header("Location: $pay_ulr");
        exit();

    } catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}