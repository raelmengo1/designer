<!DOCTYPE html>
<html lang="en">

<head>
	<title>Footer Design</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

		body {
			line-height: 1.5;
			font-family: 'Poppins', sans-serif;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.container {
			max-width: 1170px;
			margin: auto;
		}

		.row {
			display: flex;
			flex-wrap: wrap;
		}

		ul {
			list-style: none;
		}

		.footer {
			background-color: #d2232a;
			padding: 70px 0;
		}
		.footer2 {
			background-color: black;
			padding: 70px 0;
		}

		.footer-col {
			width: 25%;
			padding: 0 15px;
		}

		.footer-col h4 {
			font-size: 18px;
			color: #ffffff;
			text-transform: capitalize;
			margin-bottom: 35px;
			font-weight: 500;
			position: relative;
        }
        a:not([href]):not([class]){
    color: #bbbbbb;
    text-decoration: none;
    
   }
        a:not([href]):not([class]):hover {
    color: white;
    text-decoration: none;
    
   }

		.footer-col h4::before {
			content: '';
			position: absolute;
			left: 0;
			bottom: -10px;
			background-color: black;
			height: 2px;
			box-sizing: border-box;
			width: 50px;
		}

		.footer-col ul li:not(:last-child) {
			margin-bottom: 10px;
		}

		.footer-col ul li a {
			font-size: 16px;
			text-transform: capitalize;
			color: #ffffff;
			text-decoration: none;
			font-weight: 300;
			color: #bbbbbb;
			display: block;
			transition: all 0.3s ease;
		}

		.footer-col ul li a:hover {
			color: #ffffff;
			padding-left: 8px;
		}

		.footer-col .social-links a {
			display: inline-block;
			height: 40px;
			width: 40px;
			background-color: rgba(255, 255, 255, 0.2);
			margin: 0 10px 10px 0;
			text-align: center;
			line-height: 40px;
			border-radius: 50%;
			color: #ffffff;
			transition: all 0.5s ease;
		}

		.footer-col .social-links a:hover {
			color: #24262b;
			background-color: #ffffff;
		}

		/responsive/
		@media(max-width: 767px) {
			.footer-col {
				width: 50%;
				margin-bottom: 30px;
			}
		}

		@media(max-width: 574px) {
			.footer-col {
				width: 100%;
			}
		}
	</style>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Sede Gávea</h4>
					<ul>
						<li> <h5><a href="https://www.google.com/maps/place/C.R.+Flamengo/@-22.978143,-43.2223935,17z/data=!3m1!4b1!4m5!3m4!1s0x9bd5b674408e9b:0xb2f772e74408cba1!8m2!3d-22.978143!4d-43.2202048" >Sede Gávea
Av. Borges de Medeiros, 997
Lagoa - Rio de Janeiro/RJ - Brasil
CEP: 22430-041 - Tel:(21) 2159-0100 </h5> </a></li>
					
					</ul>
				</div>
				<div class="footer-col">
					
                </div>
                <div class="footer-col">
					<h4>CT George Helal</h4>
					<ul>
						<li><a href="https://www.google.com.br/maps/place/Estr.+dos+Bandeirantes+-+Vargem+Grande,+Rio+de+Janeiro+-+RJ/@-22.9675964,-43.4449625,17z/data=!4m5!3m4!1s0x9bdc354c112465:0x37ff2e575815b720!8m2!3d-22.9879967!4d-43.4819036">Estrada dos Bandeirantes, 25.997
Vargem Grande - Rio de Janeiro/RJ - Brasil
CEP: 22785-275</a></li>
					
					</ul>
				</div>
				
				
			</div>
        </div>
    </footer>

	<footer class="footer2">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Sede Gávea</h4>
					<ul>
						<li><a href="https://www.flamengo.com.br/gavea">Gávea</a></li>
						<li><a href="https://www.flamengo.com.br/transparencia">Transparência</a></li>
						<li><a href="https://www.flamengo.com.br/politica-de-privacidade">Política de Privacidade</a></li>
						<li><a href="https://portaldotitular.flamengo.com.br/titular_flamengo">Portal do Titular</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Obter Ajuda</h4>
					<ul>
						<li><a href="https://www.flamengo.com.br/perguntasfrequentes">FAQ</a></li>
						<li><a href="https://www.flamengo.com.br/ouvidoria">Ouvidoria</a></li>
						<li><a href="p1.php">Retornar</a></li>
						<li><a href="https://loja.flamengo.com.br/checkout/#/cart">Status do Pedido</a></li>
						<li><a href="https://loja.flamengo.com.br/checkout/#/profile">Formas de Pagamento</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Nossa Loja</h4>
					<ul>
						<li><a href="https://loja.flamengo.com.br/masculino/roupas/camisas-diversas?O=OrderByReleaseDateDESC">Camisas diversas</a></li>
						<li><a href="https://loja.flamengo.com.br/masculino/roupas/jaquetas?O=OrderByReleaseDateDESC">Jaquetas</a></li>
						<li><a href="https://loja.flamengo.com.br/masculino/calcados/chinelos?O=OrderByReleaseDateDESC">Chinelos</a></li>
						<li><a href="https://loja.flamengo.com.br/masculino/calcados/tenis?O=OrderByReleaseDateDESC">Tênis</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Nossas Redes socias</h4>
					<div class="social-links">
						<a href="https://pt-br.facebook.com/FlamengoOficial/"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/Flamengo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/flamengo/?hl=pt-br"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

