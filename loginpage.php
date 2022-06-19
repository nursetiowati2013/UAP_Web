<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link href="gambar/kependudukan.png" rel="shortcut icon">
</head>
<body>

    <!-- Card View Login Page -->
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <h3 class="mb-5 text-center">Login Staff</h3>

                            <form action="" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Username</label>
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan Username" />
                                </div>

                                <div class="form-outline mb-5">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan Password"/>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
                                    <br>
                                    <br>
                                    <a href="index.php">Back to Home Page </a>
                                </div>
                                
                            </form>
                            <?php
                                if(isset($_POST['login'])){
                                    $user=$_POST['username'];
                                    $pass=$_POST['password'];

                                    if($user=='admin' AND $pass=='admin'){
                                        echo "<script>window.alert('anda berhasil login!');
                                        window.location='staff/staffdashboard.php';</script>";
                                    }else{
                                        echo "<script>window.alert('username atau password salah!');
                                        window.location='loginpage.php';</script>";
                                }
                            }
                            ?>
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>

    

    <script src="bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>