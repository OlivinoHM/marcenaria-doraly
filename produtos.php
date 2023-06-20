<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--
			Cliente: Doraly Móveis
			Site desenvolvido por; Pedro de Carvalho Junior & Olivino Henrique Messias
		-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produtos | Doraly Móveis </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css" />
    <!-- Bootstrap -->
    <link href="//db.onlinewebfonts.com/c/a4f6ea3c821d0ee0d7ceaf58004371ea?family=Orator+Std+Medium" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/jPages.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28718218-1']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script>
    /* when document is ready */
    $(function(){
        /* iniciate jPages without setting any css animation
        * and setting the fallback fadeIn speed to 500
        */
        $("div.holder").jPages({
            containerID : "itemContainer",
            fallback    : 1000
        });
        /* on select change */
        $("select").change(function(){
            /* get new fadeIn speed */
        var newFallbackSpeed = parseInt( $(this).val() );
        /* destroy jPages and initiate plugin again */
        $("div.holder").jPages("destroy").jPages({
                containerID : "itemContainer",
                animation   : false,
                fallback    : newFallbackSpeed
            });
        });
    });
  </script>    
    <link href="css/breadcrumb.css" rel="stylesheet" type="text/css" />
    <link href="css/cabecalho.css" rel="stylesheet" type="text/css" />
    <link href="css/produtos.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16"/>
        <link rel="manifest" href="img/favicon/manifest.json"/>
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="theme-color" content="#ffffff" />
</head>
<body id="servico">
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<div class="container">
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
        <!--TITULO PRODUTOS-->   
        <div class="container paineis ">
            <div class="painel  menu-navegacao">
                <section class="  ">
                    <div class="col-md-3">
                        <div class="panel-default">
                            <section class="menu-servicos">
                                <a href="produtos.php.php"><h1>CATEGORIAS</h1></a>
                                <nav>
                                    <ul>                
                                        <li><a href="#"><h3 id="principal">Móveis</h3></a>
                                            <a href="#" id="MostrarLista" style="display:none"><span class="glyphicon glyphicon-plus costume"></span></a>
                                            <a href="#" id="EsconderLista"><span class="custom glyphicon glyphicon-minus"></span></a>
                                            <ul id="lista">
                                                <li><a href="sofas.php"><h3>Sofás</h3></a></li>
                                                <li><a href="poltronas.php"><h3>Poltronas</h3></a></li>
                                                <li><a href="mesas.php"><h3>Mesas</h3></a></li>
                                                <!--<li><a href="cadeiras.php"><h3>Cadeiras</h3></a></li>-->
                                                <li><a href="puff.php"><h3>Puff</h3></a></li>
                                                <li><a href="aparadores.php"><h3>Aparadores</h3></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="planejados.php"><h3 id="principal">Planejados</h3></a>
                                            <a href="#" id="MostrarLista1" style="display:none"><span class="glyphicon glyphicon-plus costume"></span></a>
                                            <a href="#" id="EsconderLista1"><span class="glyphicon glyphicon-minus custom"></span></a>
                                            <ul id="lista1">
                                                <li><a href="planejados.php#homes"><h3>Homes</h3></a></li>
                                                <li><a href="planejados.php#cozinhas"><h3>Cozinhas</h3></a></li>
                                                <li><a href="planejados.php#banheiros"><h3>Banheiros</h3></a></li>
                                                <li><a href="planejados.php#quartos"><h3>Quartos</h3></a></li>
                                            </ul>
                                        </li>
                                        <li><a ref="#"><h3 id="principal">Locações</h3></a></li>
                                        <li><a ref="#"><h3 id="principal">Linha Pet</h3></a></li>
                                    </ul>
                                </nav>
                            </section><!-- fim .menu-servicos -->
                        </div><!-- fim .panel-->
                    </div><!-- fim .col-md-3 -->
                </section>
            </div><!-- fim menu-navegacao -->
            <!-- galeria -->
            <div class="painel galeria menu-navegacao">
                <!-- navigation holder -->
                <div class="holder holder2"></div>
                <div id="content" class="defaults">
                    <!-- item container -->
                    <ul id="itemContainer">
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico4" title="Rack Rustico">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico4_s.png" alt="Rack Rustico" />
                                    <span>Rack<br> Rustico</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-john" title="Poltrona John">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-john_s.png" alt="Poltrona John" />
                                    <span>Poltrona<br>John</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-orelhuda" title="Poltrona Orelhuda">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-orelhuda_s.png" alt="Poltrona Orelhuda" />
                                    <span>Poltrona <br>Orelhuda</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-orelhinha" title="Poltrona Orelhinha">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-orelhinha_s.png" alt="Poltrona Orelhinha" />
                                    <span>Poltrona <br>Orelhinha</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-vk-vladimir" title="Poltrona VK Vladimir">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-vk-vladimir_s.png" alt="Poltrona VK Vladimir" />
                                    <span>Poltrona VK <br>Vladimir</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-anos-50-reta" title="Mesa Anos 50 Reta">
                                    <img  class="img-responsive" src="img/mesas/mesa-anos-50-reta_s.png" alt="Mesa Anos 50 Reta" />
                                    <span>Mesa Anos 50 <br>Reta</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-de-centro-isamu-noguch" title="Mesa de Centro Isamu Noguch">
                                    <img  class="img-responsive" src="img/mesas/mesa-de-centro-isamu-noguch_s.png" alt="Mesa de Centro Isamu Noguch" />
                                    <span>Mesa de Centro IsamU</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-anos-50-tripe" title="Mesa Anos 50 Tripe">
                                    <img  class="img-responsive" src="img/mesas/mesa-anos-50-tripe_s.png" alt="Mesa Anos 50 Tripe" />
                                    <span>Mesa Anos 50 <br>Tripe</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="puff.php" name="puff-feijão" title="Puff Feijão">
                                    <img  class="img-responsive" src="img/puff/puff-feijao_s.png" alt="Puff Feijão" />
                                    <span>Puff<br> Feijão</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="sofas.php" name="sofa_chesterfield-id3" title="Sofa Chesterfield">
                                    <img  class="img-responsive" src="img/sofa/sofa_chesterfield_s.png" alt="Sofa Chesterfield" />
                                    <span>Sofa <br>Chesterfield</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="sofas.php" name="sofa-feijão-branco" title="Sofa Feijão Branco">
                                    <img  class="img-responsive" src="img/sofa/sofa-feijao-branco_s.png" alt="Sofa Feijão Branco" />
                                    <span>Sofa Feijão <br>Branco</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico-ladrilho" title="Rack Rustico Ladrilho">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico-ladrilho_s.png" alt="Rack Rustico Ladrilho" />
                                    <span>Rack Rustico <br>Ladrilho</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="aparador-anos-50-gaveta-amarela" title="Aparador Anos 50">
                                    <img  class="img-responsive" src="img/aparadores/aparador-anos-50-gaveta-amarela_s.png" alt="Aparador Anos 50" />
                                    <span>Aparador <br>Anos 50</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="buffet-rp" title="Buffet RP">
                                    <img  class="img-responsive" src="img/aparadores/buffet-rp_s.png" alt="Buffet RP" />
                                    <span>Buffet<br> RP</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-beth" title="Poltrona Beth">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-beth_s.png" alt="Poltrona Beth" />
                                    <span>Poltrona<br> Beth</span>
                                </a>
                            </li>
                        </div>
                         <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-berger" title="Poltrona Berger">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-berger_s.png" alt="Poltrona Berger" />
                                    <span>Poltrona<br> Berger</span>
                                </a>
                            </li>
                        </div>
                         <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-george-nelson" title="Mesa George Nelson">
                                    <img  class="img-responsive" src="img/mesas/mesa-george-nelson_s.png" alt="Mesa George Nelson" />
                                    <span>Mesa <br>George Nelson</span>
                                </a>
                            </li>
                        </div>
                         <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-lateral" title="Mesa Lateral">
                                    <img  class="img-responsive" src="img/mesas/mesa-lateral_s.png" alt="Mesa Lateral" />
                                    <span>Mesa<br> Lateral</span>
                                </a>
                            </li>
                        </div>
                         <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="puff.php" name="puff-feijão2" title="Puff Feijão">
                                    <img  class="img-responsive" src="img/puff/puff-feijao2_s.png" alt="Puff Feijão" />
                                    <span>Puff<br> Feijão</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="sofas.php" name="sofa-feijao-preto" title="Sofa Feijao Preto">
                                    <img  class="img-responsive" src="img/sofa/sofa-feijao-preto_s.png" alt="Sofa Feijao Preto" />
                                    <span>Sofa Feijao<br> Preto</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="buffet-jacaranda-rp" title="Buffet Jacaranda RP">
                                    <img  class="img-responsive" src="img/aparadores/buffet-jacaranda-rp_s.png" alt="Buffet Jacaranda RP" />
                                    <span>Buffet<br> Jacaranda RP</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="buffet-rp-liso" title="Buffet RP Liso">
                                    <img  class="img-responsive" src="img/aparadores/buffet-rp-liso_s.png" alt="Buffet RP Liso" />
                                    <span>Buffet<br> RP Liso</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-dog" title="Rack Dog">
                                    <img  class="img-responsive" src="img/aparadores/rack-dog_s.png" alt="Rack Dog" />
                                    <span>Rack <br>Dog</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-pau-ferro-1" title="Rack Pau Ferro">
                                    <img  class="img-responsive" src="img/aparadores/rack-pau-ferro-1_s.png" alt="Rack Pau Ferro" />
                                    <span>Rack<br> Pau Ferro</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico1" title="Rack Rustico">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico1_s.png" alt="Rack Rustico" />
                                    <span>Rack <br>Rustico</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico2" title="Rack Rustico">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico2_s.png" alt="Rack Rustico" />
                                    <span>Rack <br>Rustico</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico3" title="Rack Rustico">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico3_s.png" alt="Rack Rustico" />
                                    <span>Rack <br>Rustico</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="rack-rustico5" title="Rack Rustico">
                                    <img  class="img-responsive" src="img/aparadores/rack-rustico5_s.png" alt="Rack Rustico" />
                                    <span>Rack <br>Rustico</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="aparadores.php" name="revisteiro-anos-50-vintage" title="Revisteiro Anos 50 Vintage">
                                    <img  class="img-responsive" src="img/aparadores/revisteiro-anos-50-vintage_s.png" alt="Revisteiro Anos 50 Vintage" />
                                    <span>Revisteiro <br>Anos 50 </span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="banqueta-vk" title="Banqueta VK">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/banqueta-vk_s.png" alt="Banqueta VK" />
                                    <span>Banqueta <br>VK</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="cadeira-grilo" title="Cadeira Grilo">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/cadeira-grilo_s.png" alt="Cadeira Grilo" />
                                    <span>Cadeira<br> Grilo</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-funil" title="Poltrona Funil">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-funil_s.png" alt="Poltrona Funil" />
                                    <span>Poltrona<br> Funil</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="poltronas.php" name="poltrona-canoa" title="Poltrona Canoa">
                                    <img  class="img-responsive" src="img/cadeiras-poltronas/poltrona-canoa_s.png" alt="Poltrona Canoa" />
                                    <span>Poltrona<br> Canoa</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="base-mesa-rp" title="Base Mesa RP">
                                    <img  class="img-responsive" src="img/mesas/base-mesa-rp_s.png" alt="Base Mesa RP" />
                                    <span>Base Mesa<br> RP</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-feijão-vintage" title="Mesa Feijão Vintage">
                                    <img  class="img-responsive" src="img/mesas/mesa-feijao-vintage_s.png" alt="Mesa Feijão Vintage" />
                                    <span>Mesa Feijão<br> Vintage</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-lateral-rp" title="Mesa Lateral RP">
                                    <img  class="img-responsive" src="img/mesas/mesa-lateral-rp_s.png" alt="Mesa Lateral RP" />
                                    <span>Mesa Lateral<br> RP</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-saarinen" title="Mesa Saarinen">
                                    <img  class="img-responsive" src="img/mesas/mesa-saarinen_s.png" alt="Mesa Saarinen" />
                                    <span>Mesa<br>Saarinen</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-surfing" title="Mesa Surfing">
                                    <img  class="img-responsive" src="img/mesas/mesa-surfing_s.png" alt="Mesa Surfing" />
                                    <span>Mesa <br>Surfing</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-vinatge-rp" title="Mesa Vinatge RP">
                                    <img  class="img-responsive" src="img/mesas/mesa-vinatge-rp_s.png" alt="Mesa Vinatge RP" />
                                    <span>Mesa Vinatge<br> RP</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3">
                            <li class="thumbnail">
                                <a class="thumb" href="mesas.php" name="mesa-rp-amarela" title="Mesa RP Amarela">
                                    <img  class="img-responsive" src="img/mesas/mesa-rp-amarela_s.png" alt="Mesa RP Amarela" />
                                    <span>Mesa RP<br> Amarela</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
                <!-- navigation holder -->
                <div class="holder holder2"></div>
            </div> <!--! end of #content -->
        </div> <!--! end of #container -->
    </div><!-- Include all compiled plugins (below), or include individual files as needed --></div></div></div></div></div>
    
    <footer class="container paineis-footer">        
    <div class="painel-footer tb1">
        <table>
            <tr>
                <td>
                    <ul id="face" class="social">
                        <li><a href="https://www.facebook.com/doralymoveis/"><img src="img/facebook.png" alt="Facebook Doraly Móveis"></img></a></li>
                        <li><a href="http://instagram.com/doralymoveis"><img src="img/insta.png" alt="Instagran Doraly Móveis"></img></a></li>
                    </ul>
                </td>
                <td border=1 bgcolor=white></td>
                <td><br><ul id="whats" class="social"><li><a href="intent://send/11993099715#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><img src="img/whats.png" alt="Whatsapp Doraly Móveis"></img></a></li></ul></td>
            </tr>           
        </table>
    </div>
    <div class="painel-footer tb2">
        <table>
            <tr>
                <td><ul id="logo-footer" class="social"><li><a href="#"><img src="img/logo-rodape.png" alt="Doraly Móveis"></img></a></li></ul></td>
                <td border=1 bgcolor=white></td>
                <td><ul id="maps" class="social"><li>
                    <a href="intent://send/+5511995259755#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">
                    <img src="img/local.png" alt="Mapa Doraly Móveis"></img></a></li></ul>
                </td>
            </tr>
        </table>    
    </div>
</footer>
    <script src="js/esconder-lista.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
</html>