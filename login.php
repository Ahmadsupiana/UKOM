<?php ob_start() ?>
<?php
  include "koneksi/koneksi.php";
   
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KEGIATAN PRAMUKA TINGKAT SMA - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-6 shadow-lg my-4">
                 <div class="card-body">
                  <!--  <center><img class="mt-2" src="img/img/smk.png" alt="Virus" width="200px" height="150px"></center> -->

                   <div class="card-body" >                        

                       <!-- Nested Row within Card Body -->

                       <div class="row">                           

                        <div class="col-lg-3 d-none d-lg-block bg-login"></div>

                        <div class="col-lg-6">
                            <!-- <div class="p-5"> -->
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><B>WEB SISTEM INFORMASI PESERTA DAN NILAI PESEERTA</B></h1>
                                </div>
                                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
                                <b>Login </b>
                            </button>
                        </div>
                </form>
                            <!--     <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="NIP">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                        </div>
                                    </div>
                                    <a href="halaman.php" class="btn btn-success btn-user btn-block">
                                        Login
                                    </a>
                                </form> -->
                            </div>
                        </div>
                    </div>
                  <!--   <footer>
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <HR>
                                <span>Copyright &copy; 2021</span>
                            </div>
                        </div>
                    </footer> -->
                </div>

            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="login.js"></script>

<script src="plugins/alert.js"></script>
</body>

</html>

<?php





if (isset($_POST['btnLogin'])) {  
    //anti inject sql
    $username=mysqli_real_escape_string($koneksi,$_POST['username']);
    $password=mysqli_real_escape_string($koneksi,$_POST['password']);

    //query login
    $sql_login = "SELECT * FROM pengguna WHERE BINARY username='$username' AND password='$password'";
    $query_login = mysqli_query($koneksi, $sql_login);
    $data_login = mysqli_fetch_array($query_login,MYSQLI_BOTH);
    $jumlah_login = mysqli_num_rows($query_login);


    if ($jumlah_login ==1 ){
        session_start();
        $_SESSION["ses_id"]=$data_login["id_pengguna"];
        $_SESSION["ses_nama"]=$data_login["nama_pengguna"];
        $_SESSION["ses_username"]=$data_login["username"];
        $_SESSION["ses_password"]=$data_login["password"];
        $_SESSION["ses_level"]=$data_login["level"];
    
        echo "<script>
            Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'halaman/halaman.php';}
            })</script>";
        }else{
        echo "<script>
            Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value)
                {window.location = 'login.php';}
            })</script>";
        }
        }