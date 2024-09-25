<?php
    session_start();
    include "koneksi.php";

    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $domisili = $_POST['domisili'];

    $query = mysqli_query($link,"INSERT INTO login(nama, kelamin, username, email, password, domisili) VALUES('$nama','$kelamin','$username','$email','$password','$domisili')");

    // $cek = mysqli_num_rows($query);

    if($query){
        echo "
            <script>
                alert('Pendaftaran berhasil, silakan login');
                document.location.href = 'login.php';
            </script>
        ";

        }
    else {
            echo "proses gagal";
        }
?>