<?php require 'includes/header.php'; ?>

<body>
    <div class="container-fluid">
    <div class="row">

<!-- coluna da esquerda -->
			<div id="logo" class="col-md-4">
                <img src="assets/imgs/logo.png" width="100" height="120" class="d-inline-block align-top img-fluid" alt="EcoCerrado">
				<h1>EcoCerrado</h1>
				<p>A ONG EcoCerrado atua em escolas, faculdades e outros
					espaços disseminando a educação ambiental através de
					fotografias, exposições e palestras. O foco da ONG é o bioma
					Cerrado, os membros promovem saídas de campo, realizam
					trilhas ecológicas, acampamentos educativos, esportes de
					aventura e resgate de animais silvestres.
					A atual composição é de 35 membros, possui um museu itinerante
					com insetário, fósseis de animais do cerrado, espécies
					de serpentes do cerrado e um acervo fotográfico da sua fauna e
					flora.</p>
				<div class="botoes_logo">
					<button type="button" class="btn btn-outline-success">QUEM SOMOS</button>
					<button type="button" class="btn btn-outline-success">COMO AJUDAR</button>
				</div>
			</div>

<!-- coluna da direita -->
			<div id="menu_container" class="col-md-8 d-none d-sm-block">
				<nav class="menu">
					<ul class="nav nav-pills">
						<li class="nav-item">
							<a class="botoes nav-link" href="#home">Início</a>
						</li>
						<li class="nav-item">
							<a class="botoes nav-link" href="#menu1">Sobre Nós</a>
						</li>
						<li class="nav-item">
							<a class="botoes nav-link" href="contato.php">Contato</a>
						</li>
					</ul>
				</nav>	
			</div>
		</div>

    </div>

<!-- Início carrosel -->
		<div class="home">	
			<h1></h1>
		</div>
		<div id="demo" class="carousel slide" data-ride="carousel">
  			<ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
  			</ul>
  			<div class="container carousel-inner">
    			<div class="carousel-item active">
					<img src="assets/imgs/foto1.JPG" class="img-fluid" alt="" width="1200" height="600">
      				<div class="carousel-caption">
        				<a href="">Museu Itinerante</a>
        				<p><strong></strong></p>
      				</div>   
				</div>
				<div class="carousel-item">
					<img src="assets/imgs/foto2.JPG" class="img-fluid" alt="" width="1200" height="600">
					<div class="carousel-caption">
						<a href="">Exposições  e Palestras</a>
						<p><strong></strong></p>
					</div>   
				</div>
				<div class="carousel-item">
					<img src="assets/imgs/foto3.JPG" class="img-fluid" alt="" width="1200" height="600">
					<div class="carousel-caption">
						<a href="">Educação Ambiental</a>
						<p><strong></strong></p>
					</div>   
				</div>
  			</div>
  			<a class="carousel-control-prev" href="#demo" data-slide="prev">
    			<span class="carousel-control-prev-icon"></span>
  			</a>
  			<a class="carousel-control-next" href="#demo" data-slide="next">
    			<span class="carousel-control-next-icon"></span>
 			</a>  
		</div>
<!-- fim carrosel -->
		<footer class="footer row">
			<div class="item_footer col-md-3">
				<h1>EcoCerrado</h1>
				<p>Telefone +55 (61) 99693-5651</p>
				<p>E-mail </p>
			</div>
			<div class="item_footer col-md-3">
				<h1>Sobre Nós</h1>
			</div>
			<div class="item_footer col-md-3">
				<h1>Redes Sociais</h1>
				<a href="https://instagram.com/eco_cerrado" target="blank"><img src="assets/imgs/instagram.png" alt="EcoCerrado"></a>
				<a href="https://www.facebook.com/eco.cerrado.5" target="blank"><img src="assets/imgs/facebook.png" alt="EcoCerrado"></a>
			</div>
			<div class="item_footer col-md-3">
				<img src="assets/imgs/logo.png" width="241px" height="297" alt="EcoCerrado">
			</div>
		</footer>
	</body>

</html>