<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Recursos</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/espanol_resources.css">
	<link rel="stylesheet" href="css/superfish.css"> 
	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
		
	<script src="js/superfish.js"></script>
	<script src="js/menu.js"></script>
	<script>
		$(document).ready(function() {
			$("#videos").click(function(){
				$(this).next().slideToggle();
				$("#article").next().slideUp();
			});
			$("#article").click(function(){
				$(this).next().slideToggle();
				$("#videos").next().slideUp();
			});
			
		}); // end ready
	</script> 
</head>
<?php $english = "resources.php"; ?>
<body>
<?php include("espanol_header.php"); ?>
<h1>Recursos</h1>
<section>
	<img src="images/services.jpg">
	<p>Ayuda e información es sólo un clic de distancia.</p>
	<p>Aquí encontrará los artículos que puedes leer a través de nuestro artículo salón y útiles videos sobre nuevos servicios y salud de las mujeres.</p>
	<ul>
		<li id="article"><h3>Salón del artículo</h3></li>
			<div>
				<ul>
					<li><a href="publications/QualityofLifeArticle_Spanish.pdf" target="_blank">Calidad de Vida</a></li>
					<li><a href="publications/AdvancesArticle1_Spanish.pdf" target="_blank">Terapia Criogénica - una nueva alternativa a la histerectomía</a></li>
					<li><a href="publications/AdvancesArticle2_Spanish.pdf" target="_blank">Un Nuevo Acercamiento Quirúrgico a la Incontinencia Urinaria Femenina ahora en proceso</a></li>
					<li><a href="publications/AdvancesArticle3_Spanish.pdf" target="_blank">El nuevo procedimiento de intrusión mínima da como resultado una esterilización permanente</a></li>
					<li><a href="publications/AdvancesArticle4_Spanish.pdf" target="_blank">Recuperando tu cuerpo</a></li>
				</ul>
			</div>
		<li id="videos"><h3>Videos</h3></li>
		<div>
			<p>Próximamente</p>
		</div>
	</ul>
</section>
<aside>
	<?php include("espanol_aside.php") ?>
</aside>
<?php include("espanol_footer.php"); ?> 
</body>
</html>