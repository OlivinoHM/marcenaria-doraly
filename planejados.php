<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Planejados - Doraly Móveis</title>
        <meta name="Resource-type" content="Document" />
        <link rel="stylesheet" type="text/css" href="css/jquery.planejados.css" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/cabecalho.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/breadcrumb.css" type="text/css" />
        <link rel="stylesheet" href="css/planejados.css" type="text/css" />
        <link href="//db.onlinewebfonts.com/c/a4f6ea3c821d0ee0d7ceaf58004371ea?family=Orator+Std+Medium" rel="stylesheet" type="text/css"/>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16"/>
        <link rel="manifest" href="img/favicon/manifest.json"/>
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="theme-color" content="#ffffff" />
        <!--[if IE]>
            <script type="text/javascript">
                var console = { log: function() {} };
            </script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/scroll.planejados.js"></script>
        <script type="text/javascript" src="js/jquery.planejados.js"></script>
        <script type="text/javascript" src="js/reset.scroll.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    anchors: ['home laca branca', 'home', 'cozinha madeirado', 'cozinha cinza', 'rack nichos'],
                    loopBottom: true,
                    scrollOverflow: true,
                    navigation: true,
                    navigationPosition: 'right',
                    easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
                    scrollOverflow: true,
                    scrollOverflowReset: true,
                    scrollingSpeed: 1000,
                    afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
                        console.log("slideLoad--" + "anchorLink: " + anchorLink + " index: " + index + " slideAnchor: " + slideAnchor + " slideIndex: " + slideIndex);
                    },
                    onSlideLeave: function(anchorLink, index, slideIndex, direction){
                        console.log("----------------");
                        console.log("onSlideLeave--" + "anchorLink: " + anchorLink + " index: " + index + " slideIndex: " + slideIndex + " direction: " + direction);
                    }
                });
            });
        </script>
    </head>
    <body id="servico">
        <div id="fullpage">
            <div class="section " id="section0">
                    <div class="container topo">
                        <figure id="logodoraly" ><a href="index.php"><img  alt="Doraly Móveis" src="img/logodoraly.png"></a></figure>
                    </div>
                    <header>
                            <nav class="menu nav">
                                <ul>
                                    <div class="espaco-canto">
                                        <li><h3><a id="home" href="index.php">HOME</a></h3></li>
                                        <li><h3><a id="quem" href="#">QUEM SOMOS</a></h3></li>
                                        <li><h3><a id="ser" href="produtos.php">PRODUTOS</a></h3></li>
                                        <li><h3><a id="con" href="contato.php">CONTATO</a></h3></li>
                                    </div>
                                </ul>
                            </nav>
                    </header>
                    <div class="jumbotron container">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="produtos.php">Produtos</a></li>
                            <li>Planejados</li>
                        </ul>	
                        <img src="img/planejados/racklacabranca.jpg">
                    </div>
                </div>
            <div class="section jumbotron container" id="section1"><h1></h1></div>
            <div class="section jumbotron container" id="section2"><h1></h1></div>
            <div class="section jumbotron container" id="section3"><h1></h1></div>
            <div class="section jumbotron container" id="section4"><h1></h1></div>
    </body>
</html>
