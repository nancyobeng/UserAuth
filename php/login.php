<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email']; //finish this line
    $password = $_POST['password']; //finish this

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $filename = fopen("../storage/users.csv", "r");
    while(!feof($filename)){
        $data = fgetcsv(($filename));
        if($data[1] == $email && $data[2] == $password){
            $_SESSION['username'] = $data[0];
            header("Location: ../dashboard.php");
            exit();
        }
    }
    fclose($filename);
}

echo "HANDLE THIS PAGE";

