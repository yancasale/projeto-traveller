<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Tags meta SEO Geral -->
    <title>Traveller - Início</title>
    <meta name="description" content="">
    <meta name="author" content="Yan Casale">
    <meta name="robots" content="index">
    <link rel="shortcut icon" href="favicon.ico" type="image/ico">
    <!-- Tags meta Google+ / Schema.org -->
    <meta itemprop="name" content="Empresa Traveller - Venha viajar conosco! ">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- Tags meta Open Graph Facebook -->
    <meta property="og:title" content="Empresa Traveller - Venha viajar conosco! ">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="SOS Terra">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <!-- Tags meta Twitter -->
    <meta name="twitter:title" content="Empresa Traveller - Venha viajar conosco! ">
    <meta name="twitter:description" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="">
</head>

<body>
    <header>
        <nav class="header-navbar" id="inicio">
            <div class="container-navbar">
                <div class="navbar-item links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>

                <div class="navbar-item icones">
                    <a href="./login.html"><i class="fas fa-sign-in-alt"></i> Entrar</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <a href="#" id="ajuda"><i class="fas fa-question-circle"></i> Ajuda</a>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
                                <i class="fas fa-universal-access"></i> Acessibilidade
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item text-black acessibilidadeMenu__item largerFont"
                                        href="#">Aumentar fonte</a></li>
                                <li><a class="dropdown-item text-black acessibilidadeMenu__item bold" href="#">Textos em
                                        negrito</a></li>
                                <li><a class="dropdown-item text-black acessibilidadeMenu__item contraste"
                                        href="#">Cores em alto contraste</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="header-stickytop" id="stickytop">
            <div class="container-stickytop">
                <div class="sticky-top-item sticky-titulo">
                    <a href="#">Traveller</a>
                </div>

                <button id="btn-mobile">
                    <span id="hamburger"></span>
                </button>

                <div class="sticky-top-item sticky-links">
                    <a href="./index.html" class="active">Início</a>
                    <a href="./hospedagem.html">Hospedagem</a>
                    <a href="./carro.html">Carro</a>
                    <a href="./gastronomia.html">Gastronomia</a>
                    <a href="./cultura.html">Cultura</a>
                    <a href="./entretenimento.html">Entretenimento</a>
                </div>
        </nav>

        <section class="header-content-container">
            <div class="header-content">
                <div class="content-item segundo">
                    <h2 class="text-white">Preparado para a viagem dos seus <strong>sonhos ?</strong></h2>

                    <form action="">
                        <input type="text" class="buscar" placeholder="Aonde você quer ir ?">
                        <button class="btn btn-outline-light">Buscar</button>
                    </form>
                </div>

                <div class="content-item primeiro ">
                    <img src="./images/teste11.svg" width="800"
                        alt="Ilustração de um turista com uma camera na mão, e do lado dele um celular mostrando pontos de referência">
                </div>
            </div>
        </section>

        <div class="custom-shape-divider-bottom-1631945692">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </header>

    <main class="main-container">
        <section class="secao-apresentacao">
            <div class="container-apresentacao">
                <div class="apresentacao-img">
                    <img src="./images/Journey-bro.svg"
                        alt="Ilustração de uma mulher olhando a cidade no alto de uma montanha">
                </div>

                <div class="apresentacao-text">
                    <h3>Um pouco sobre nós</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo iure adipisci, provident iusto
                        obcaecati odit quam ratione error rerum voluptates eum voluptatem illo veniam similique omnis
                        voluptatum beatae earum quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. At,
                        dolor!
                        Adipisci reprehenderit, sed dolor eveniet atque qui ipsa reiciendis earum rem, autem facere,
                        nisi
                        suscipit eius inventore incidunt aspernatur molestias.</p>
                </div>
            </div>
        </section>

        <section class="secao-apresentacao bg-cinza">
            <div class="container-apresentacao">
                <div class="apresentacao-text servicos">
                    <h3>Porque usar nossos serviços?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo iure adipisci, provident iusto
                        obcaecati odit quam ratione error rerum voluptates eum voluptatem illo veniam similique omnis
                        voluptatum beatae earum quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. At,
                        dolor!
                        Adipisci reprehenderit, sed dolor eveniet atque qui ipsa reiciendis earum rem, autem facere,
                        nisi
                        suscipit eius inventore incidunt aspernatur molestias.</p>
                </div>

                <div class="apresentacao-img">
                    <img src="./images/World-bro.svg" alt="Ilustração de um homem viajando em um carro">
                </div>
            </div>
        </section>

        <section class="secao-parceiros">
            <h3>Conheça nossos parceiros</h3>
            <div class="parceiros-logo">
                <img src="./images/logos-parceiros/airbnb.svg" width="200px" alt="Logo Airbnb" title="Logo Airbnb">
                <img src="./images/logos-parceiros/localiza-hertz-logo.svg" width="300px" alt="Logo Localiza"
                    title="Logo Localiza">
                <img src="./images/logos-parceiros/movida-logo.svg" width="200px" alt="Logo Movida" title="Logo Movida">
                <img src="./images/logos-parceiros/avis-1.svg" width="200px" alt="Logo Avis" title="Logo Avis">
            </div>
        </section>
    </main>


    <footer>
        <p class="text-white">Todos os direitos reservados - Projeto Traveller</p>
    </footer>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- Sticky top navbar -->
    <script src="./js/stickytop.js" type="text/javascript"></script>
    <!-- Geolocalização -->
    <script src="./js/geolocalizacao.js" type="text/javascript"></script>
    <!-- Menu Hamburger -->
    <script src="./js/hamburger.js" type="text/javascript"></script>
    <!-- Loader -->
    <script src="./js/loader.js" type="text/javascript"></script>
    <!-- Acessibilidade Togle -->
    <script src="./js/acessibilidade.js" type="text/javascript"></script>

</body>

</html>

