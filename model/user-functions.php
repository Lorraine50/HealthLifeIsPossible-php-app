<?php

/* 
User functions for the user side and public access areas of the system
 */

include("connection.php");

// function to show available bookings 
function show_available_bookings(){
    global $db;
    $sql = "SELECT * FROM booking_info;";
    $result = $db->query($sql);
    return $result;
}


function show_available_bookings_by_id($booking_id){
    global $db;
    $sql = "SELECT * FROM booking_info WHERE Apoint_id = '$booking_id'";
    $result = $db->query($sql)->fetch();
    return $result;
}

// fucntion to register a new user 
function register_a_user($Client_id, $Client_Name, $Client_Tel_w, $Client_Tel_h, $Client_Cell, $Client_Password, $Client_Age, $Client_Email, $Client_Address){
    global $db;
    $sql = "INSERT INTO `client`(`Client_id`, `Client_Name`, `Client_Tel_w`, `Client_Tel_h`, `Client_Cell`, `Client_Password`, `Client_Age`, `Client_Email,`Client_Address`) "
            . "VALUES ('$Client_id`, `$Client_Name`, `$Client_Tel_w`, `$Client_Tel_h`, `$Client_Cell`, `$Client_Password`, `$Client_Age`, `$Client_Email,`$Client_Address`)";
    $result = $db->exec($sql);
    return $result;
}
// checks if the user alreay registered before with their email address 
function validate_email_address($emailAd){
    global $db;
    $sql = "SELECT * FROM user WHERE user_email = '$emailAd';";
    $result = $db->query($sql);
    return $result;
}


// function login user to their profile page 
function log_in_a_user($user_email, $user_password){
    global $db;
    $user_password = md5($user_password);
    $sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password';";
    $result = $db->query($sql)->fetch();
    return $result;
    
}
// function to retrieve the user data from the database 
function get_user_data($user_id){
    global $db;
    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $result = $db->query($sql)->fetch();
    return $result;
}

function show_available_supplement(){
    global $db;
    $sql = "SELECT * FROM sup_category";
    $result = $db->query($sql);
    return $result;
}

function show_available_supplement_by_id($id){
    global $db;
    $sql = "SELECT * FROM supplement WHERE sup_cat_id = '$id'";
    $result = $db->query($sql);
    return $result;
}

// gets the booking of a user
function get_user_booking_with_id($user_id){
    global $db;
    $sql = "SELECT * FROM booking WHERE user_id = '$user_id'";
    $result = $db->query($sql);
    return $result;
}

// gets the booking of a user 
function get_user_booking_using_id($user_id){
    global $db;
    $sql = "SELECT * FROM booking WHERE user_id = '$user_id'";
    $result = $db->query($sql)->fetch();
    return $result;
}
// verify if the user has a booking
function if_user_has_booking($user_id){
    global $db;
    $sql = "SELECT * FROM booking WHERE user_id = '$user_id';";
    $result = $db->query($sql);
    return $result;
}

function validate_multiple_booking($user_id){
    global $db;
    $sql = "SELECT * FROM booking WHERE user_id = '$user_id';";
    $result = $db->query($sql);
    return $result;
}

function get_booking_data_by_id($booking_id){
    global $db;
    $sql = "SELECT * FROM booking_type WHERE booking_id = '$booking_id'";
    $result = $db->query($sql)->fetch();
    return $result;
}

function get_only_booking_name($booking_id){
    global $db;
    $sql = "SELECT booking_name FROM booking_type WHERE booking_id = '$booking_id'";
    $result = $db->query($sql)->fetchColumn();
    return $result;
}


function insert_new_booking($ID, $booking_id, $user_id, $booking_date, $booking_time, $booking_status, $bookingPrice){
    global $db;
    $sql = "INSERT INTO `booking`(`id`, `booking_id`, `user_id`, `booking_date`, `booking_time`, `booking_status`, `booking_amount`) "
            . "VALUES ('$ID','$booking_id','$user_id','$booking_date','$booking_time','$booking_status', '$bookingPrice')";
    $result = $db->query($sql);
    return $result;
}

function update_user_booking($bkTime, $updateID){
    global $db;
    $sql = "UPDATE booking SET booking_time = '$bkTime' WHERE id = '$updateID'";
    $result = $db->exec($sql);
    return $result;
}

function insert_payment_data($pay_id, $book_id, $user_id, $pay_amt, $pay_date){
    global $db;
    $sql = "INSERT INTO `payment`(`payment_id`, `booking_id`, `user_id`, `payment_amount`, `payment_date`) VALUES "
            . "('$pay_id','$book_id','$user_id','$pay_amt','$pay_date')";
    $result = $db->exec($sql);
    return $result;
}

?>

