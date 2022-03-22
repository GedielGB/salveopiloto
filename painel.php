<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/estilos.css" rel="stylesheet" type="text/css">

<title>Resgate</title>
</head>

<body>
<div id="container"> <!-- div container !-->

	<div id="fundoGame"> <!-- div fundoGame !-->
	
		<div id="inicio" onclick="start()"><h1> Resgate </h1> <!-- div inicio !-->
		<p>Utilize a tecla W para movimentar o helicóptero para cima, a tecla S para movimentar o helicóptero para baixo e a tecla D para atirar.</p>
		<p> Clique aqui para iniciar!! </p>
		</div> <!-- Fim da div inicio !-->
		
    </div> <!-- Fim da div fundoGame !-->
	
</div> <!-- Fim da div container !-->

<!-- Sons do jogo !-->
<audio src="sons/som.mp3" preload="auto" id="somDisparo"></audio>
<audio src="sons/explosao.mp3" preload="auto" id="somExplosao"></audio>
<audio src="sons/musica_fundo.mp3" preload="auto" id="musica"></audio>
<audio src="sons/gameover.mp3" preload="auto" id="somGameover"></audio>
<audio src="sons/perdido.mp3" preload="auto" id="somPerdido"></audio>	
<audio src="sons/resgate.mp3" preload="auto" id="somResgate"></audio>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/js.js"></script> 
<script type="text/javascript" src="js/jquery-collision.min.js"></script>

</body>
</html>