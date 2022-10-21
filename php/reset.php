<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['password']; //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    $filename = fopen("../storage/users.csv", "r");
    while(!feof($filename)){
        $data = fgetcsv(($filename));
        if($data[1] == $email){
            $data[2] = $password;
            fclose($filename);
            $filename = fopen("../storage/users.csv", "w");
            fputcsv($filename,$data);
            fclose($filename);
            echo "Password reset complete";
            header("Location: ../forms/login.html");
            exit();

        }
    }
    echo "User({$email}) does not exist";
    fclose($filename);
}



