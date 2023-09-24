<?php

require 'connect.php';

$email = $_POST['email'];
$submitted_password = $_POST['password'];

$dpasswd = "SELECT passwd FROM users WHERE email = ?";

$stmt = $conn->prepare($dpasswd);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($submitted_password, $hashed_password)) {
        echo "Hasło jest poprawne.";
    } else {
        echo "Nieprawidłowe hasło.";
        echo $hashed_password;
        echo $submitted_password;
    }
} else {
    echo "Nie ma takiego adresu e-mail w bazie danych.";
}



$stmt->close();
mysqli_close($conn);

?>