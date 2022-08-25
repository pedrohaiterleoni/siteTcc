<?php 

session_start();

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


    <header style="height: 102px;">
        <nav class=" navbar navbar-light navbar-expand-md fixed-top py-3" style="margin-top: 17px;margin-right: 17px;margin-left: 17px;background: #1b2430;box-shadow: 5px 5px 13px 3px rgba(0,0,0,0.42);border-radius: 20px;">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="color: #d0d0d0;font-family: 'Geometos Neue';">Connect house</span></a><button data-bs-toggle="collapse" class="navbar-toggler"  data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="#" style="color: #d0d0d0;">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testemunhas" style="color: #d0d0d0;">Testemunhas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contato" style="color: #d0d0d0;">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="produtos.html"><span style="color: rgb(208, 208, 208);">Produtos</span></a></li>
                    </ul>
   <?php
     if ($_SESSION["logou"] == false)
     {
        echo "<button class='btn btn-primary' type='button' style='border-style: none;border-color: var(--bs-blue);border-radius: 10px;background: #816797;'><a href='login.php' style='color: #ffff;text-decoration: none;height: 36px;width: 66px;' id='log'>Entrar</a></button>";

     }  
     else{
        echo  "<span style='color: #d0d0d0;'>" . $_SESSION["user"] . "</span>";
        echo "&nbsp&nbsp&nbsp";
        echo "<button class='btn btn-primary' type='button' style='border-style: none;border-color: var(--bs-blue);border-radius: 10px;background: #f26257;'><a href='logout.php' style='color: #ffff;text-decoration: none;height: 36px;width: 66px;' id='log'>Sair</a></button>";
     }            
                
?>
            </div>
        </nav>
    </header>
    <main>
        <div class="p-5 mb-4 round-3" style="border-radius: 50px;margin-right: 20px;margin-left: 20px;background: #816797;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bold">O que fazemos</h1>
                        <p class="col-md-8 fs-4">Bem-vindo à&nbsp;<span style="font-size: 29px;font-weight: bold;color: var(--bs-teal);">Connect Technology</span>. Estamos dedicados a oferecer a você o melhor que sua casa pode oferecer, com foco em automação residencial.<br></p>
                    </div>
                    <div class="col-md-6 col-xl-6 offset-xl-0 d-flex flex-grow-0 justify-content-center align-items-center align-content-center" style="margin-right: 0;margin-left: 0;"><img class="justify-content-center align-items-center align-content-center" src="assets/img/connect-removebg-preview.png" style="margin-right: 0;margin-left: 0;height: 312px;"></div>
                </div>
            </div>
        </div>

        <div>
        <?php
            if ($_SESSION["on"] == false)
            {
                $_SESSION["on"] == true;
                echo "<button class='btn btn-primary' type='button' style='border-style: none;border-color: var(--bs-blue);border-radius: 10px;background: #816797;'><a href='index.php/' style='color: #ffff;text-decoration: none;height: 36px;width: 66px;' id='casa'>Ligar</a></button>";

            }  
            else{
                echo "<button class='btn btn-primary' type='button' style='border-style: none;border-color: var(--bs-blue);border-radius: 10px;background: #f26257;'><a href='index.php/' style='color: #ffff;text-decoration: none;height: 36px;width: 66px;' id='log'>Desligar</a></button>";
            }            
                        
        ?>
        </div>


        <div class="p-5 mb-4 round-3" style="border-radius: 50px;margin-right: 20px;margin-left: 20px;background: linear-gradient(6deg, var(--bs-red), var(--bs-purple) 100%), #816797;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bold">Onde nasceu?</h1>
                        <p class="col-md-8 fs-4">Fundada em <span style="font-size: 29px;color: rgba(255,245,0,0.81);font-weight: bold;">2020</span>&nbsp;por Guilherme Adriano, Rebeca Furtado, Giovanna Schiabel e Pedro Haiter Leoni, a Connect Technology percorreu um longo caminho desde o seu início em <span style="font-size: 29px;color: rgba(255,245,0,0.81);font-weight: bold;">Limeira.</span>&nbsp;Estamos dedicados a oferecer a você o melhor que sua casa pode oferecer, com foco em automação residencial&nbsp;&nbsp;<span style="text-decoration: underline; color: rgb(189, 193, 198);">🏠</span><a href="https://emojiterra.com/pt/lar/"><span style="text-decoration: underline; color: rgb(138, 180, 248);">🏡</span></a><br></p>
                    </div>
                    <div class="col-md-6 col-xl-6 offset-xl-0 d-flex flex-grow-0 justify-content-center align-items-center align-content-center" style="margin-right: 0;margin-left: 0;background: #8b59e6;border-radius: 50px;">
                        <p class="col-md-8 fs-4" style="margin: 0px;margin-bottom: 0;padding: 15px;text-align: center;">Quando nós começamos, nossa paixão pela automação residencial nos levou a começar um projeto fora de nossa rotina, para que a <strong><span style="color: rgba(20, 255, 0, 0.84);">Connect Technology</span></strong> possa oferecer a você uma casa totalmente inteligente. Agora atendemos clientes em todo Brasil<a name="testemunhas"></a><br></p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: auto;height: 1px;margin-right: 20px;margin-left: 20px;color: #d0d0d0;">
        <div class="container py-4 py-xl-5" style="background: transparent;border-radius: 50px;padding: 25px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2><span style="color: rgb(208, 208, 208);">O que nossos clientes estão dizendo</span></h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <div class="col">
                    <div>
                        <p class="bg-light border rounded border-0 border-light p-4">Perfeito. Foi muito fácil usar, ativar e instalar. Nunca tive problemas. Perfeito, nota 10!</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/image.jpg">
                            <div>
                                <p class="fw-bold text-primary mb-0"><span style="color: rgb(208, 208, 208);">- Joana Esther Larissa Vieira</span></p>
                                <p class="text-muted mb-0"><span style="color: rgb(127, 136, 145);">Professora</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p class="bg-light border rounded border-0 border-light p-4">Eu e minha família estamos com a Connect há muito tempo e não pretendemos mudar tão cedo.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/image%20(2).jpg">
                            <div>
                                <p class="fw-bold text-primary mb-0"><span style="color: rgb(208, 208, 208);">- Felipe Joaquim Moreira</span></p>
                                <p class="text-muted mb-0"><span style="color: rgb(127, 136, 145);">Engenheiro</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p class="bg-light border rounded border-0 border-light p-4">Eu tenho automatizado minha casa com a Connect há muito tempo e estou satisfeita!</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/avatar-28a8b626d0382a1ea9add1a23950f41e.jpg">
                            <div>
                                <p class="fw-bold text-primary mb-0"><span style="color: rgb(208, 208, 208);">- Tatiane Julia Drumond</span></p>
                                <p class="text-muted mb-0"><span style="color: rgb(127, 136, 145);">Médica</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: auto;height: 1px;margin-right: 20px;margin-left: 20px;color: #d0d0d0;">
        <div class="container py-4 py-xl-5">
            <p style="text-align: center;color: #d0d0d0;font-size: 29px;background: var(--bs-blue);padding: 5px;border-radius: 23px;"><strong><span style="color: rgb(255, 255, 255);">&nbsp;O que os números nos dizem.</span></strong></p>
            <div class="text-center text-white-50 bg-primary border rounded border-0 p-3" style="border-radius: 23px;">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col">
                        <div class="p-3">
                            <h4 class="display-5 fw-bold text-white mb-0">1000+</h4>
                            <p class="mb-0">Casas Conectadas</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h4 class="display-5 fw-bold text-white mb-0">200+</h4>
                            <p class="mb-0">Famílias satisfeitas</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h4 class="display-5 fw-bold text-white mb-0">0</h4>
                            <p class="mb-0">Reclamações no Reclame Aqui.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h4 class="display-5 fw-bold text-white mb-0">80+</h4>
                            <p class="mb-0">Chamadas por dia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><a name="contato"></a>
        <hr style="width: auto;height: 1px;margin-right: 20px;margin-left: 20px;color: #d0d0d0;">
        <section class="position-relative py-4 py-xl-5" style="margin-right: 10px;margin-left: 10px;">
            <div class="container position-relative" style="background: linear-gradient(-125deg, var(--bs-pink), var(--bs-purple)), var(--bs-purple);padding: 20px;border-radius: 50px;">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2><span style="color: rgb(255, 255, 255);">Entre em contato</span></h2>
                        <p class="w-lg-50"><span style="color: rgb(255, 255, 255);">Preencha o formulário que em breve entraremos em contato com você!</span></p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="d-flex flex-column justify-content-center align-items-start h-100">
                            <div class="d-flex align-items-center p-3">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                    </svg></div>
                                <div class="px-2">
                                    <h6 class="mb-0"><span style="color: rgb(255, 255, 255);">Telefone</span></h6>
                                    <p class="mb-0"><span style="color: rgb(255, 255, 255);">(53) 2970-1487</span><br></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center p-3">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                    </svg></div>
                                <div class="px-2">
                                    <h6 class="mb-0"><span style="color: rgb(255, 255, 255);">Email</span></h6>
                                    <p class="mb-0"><span style="color: rgb(255, 255, 255);">connectthouse@gmail.com</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center p-3">
                                <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                        <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z"></path>
                                    </svg></div>
                                <div class="px-2">
                                    <h6 class="mb-0"><span style="color: rgb(255, 255, 255);">Localização</span></h6>
                                    <p class="mb-0"><span style="color: rgb(254, 254, 254);">Limeira</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div>
                            <form class="p-3 p-xl-4" action="enviar.php" method="post" style="background: rgba(111,66,193,0.48);border-radius: 30px;">
                                <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                                <div class="mb-3"><textarea class="form-control" id="message-1" name="mensage" rows="6" placeholder="Digite aqui sua mensagem"></textarea></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="border-radius: 15px;">Enviar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center bg-dark" style="background: rgb(27,36,48);">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><a class="link-light" href="#">Web design</a></li>
                <li class="list-inline-item me-4"><a class="link-light" href="#">Development</a></li>
                <li class="list-inline-item"><a class="link-light" href="#">Hosting</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
            <p class="text-muted mb-0">Copyright © 2022 ConnectTech</p>
            <p class="text-muted mb-0">Para o download dos nossos aplicativos entre em contato.</p>
        </div>
    </footer>
    <div class="topo"></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>

<?php 
if ($_SESSION["logou"] == false) {

    echo "<span style='color:red;font-weight: bold';>Acesso não autorizado!</span>
    <hr>
    <a href='login.php'>Login</a>";

} else { 
    echo "";
}
?>
    
