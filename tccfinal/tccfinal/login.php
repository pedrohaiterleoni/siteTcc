<?php

session_start();
session_regenerate_id(true); 
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        include("conexaoBD.php");

        try {            
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            

            //verificando se o RA informado já existe no BD para não dar exception
            $stmt = $pdo->prepare("select * from usuarios where email = :email and senha = :senha");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->execute();

                $rows = $stmt->rowCount();

                if ($rows > 0) {

                    $row = $stmt->fetch();
                    $_SESSION["login"] = $email;
                    $_SESSION["logou"] = true;
                    $_SESSION["user"] =  $row["nomeusuario"]; 

                    header("location:index.php");
                    echo "<span id='sucess'>Sucesso!</span>";
                } else {
                    echo "Email ou senha incorretas!";
                }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TccBS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background: #1B2430;">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><a href="index.php" style="color: #d0d0d0;font-size: 21px;font-family: 'Geometos Neue';text-decoration: none;margin: 0px;margin-right: 0px;margin-top: 0;padding: 0px;margin-left: 10px;"><br><span style="color: rgb(208, 208, 208);">Connect house&nbsp;</span><br><br></a></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                    <div class="d-flex flex-column justify-content-center" id="login-box" style="background: rgb(81,85,126);box-shadow: 10px 11px 20px 1px rgb(19,19,20);">
                        <div class="login-box-header" style="background: #51557E;">
                            <h4 style="color: rgb(238,238,238);margin-bottom: 0px;font-weight: 400;font-size: 27px;">Entrar</h4>
                        </div>
                        <div class="login-box-content" style="background: #51557E;">
                            <div class="fb-login box-shadow" style="border-width: 50px;"><a class="d-flex flex-row align-items-center social-login-link" href="#" style="border-radius: 18px;"><i class="fa fa-facebook" style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Faça login com o Facebook</a></div>
                            <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom:10px;" href="#"><i class="fa fa-google" style="color:rgb(255,255,255);width:56px;"></i>Faça login com o Google</a></div>
                        </div>
                        <div class="d-flex flex-row align-items-center login-box-seperator-container">
                            <div class="login-box-seperator"></div>
                            <div class="login-box-seperator-text">
                                <p style="margin-bottom: 0px;padding-left: 10px;padding-right: 10px;font-weight: 400;color: rgb(238,238,238);">ou</p>
                            </div>
                            <div class="login-box-seperator"></div>
                        </div>
                        <div class="email-login" style="background: #51557E;"><input type="email" name="email" class="email-imput form-control" style="margin-top:10px;" required="true" placeholder="Email" minlength="6" maxlength="60"><input type="password" class="password-input form-control" style="margin-top:10px;" required="true" name="senha" placeholder="Senha" minlength="6" maxlenght="20"></div>
                        <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit" style="background: rgb(49,112,62);">Entrar</button>
                            <div class="d-flex justify-content-between">
                                <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input" type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label class="form-check-label" for="formCheck-1"><span class="label-text" style="color: rgb(238,238,238);">Lembrar de mim</span></label></div><a id="forgot-password-link" style="color: rgb(0,188,214);" href="#">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                            <p style="margin-bottom: 0px;color: rgb(238,238,238);">Ainda não tem uma conta?<a id="register-link" href="cadastrar.php" style="color: rgb(0,188,214);">Faça a sua!</a></p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
