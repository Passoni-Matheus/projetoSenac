<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--script para uso do bootstrap-->
    <link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--script para uso do fontawesome-->
    <script src="https://kit.fontawesome.com/11e272b574.js" crossorigin="anonymous"></script>
    <script src="font-awesome/js/all.js"></script>

    <!-- Start wowslider HEAD section -->
    <link rel="stylesheet" type="text/css" href="galeria/engine1/style.css">
    <script src="galeria/engine1/jquery.js"></script>
    <!-- End wowslider HEAD section -->

    <!-- Título EXCLUSIVO, não pode ser repetido em outras páginas Máx. 60 caracteres -->
    <title>Senac</title>

    <!-- Breve descrição do site para o Google Máx. 147 carcteres -->
    <meta name="description" content="Desenvolvimento de cursos de tecnologia">

    <!-- Palavras chaves para o Google Máx. indefinido -->
    <meta name="keywords"
        content="cursos, tecnologia, ti, informática, html5, css3, senac, desenvolvimento, web, websites, php, sql, mysql">

    <!-- Ícone -->
    <link rel="short icon" href="download.ico">

    <!-- Metatag responsiva -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">

    <!--link da fonte utilizada no site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

</head>

<body class="container-fluid">
    <!-------------left_sidebar----------->
    <div class="container">
        <div class="left-sidebar">
            <a href="index.php"><img class="leftside-image" src="imagens/senac-logo-0.png" alt="Senac.logo" width="170px"></a>
            <p class="font-sub">Chat rede social de <span style="color: #FFAD5A;">aluno</span> para <span style="color: #FFAD5A;">aluno</span></p>
            <ul class="list-nav">
                <li> <a href="" class="left-sidebar hover">Publicar</a></li>
                <br>
                <li><a href="" class="left-sidebar hover">Notificações</a></li>
                <br>
                <li><a href="" class="left-sidebar hover">Mensagens</a></li>
                <br>
                <li><a href="#" class="left-sidebar hover">Configurações</a></li>
                <br>
            </ul>
            <br>
            <div class="font-info">Site desenvolvido com o propósito de servir como projeto integrador do grupo 1 da turma TI34 do SENAC Lapa Tito. Sem quaisquer intenção de ferir ou manchar a imagem da instituíção.</div>
        </div>
        <!-------------main_content----------->
        <div class="main-content">
            <div class="card">
                <div class=" card-header header-top">
                    <div>Home</div>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar"
                                style="width: 567px;" aria-label="Pesquisar">
                        </form>
                    </nav>
                    <div class="row font-center">
                        <div class="col-xl-5">Para você</div>
                        <div class="col-xl-2">|</div>
                        <div class="col-xl-5">Em alta</div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="imagens/pfp.png" alt="" width="44px"></div>
                        <div class="col-xl-8 nome-usuario">Almerito Afonso</div>
                        <div class="col-xl-3 data">23/06/2023</div>
                        <p class="card-text col-xl-12">Hoje lecionei sobre anatomia humana com meus alunos. <span style="color: #F7941D;">#amodaraula #lecionar </span></p>
                            <div class="col-xl-12"><img class="imagens card" src="imagens/imagens pequenas/aula-biologia.jpg" alt="biolugo"></div>
                            <div class="col-xl-12 hidden">●</div>
                            <div class="col-xl-6 font-center"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Vote</div>
                            <div class="col-xl-6 font-center"><img src="imagens/senac-logo-0 shareicon.png" title="Compartilhar" alt="Compartilhar" width="25" height="20"></div>     
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="imagens/pfp.png" alt="" width="44px"></div>
                        <div class="col-xl-8 nome-usuario" style="color: #4679c0;">João Pereira</div>
                        <div class="col-xl-3 data">23/06/2023</div>
                        <p class="card-text col-xl-12">Desenvolvi um trabalho mostrando o porquê Thomas Edison é um farsante que copiou todo o trabalho de Nikola Tesla.</p>
                            <div class="col-xl-12"><img class="imagens card" src="imagens/imagens pequenas/ideia.jpg" alt="biolugo"></div>
                            <div class="col-xl-12 hidden">●</div>
                            <div class="col-xl-2"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Vote</div>
                            <div class="col-xl-4"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Compartilhar</div>            
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-1 imagem-usuario"><img class="rounded-circle" src="imagens/pfp.png" alt="" width="44px"></div>
                        <div class="col-xl-8 nome-usuario">Almerito Afonso</div>
                        <div class="col-xl-3 data">23/06/2023</div>
                        <p class="card-text col-xl-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                            rerum, molestiae aliquid numquam quos iste sapiente assumenda, nemo aliquam ea vero velit
                            earum omnis, delectus reprehenderit recusandae? Nulla, nobis? Vel?</p>
                            <div class="col-xl-12"><img class="imagens card" src="imagens/imagens pequenas/aula-biologia.jpg" alt="biolugo"></div>
                            <div class="col-xl-12 hidden">●</div>
                            <div class="col-xl-2"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Vote</div>
                            <div class="col-xl-4"><i class="fa-sharp fa-solid fa-caret-up fa-2xl botao-vote"></i>Compartilhar</div>            
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-------------right_sidebar----------->
        <div class="right-sidebar">
            <div class="card-body">
                <div style="text-align: center;">Fulaneiro
                    <i class="fas fa-user"></i>
                </div>
                <br>
                <h3 style="text-align: center;">Eventos</h3>
                <div class="card evento">
                    <img src="imagens/tech.jpg"><br>
                    <div class="evento-titulo"><b>Techevent</b></div>
                    <div>SENAC promove evento tecnológico: palestras, workshops e demonstrações de novas tendências e
                        inovações para impulsionar o setor.
                        Imperdível para profissionais e entusiastas da área! #SENACTechEvent</div>
                </div>
                <br>
                <h3 style="text-align: center;">Novidades</h3>
                <div class="card evento">
                    <img src="imagens/vendingmachine.jpg"><br>
                    <div class="evento-titulo"><b>Máquinas de doces</b></div>
                    <div>SENAC apresenta máquina de doces inovadora: personalização de sabores e opções saudáveis para satisfazer todos os gostos. 
                        Delicie-se com essa nova experiência! #SENACSweetMachine</div>
                </div>
            </div>
        </div>
</body>

</html>