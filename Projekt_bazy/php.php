
<?php

   require 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);


// $create = "INSERT INTO users (username, passwd, email) VALUES ('$login', '$hashedPassword', '$email')";

// $zapytanie = "SELECT username FROM users";

// $query = mysqli_query($conn, $create);


// if (!$query) {
//     printf("error: %s\n", mysqli_error($conn));
//   }else {
//       echo 'done.';
//   }


$create = $conn->prepare("INSERT INTO users (username, passwd, email) VALUES (?, ?, ?)");
$create->bind_param('sss', $login, $hashedPassword, $email);

if ($create->execute()) {
    echo 'Rejestracja zakończona sukcesem.';
} else {
    echo 'Błąd podczas rejestracji: ' . $conn->error;
}

$create->close();

mysqli_close($conn);

?>