<?php 
//for debugging 
//print_r($POST);

// get the data from the form
$first_name = filter_input(INPUT_POST,"first_name");
$last_name = filter_input(INPUT_POST,"last_name");
$address = filter_input(INPUT_POST,"address");
$city = filter_input(INPUT_POST,"city");
$state = filter_input(INPUT_POST,"state");  
$zip_code = filter_input(INPUT_POST,"zip_code", FILTER_VALIDATE_INT);
$phone_num = filter_input(INPUT_POST,"phone_num", FILTER_VALIDATE_INT);
$total_price = filter_input(INPUT_POST,"total_price", FILTER_VALIDATE_FLOAT);
$dimension = filter_input(INPUT_POST,"dimension", FILTER_VALIDATE_INT);

//Slide 66
//Error Handling
$error_message = "";

//Validate first name
if ($first_name === FALSE) {  
    $error_message .= "First Name is required.<br>";
}

//Validate last name
if ($last_name === FALSE) {  
    $error_message .= "Last Name is required.<br>";
} 

//Validate address
if ($address === FALSE) {  
    $error_message .= "Address is required.<br>";
} 

//Validate city
if ($city === FALSE) {  
    $error_message .= "City is required.<br>";
} else if (preg_match('/[0-9]/', $city)) {   //check if the input has any numbers in it
    $error_message .= "Invalid state. Try again.<br>";
}

//Validate State
if ($state === FALSE) {  
    $error_message .= "State is required.<br>";
} else if (preg_match('/[0-9]/', $state)) {   //check if the input has any numbers in it
    $error_message .= "Invalid state. Try again.<br>";
}

//Validate Zip code
if ($zip_code === FALSE) {  
    $error_message .= "Zip code is required.<br>";
} else if (strlen($zip_code) != 5) {
    $error_message .= "Zip code must be a valid 5-digit number.<br>";
}

//Validate phone number
if ($phone_num === FALSE) {  
    $error_message .= "Phone number is required.<br>";
} else if (strlen($phone_num) != 10) {
    $error_message .= "Invalid phone number. Do not include dashes<br>";
}

//Validate total price
if ($total_price === FALSE) {
    $error_message .= "Price is required.<br>";
} else if ($total_price > 1000) {
    $error_message .= "Error: Package amount can not exceeds $1000. Try again.<br>";
}

//Validate package dimensions
if ($dimension === FALSE) {
    $error_message .= "Package dimensions are required.<br>";
} else if ($dimension > 36) {
    $error_message .= "Error: Package is too large. Package can not exceed 36in.<br>";
}

// SLide 67

if ($error_message != '') {
    include('shipping_page.php');
    exit();
}

// apply formatting
$total_price = '$' . number_format($total_price, 2);

?>


<html>
    <head>
        <title>Shipping Label</title>
        <link rel="stylesheet" href="shipping_results_page.css" />
    <head>

    <body>

    <!--Header Code-->
    <?php include 'header.php'; ?>

        <h1>Shipping Label </h1>
        
        <!-- Photos Container for the Shipping Label-->
        <div class="shipping_label">
            <img src="images/shipLabel.jpg" alt="Top of a USPS Priority Mail shipping label">    
        </div>

        <div class= 'contact_info'>
            <label>FROM: CHAMPAGNEVoyage<br>141 Summit Street<br>Newark New Jersey 07301 </label>
            <br><br>
            <label>SHIP TO:</label>
            <span><?php echo $first_name; ?></span> <span><?php echo $last_name; ?></span>
            <br>
            <span><?php echo $address; ?></span>
            <br>
            <span><?php echo $city; ?></span> <span><?php echo $state; ?></span> <span><?php echo $zip_code; ?></span>
            <br>
            <label> PHONE: </label>
            <span><?php echo $phone_num; ?></span>
            <br>
            <br>
            <label>PACKAGE DIMENSION: </label><br>
            <label>Total Amount:</label>
            <span><?php echo $total_price; ?></span><br>
            <label>Enter your package dimension:</label>
            <span><?php echo $dimension; ?></span> 
        </div>

        <!-- Photos Container for barcode-->
        
        <div class="barcode">
            <img src="images/barcode.jpg" alt="The barcode and order number" width="470" height="159">
        </div>

        <label>Thank you for shopping with us!</label>

        <?php include 'footer.php'; ?>

    </body>
</html>