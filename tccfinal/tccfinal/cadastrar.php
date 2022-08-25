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
                <div class="col"><a href="index.php" style="color: #d0d0d0;font-size: 21px;font-family: 'Geometos Neue';text-decoration: none;margin: 0px;margin-top: 0px;padding: 0px;margin-left: 10px;"><br><span style="color: rgb(208, 208, 208);">Connect house&nbsp;</span><br><br></a></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                    <div class="d-grid d-flex flex-column justify-content-center" id="login-box" style="background: rgb(81,85,126);box-shadow: 10px 11px 20px 1px rgb(19,19,20);margin-bottom: 50px;">
                        <div class="login-box-header" style="background: #51557E;">
                            <h4 style="color: rgb(238,238,238);margin-bottom: 0px;font-weight: 400;font-size: 27px;">Cadastro</h4>
                        </div>
                        <div class="login-box-content" style="background: #51557E;">
                            <div class="fb-login box-shadow" style="border-width: 50px;"><a class="d-flex flex-row align-items-center social-login-link" href="#" style="border-radius: 18px;"><i class="fa fa-facebook" style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Faça cadastro com o Facebook</a></div>
                            <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" style="margin-bottom:10px;" href="#"><i class="fa fa-google" style="color:rgb(255,255,255);width:56px;"></i>Faça cadastro com o Google</a></div>
                        </div>
                        <div class="d-flex flex-row align-items-center login-box-seperator-container">
                            <div class="login-box-seperator"></div>
                            <div class="login-box-seperator-text">
                                <p style="margin-bottom: 0px;padding-left: 10px;padding-right: 10px;font-weight: 400;color: rgb(238,238,238);">ou</p>
                            </div>
                            <div class="login-box-seperator"></div>
                        </div>
                        <div class="email-login" style="background: #51557E;">
                        <input type="text" class="email-imput form-control" style="margin-top: 10px;" required="true" placeholder="Nome " minlength="6" maxlength="60" name="nome">
                        <input type="number" class="email-imput form-control" style="margin-top:10px;" required="true" placeholder="Idade" min="18" max="60" step="1" name="idade">
                        <input type="tel" class="email-imput form-control" style="margin-top:10px;" required="true" placeholder="Telefone" minlength="6" maxlength="60" name="telefone">
                        <input type="email" class="password-input form-control" style="margin-top:10px;" required="true" placeholder="Email" minlength="6" maxlenght="20" name="email">
                        <input type="password" class="password-input form-control" style="margin-top:10px;" required="true" placeholder="Senha" minlength="6" maxlenght="20" name="senha"></div>
                        <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
                        <button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit" style="background: rgb(49,112,62);" value="Cadastrar">Enviar</button></div>
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

<?php

   //inserindo dados

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        include("conexaoBD.php");

        try {            
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];,
            

            $stmt = $pdo->prepare("insert into usuarios (nomeusuario, idade, telefone, email, senha) values(:nomeusuario, :idade, :telefone, :email, :senha)");
            $stmt->bindParam(':nomeusuario', $nome);
            $stmt->bindParam(':idade', $idade);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            echo "<div style='background-color: deeppink; border-radius: 14px; padding: 50px'>
                        Aluno Cadastrado! 
                        <br> 
                        <a href='login.php'>Entrar</a>
                  </div>";
                
            
            } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>