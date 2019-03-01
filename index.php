<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/art.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script rel="javascript" src="js/script.js"></script>
    <title>Jean Marques</title>
</head>
<body>
        <nav class="menutop">
            <div class="topesquerda">
				<a class="titulo" href="#">Jean Marques</a>
			</div>
            <div class="topdireita">
				<ul>
				  <li><a href="#cont">Contato</a></li>
				  <li><a href="#port">Portfólio</a></li>
				  <li><a href="#sob">Sobre</a></li>
				</ul>
            </div>
        </nav>
        <div style="height:60px;"></div>
        <div class="banner">
            <div class="fotobanner">
                <img src="imgs/teste.jpg" alt="jeanmarques" height="350px">
                <h1>Web Full Stack</h1>
				<h2>HTML - CSS - PHP - JS - MySql - Jquery - Bootstrap</h2>
            </div>
        </div>
        <div class="sobre" id="sob" style="padding-top:20px;">
                <h2>Sobre</h2>
                <hr>
            <div class="esquerdasobre">
                <canvas id="myChart" style="width:100%;height:400px;"></canvas>
            </div>
            <div class="direitasobre">
            <p style="margin-top:100px;">Estudante/freelancer na área de programação web full stack(front-end, back-end) desenvolvendo projetos web pessoais para desenvolver meus conhecimentos e crescer como programador ainda mais.</p>
            <p>Anteriormente trabalhava na área de informática como técnico em manutenção de computadores e notebook. E tenho como formação design gráfico.</p>
            </div>
        </div>

        <div class="portfolio" id="port" style="padding-top:20px;">
            <h2>Portfólio</h2>
            <hr>
            <div class="imgsportfolio">
                <a href="javascript:;" class="galeria"><img src="imgs/temp.jpg"/></a>
                <a href="javascript:;" class="galeria"><img src="imgs/lester.jpg" /></a>
                <a href="javascript:;" class="galeria"><img src="imgs/portfalse.jpg" /></a>
                <a href="javascript:;" class="galeria"><img src="imgs/sisteminhalara.jpg" /></a>
            </div>
            <div class="bgbox"></div>
            <div class="divbox">
                <img src="" width="100%" /><br>
                <button class="fechar">Fechar</button>
            </div> 
        </div>

        <div class="contato" id="cont" style="padding-top:20px;">
            <h2>Contato</h2>
            <hr>
            <form method="post" action="index.php">
                <div class="email">
                    <label for="email">Email:</label><br>
                    <input name="email" type="email" id="email" name="email" placeholder="email@servidor.com">
                </div>
                <div class="nome">
                    <label for="nome">Nome:</label><br>
                    <input name="nome" type="text" id="nome" name="nome" placeholder="Nome e sobrenome">
                </div>
                <div class="assunto">
                    <label for="assunto">Assunto:</label><br>
                    <input name="assunto" type="text" id="assunto" placeholder="Assunto da mensagem">
                </div>
                <div class="wpp">
                    <label for="telcel">Wpp/Cel:</label><br>
                    <input name="tel" type="tel" id="telcel" placeholder="(99) 99999-9999">
                </div>
                <div class="msg">
                    <label for="texttodo">Mensagem:</label><br>
                    <textarea name="textomsg" id="textotodo" rows="4" type="text"  placeholder="Escreva sua mensagem"></textarea>
                </div>
                <button class="enviar" type="submit" name="submit" value="submit">Enviar</button>
        </div>

    <footer>
		<div class="footerinterno">
			<a href="https://www.facebook.com/jean.marques.19" target="_blank"><img src="imgs/facebook.png"></a>
			<a href="https://www.linkedin.com/in/jean-marques-de-araujo-82886b173/" target="_blank"><img src="imgs/linkedin.png"></a>
			<a href="https://www.instagram.com/havocjean/" target="_blank"><img src="imgs/inst10.png" width="32px;"></a>
		</div>
			<p style="margin-top:40px;">© Todos os direitos reservados. Jean Marques, 2019.</p>
	</footer>

    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
	    type: 'radar',
	    data: {
	        labels: ["HTML", "CSS", "MySql", "PHP", "Javascript", "Laravel"],
	        datasets: [
	        {
	            label: 'Skills 2019',
	            data: [8, 6, 5, 7, 5, 6],
	            backgroundColor: [
	                'rgba(224, 224, 224, 0.5)'
	            ],
	            borderColor: [
	                'rgba(17, 17, 17, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scale: {
	            ticks: {
	                suggestedMin: 0,
	                suggestedMax: 10
	            }
	        }
	    }
	});
</script>
</html>