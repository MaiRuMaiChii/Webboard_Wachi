<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="mt-3">Webboard Shabu</h1>
    
    <?php
        include "nav.php"
    ?>
<div class="row mt-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                <?php
                if (isset($_SESSION['error'])) { 
                echo "<div class='alert alert-danger'>ชื่อรหัสผ่านผิด</div>";
                unset($_SESSION['error']);
                 }
                ?>
                <div class="card text-dark bg-light ">
                    <div class="card-header">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-label">Login</label>
                                <input type="text" class="form-control" name="login" id="login" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="pwd" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="pwd" required>
                                    <span class="input-group-text" onclick="password_show_hide()">
                                        <i class="bi bi-eye-fill" id="show_eye"></i>
                                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                                
                            </div>
                            <div class="form-group text-center mt-3">
                                <input type="submit" value="Login" class="btn btn-success btn-sm">
                                <input type="reset" value="Reset" class="btn btn-danger btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-2"><a href="register.php">สมัครสมาชิก</a></div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        </div>
    <script>
        function password_show_hide(){
            let x=document.getElementById("pwd");
            let show_hide=document.getElementById("show_eye");
            let hide_eye=document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if(x.type==="password"){
                x.type="text";
                show_eye.style.display="none";
                hide_eye.style.display="block";
            }else{
                x.type="password"
                show_eye.style.display="block";
                hide_eye.style.display="none";
            }
        }
    </script>
</body>
</html>