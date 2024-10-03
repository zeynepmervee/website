<?php
// Veritabanı bağlantısı yapılacak
$servername = "localhost";
$username = "kullanici_adi";
$password = "sifre";
$dbname = "veritabani_adi";

// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Post isteğinden gelen verileri al
$email = $_POST['email'];
$job = $_POST['job'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Veritabanına ekle
$sql = "INSERT INTO users (email, job, password) VALUES ('$email', '$job', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
