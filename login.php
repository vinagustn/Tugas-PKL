<?php
    session_start();

    include 'config.php';

    $connect = mysqli_connect('localhost','root','','rekap_data');

    if (isset($_POST["login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];


        $result = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $check = mysqli_num_rows($result);

        if ($check > 0) {
            echo "
                    <script>
                        alert('Login Berhasil');
                        document.location.href = 'legalisir/index.php';
                    </script>
                ";
        }else{
            echo "
                    <script>
                        alert('Username atau Password Salah');
                        document.location.href = 'login.php';
                    </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg"  style="background-color: #8BC34A">
    <div class="container-fluid position-relative">
        <a class="navbar-brand text-wrap" href="#" style="font-family: 'Goudy Old Style'; font-weight: bold; font-size: x-large">
            <img src="/img/capil.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center me-2">
            SISTEM INFORMASI LEGALISIR (SILEGAL) DINDUKCAPIL KAB. BANYUMAS
        </a>
    </div>
</nav>

    <section class="vh-50">
        <div class="container h-100 py-4">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-7 col-lg-5 col-xl-5 py-5 rounded-4" style="background-color: #D9D9D9">
              <form action="" method="post">
                <div class="divider d-flex align-items-center my-4">
                    <h2 class="text-center fw-bold mx-0 mb-0">MASUK</h2>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example13">Email</label>
                  <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example23">Password</label>
                  <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                </div>

                <!-- Submit button -->
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>