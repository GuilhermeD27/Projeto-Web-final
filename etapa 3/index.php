<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="pagina.css">
    <script type="text/javascript">
		function abrir() {
			var menu = document.getElementById("menu");
			menu.style.width = "280px";
		}

		function fechar() {
			var menu = document.getElementById("menu");
			menu.style.width = "0px";
		}
	</script>
	<style>
		.formulario {
	max-width: 600px;
	position: absolute;
	top: 25%;
	left: 35%;
	box-shadow: 5px 10px 8px rgb(136,136,136);
	padding: 20px;
	background: rgb(225,225,225);
}

.include{
    text-align: left;
	margin-left: 30px;
}
	</style>
	<title>Projeto</title>
	 <script src="jquery-3.5.1.min.js"></script>
     <script src="scripts.js"></script>

</head>
<body>
	<div class="topo">

    <h1>Fic Informatica</h1>

    <div id="menu" class="menu">
		<a href="#" class="fechar" onclick="fechar()">&times</a>
		<ul>

<li><a href="index.php?p=cc"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
  <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
</svg> Cadastrar</a></li>

<li><a href="index.php?p=cd"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
  <path fill-rule="evenodd" d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg> Ver cadastro</a></li>

<li><a href="index.php?p=cs"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg> Consulta</a></li>

<li><a href="index.php?p=vv"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-server" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4C14.665 5.474 11.68 6.667 8 6.667 4.318 6.667 1.333 5.473 1.333 4V2.667zm0 3.667v3C1.333 10.805 4.318 12 8 12c3.68 0 6.665-1.193 6.667-2.665V6.334c-.43.32-.931.58-1.458.79C11.81 7.684 9.967 8 8 8c-1.967 0-3.81-.317-5.21-.876a6.508 6.508 0 0 1-1.457-.79zm13.334 5.334c-.43.319-.931.578-1.458.789-1.4.56-3.242.876-5.209.876-1.967 0-3.81-.316-5.21-.876a6.51 6.51 0 0 1-1.457-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
</svg> Ver vendas</a></li>




</ul>
	</div>
	<span onclick="abrir()">&#9776</span>
		<input type="search" placeholder="Buscar..." class="pesquisa">
	</div>
		
 	<div id="conteudo" class="formulario">
 		
<?php

if(isset($_GET['p'])){

	$pagina = $_GET['p'];

}else{

	$pagina = 'cc';

}

if($pagina == 'cc'){

	include "cadastro_form.html";

}elseif($pagina == 'cd'){

	include "cadastro_ver.php";

}elseif($pagina == 'cs'){

	include "consulta_ver.php";

}elseif($pagina == 'vv'){

	include "vendas_ver.php";

}


?>
 		
 	</div>
</body>
</html>