<?php

namespace IB\DONATION;

use IB\DONATION\DB_Connetion;
/**
 * Management of Data insertions and updation.
 */

class Donation {
    public $table_name;
    public $conn;
    public $name;
    public $email;
    public $phone;
    public $amount;
    public $payment_status;

    public function __construct( $name, $email, $phone, $amount, $payment_status ) {
        $this->table_name       = 'donation_history';
        $this->name             = (string) $name;
        $this->email            = (string) $email;
        $this->phone            = (int) $phone;
        $this->amount           = (int) $amount;
        $this->payment_status   = (string) $payment_status;

        $db = new DB_Connetion();
        $this->conn = $db->getConnection();
        $this->add_donation_data();
    }
 
    public function add_donation_data(){
        $payment_date = date('Y-m-d h:i:s', time());
        $sql = "INSERT INTO `$this->table_name` (`donator_name`, `donator_phone`, `donation_amount`, `payment_status`, `created_date`, `updated_data`, `email`) VALUES ( '$this->name','$this->phone','$this->amount','$this->payment_status','$payment_date', '$payment_date','$this->email')";

        $query = $this->conn->query($sql);
        if ($query) {
            echo "<h3 style='color:#6da552'>Thank You, Payment Successful!</h3>";
            echo "<h4 style='color:#6da552'>Keep payment deatils safe for future reference.</h4>";
            echo "<h4>Amount Paid: " . $this->amount."</h4>"; 
            echo "<h4>Applicant Name: " . $this->name . "</h4>";
            echo "<h4>Applicant Email: " . $this->email . "</h4>";
            echo "<h4>Applicant Mobile Number: " . $this->phone . "</h4>";
        } else {
            echo "Failed to insert new data.";
        }
        exit;
    }
}






// Example query
// $sql = "SELECT * FROM donation_history";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// Don't forget to close the connection when you're done with it
// $db->closeConnection();
?>