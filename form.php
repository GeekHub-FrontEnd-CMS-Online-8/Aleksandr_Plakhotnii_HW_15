<?php
$servername = "localhost";// сервер нашей базы данных
$database = "form"; // название нашей базы данных
$username = "root";
$password = "";

// полкючение к базе данных
$conn = mysqli_connect($servername, $username, $password, $database);


// проверка на подключение к базе данных
if (mysqli_connect_error()) {
    echo 'Ошибка подключение к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

$name = "'". $_POST['name'] ."'";
$surname = "'". $_POST['surname'] ."'";
$floor = $_POST['floor'];
$age = $_POST['age'];
$email = "'". $_POST['email'] ."'";

$sql = "INSERT INTO about (name, age, surname) VALUES ($name, $surname, $floor, $email, $age)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>