<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Buat Akun</h2>
                        <div class="form-group">
                            <label for="username"><p>Username</p></label>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Masukan Username"/>
                        </div> 
                        <div class="form-group">
                              <label for="username"><p>Password</p></label>
                            <input type="text" class="form-input" name="password" id="password" placeholder="Masukan Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <label for="username"><p>Nama Lengkap</p></label>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nama Lengkap"/>
                        </div> 
                        <div class="form-group">
                            <label for="username"><p>Email</p></label>
                            <input type="email" class="form-input" name="email" id="email" placeholder="Masukan Email"/>
                        </div>
                        <div class="form-group">
                            <label for="username"><p>Alamat</p></label>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Masukan Alamat"/>
                        </div> 
                        <div class="form-group">
                        <label for="jk"><p>Jenis Kelamin</p></label>         
                         <select required="" name="jenis_kelamin" class="form-input" id="jk">
                            <option value=""></option>
                            <option value="PRIA">PRIA</option>
                            <option value="WANITA">WANITA</option>

                         </select>
                    </div>
                        <div class="form-group">
                            <label for="username"><p>Nomor Telepon</p></label>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Masukan Nomor Telepon"/>
                        </div> 
                    
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        SUDAH PUNYA AKUN? <a href="login.php" class="loginhere-link">Login</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>