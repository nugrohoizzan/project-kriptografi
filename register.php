<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Project Akhir</title>
    <style>
        
        body {
          background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://img.freepik.com/free-photo/man-unlocks-escooter-with-his-mobile-phone_169016-21516.jpg?w=1060&t=st=1700540781~exp=1700541381~hmac=b011c0d81525530d153a3c5138524a554c4f5e995dfe2d25d11d26b852494bc3');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
          
        }
    

    </style>
</head>
<body>

    <?php
    include('koneksi.php');

    $query = "SELECT * FROM login";
    $result = mysqli_query($link, $query);
    ?>
    <div class="wrapper"> 
    
        <form role="form" action="insert_register.php" method="post" class="form-tambah">
        <h3>
        Register
        </h3>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="nama" placeholder="Nama" required>
                    <i class='bx bxs-user'></i>
                </div>
                
            </div>

            <div class="input-box">
                <div class="input-field">
                <i class='bx bx-male-female' ></i>
                    <select name="kelamin" placeholder = "Jenis Kelamin" required>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                    <option>Lainnya</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="text" name="domisili" placeholder="Domisili" required>
                    <i class='bx bxs-home' ></i>
                </div>
            </div>
            
            <p> Sudah Punya Akun? </p>
            <a href="login.php" class="register">Login</a>
            <button class="register" type="submit" name="submit" value="REGISTER"> Register </button>
        </form>
    </div>
    <br>
    
</body>
</html> 