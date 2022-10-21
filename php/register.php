<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $form_details = array(
        'fullname' => $username,
        'email' => $email,
        'password' => $password
    );

    // $filename = "../storage/users.csv";
    $filename = fopen("../storage/users.csv", "a");
    fputcsv($filename,$form_details);
    fclose($filename);
    echo "User registered succesfully";
    // echo "OKAY";
}
// echo "HANDLE THIS PAGE";


