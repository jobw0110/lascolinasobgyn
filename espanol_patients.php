<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pacientes</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/patients.css">
	<link rel="stylesheet" href="css/superfish.css"> 
	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
		
	<script src="js/superfish.js"></script>
	<script src="js/menu.js"></script>
</head>
<?php $english = "patients.php"; ?>
<body>
<?php include("espanol_header.php"); ?>
<h1>Pacientes</h1>
<section>
	<p>Por favor, utilice el enlace que aparece a continuación para rellenar el papeleo antes de su cita programada. Si no puede completar estos formularios, por favor, está en nuestra oficina 20 minutos antes de la cita programada para llenar los formularios.</p>
	<a href="English/publications/english_patient_form.pdf" target="_blank">Nuevas fichas de paciente - English</a></br></br>
	<a href="Espanol/publications/espanol_patient_form.pdf" target="_blank">Nuevas fichas de paciente - Espanol</a>
	<p> Si usted es un paciente nuevo, por favor llene su historial médico antes de su cita. digiChart es un programa de registros médicos electrónicos que está específicamente diseñado para las oficinas de OB/Gyn. Usted puede actualizar su historial médico en cualquier momento. Usar el nombre de usuario y contraseña nuestra oficina proporcionado. Si usted no ha recibido su información de inicio de sesión antes de su primer vistitar, póngase en contacto con la oficina. Haga clic <a href="https://patients.digichart.com/">aquí</a> para empezar...<p>
	<a href="https://patients.digichart.com/"><img src="images/digi.gif" style="border:0;"></a>
	<p>Por favor traiga:</p>
		<ul>
			<li>Tarjeta del seguro</li>
			<li>Conducir licencia de</li>
			<li>Lista de medicamentos</li>
		</ul>
	<p>Requerimos un aviso de 24 horas para cancelar una cita para que podemos programar a otro paciente.</p>
	<h3>Seguros Aceptados</h3>
	<ul>
		<li>Accountable Health</li>
		<li>Aetna</li>
		<li>Beech Street</li>
		<li>Blue Cross Blue Shield</li>
		<li>Cigna</li>
		<li>First Health</li>
		<li>HealthSmart</li>
		<li>Humana / ChoiceCare</li>
		<li>Humana Health Plan</li>
		<li>Great West</li>
		<li>Medicare</li>
		<li>Medicaid - OB</li>
		<li>Multiplan PPO</li>
		<li>Pacificare</li>
		<li>PHCS</li>
		<li>Texas True Choice</li>
		<li>United Healthcare</li>
	</ul>
	<p><i>Si su plan de seguro no aparece, por favor llame a su plan de salud y pregunte si el Dr. Zavaleta es un proveedor.</i></p>
	
	
	
</section>
<aside>
	<?php include("espanol_aside.php") ?>
</aside>
<?php include("espanol_footer.php"); ?> 
</body>
</html>