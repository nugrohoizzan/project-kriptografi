
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Project Akhir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
          background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://img.freepik.com/free-photo/man-unlocks-escooter-with-his-mobile-phone_169016-21516.jpg?w=1060&t=st=1700540781~exp=1700541381~hmac=b011c0d81525530d153a3c5138524a554c4f5e995dfe2d25d11d26b852494bc3');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
          
        }
    </style>

</head>
<center>
    <br>
    
    <h1 style="color: #ffffff">Pusat Pengaduan Pengemudi</h1>
</center>
<body >

<div class="wrapper"> 
    
    <form role="form" action="cek_login.php" method="post" class="form-tambah">
    <h3>
    Login
    </h3>
        <div class="input-box">
            <div class="input-field">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
        </div>
        
        <p> Belum Punya Akun? </p>
        <a href="register.php" class="register">Register</a>
        <button class="register" type="submit" name="submit" value="REGISTER"> LOGIN </button>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>

</body>
</html>