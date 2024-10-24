<?php

if (isset($_POST['email']) || isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'bagaskaradwiprasetia@gmail.com' && $password == 'bagas30'){
        header('Location: ./../dashboard.php');
    }
    else{
        echo "error";
    }
}
?>