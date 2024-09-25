<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kritik</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

      <style>
    body { 
      background-image: url('assets/images/carier.jpeg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

    textarea {
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #F9F5EB;
    font-size: 16px;
    resize: none;
}
  </style>
    </head>
    <body>
        <?php
        
            session_start(); 
            //echo $_SESSION['username'];

            if(empty($_SESSION['username'])) {
                echo "
                    <script>
                        alert('Anda belum login. Silakan login terlebih dahulu.');
                        document.location.href = 'login.php';
                    </script>
                ";
            }
        ?>

        <section>
        <style scoped>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .navbar-1-1.navbar-light .navbar-nav .nav-link {
            color: #027A0F;
            transition: 0.3s;
        }

        .navbar-1-1.navbar-light .navbar-nav .nav-link.active {
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started {
            border-radius: 20px;
            padding: 12px 30px;
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started-blue {
            background-color: #027A0F;
            transition: 0.3s;
        }

        .navbar-1-1 .btn-get-started-blue:hover {
            background-color: #027A0F;
            transition: 0.3s;
        }
        </style>
        <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body"
        style="font-family: Poppins, sans-serif">
        <div class="container" style="color :#027A0F">
            <div>
            <?php echo $_SESSION['username'];?>
        </div>
            <!-- <div>
            <img class="position-absolute d-lg-block d-none hero-right" style="width: 50px;"
                src="assets/img/logo.png"
                alt="logo" />
            </div> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="color :#027A0F">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link px-md-4" href="homepage.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-md-4 active" aria-current="page" href="kritik.php">Saran</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-md-4" href="review.php">Pengalaman</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-outline-success" href="logout.php">Logout</a>
            </div>
            </div>
        </div>
        </nav>
        <center>
            <h1 style="color: #F5F5F5;">Kritik</h1>
            <p style="color: #F5F5F5;">Kritik dan Saran silahkan masukkan disini</p>
        </center>

        <div align="center">
            <form action="enkripsi_kritik.php" method="POST">
                <textarea name="comment" id="Textarea1" rows="10" cols="50" placeholder ="Ketik disini..."></textarea>
                <br>  <br>
                <button type="submit" class="btn btn-outline-light">Kirim</button> <br>
            </form>
            
        </div>

        
    </body>
</html>