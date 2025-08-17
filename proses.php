<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $kursus = htmlspecialchars($_POST['kursus']);

    echo "<h2>Terima kasih, $nama!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Anda berhasil mendaftar kursus: <strong>$kursus</strong></p>";
    echo "<a href='index.php'>Kembali ke Home</a>";
} else {
    echo "Akses tidak valid!";
}
?>
