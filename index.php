<!DOCTYPE html>
<html>
<head>
	<title>Jean</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid menuzao">
		<div class="container">
			<nav class="navbar navbar-expand-sm">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Jean Marques</a>
				</div>

				<ul class="nav navbar-nav ml-auto">
				  <li class="nav-item">
				    <a class="nav-link" href="#port">Portfolio</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#sob">Sobre</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#cont">Contato</a>
				  </li>
				</ul>
			</nav>
		</div>
	</div>

	<div style="height:60px;background-color:black;"></div>

	<div class="container-fluid banner">
		<div class="container text-center">
			<div class="imagem_banner">
				<img src="imgs/teste.jpg" class="rounded-circle" alt="jeanmarques" height="350px">
			</div>
			<div class="texto_banner">
				<h4>Web Full Stack</h4>
				<h5>HTML - CSS - PHP - JS</h5>
			</div>
		</div>
	</div>

	<div class="container-fluid portfolio" id="port">
		<div class="container text-center">
			<h4 class="text-center">Portfolio</h4>
				<hr style="background-color:white">

			<div class="img_port">
				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">

				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">

				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">
			</div>

			<div class="img_port">
				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">

				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">

				<img src="imgs/temp.jpg" class="rounded" alt="template" height="250px">
			</div>
		</div>
	</div>
			<div class="parallax"></div>
	<div class="container-fluid sobre" id="sob">
		<div class="container">
			<h4 class="text-center">Sobre</h4>
				<hr>

			<div class="row text-center">
				<div class="col text-left">
					<canvas id="myChart" style="width:100%;height:400px;"></canvas>
				</div>
				<div class="col text-left"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p></div>
			</div>
		</div>
	</div>

	<div class="container-fluid contato" id="cont">
		<div class="container">
			<h4 class="text-center">Contato</h4>
				<hr style="background-color:white">
			<form method="POST" action="index.php">
				<div class="form-group row">
					<div class="col-6">
						<label for="email">Email:</label>
						<input name="email" type="email" class="form-control" id="email" placeholder="email@email.com">
					</div>
					<div class="col-6">
						<label for="nome">Nome:</label>
						<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome e Sobrenome">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-6">
					    <label for="assunto">Assunto:</label>
					    <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Escreva o assunto">
					</div>
					<div class="col-6">
					    <label for="telcel">Tel/Cel:</label>
					    <input name="tel" type="tel" class="form-control" id="telcel" placeholder="Número para contato">
					</div>
				 </div>
				<div class="form-group">
   					<label for="textotodo">Escreva sua mensagem:</label>
    				<textarea name="textomsg" class="form-control" id="textotodo" rows="4"></textarea>
 				</div>
 				<button type="submit" name="submit" value="submit" class="btn btn-outline-light" style="width:120px;">Enviar</button>
			</form>
		</div>
	</div>

	<footer class="container-fluid rodape">
		<div class="container">
			<div class="row icones" style="text-align:center;">
				<div class="col ">
					<a href="https://www.facebook.com/jean.marques.19"><img src="imgs/facebook.png"></a>
					<a href="#"><img src="imgs/google.png"></a>
					<a href="https://www.linkedin.com/in/jean-marques-de-araujo-82886b173/"><img src="imgs/linkedin.png"></a>
					<a href="https://www.instagram.com/havocjean/"><img src="imgs/inst10.png" width="32px;"></a>
				</div>
			</div>
		</div>
			<div class="text-center text_rodape">© Todos os direitos reservados 2018. Jean Marques.</div>
	</footer>
</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
	            label: 'Skills 2018',
	            data: [9, 8, 5, 7, 4, 2],
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