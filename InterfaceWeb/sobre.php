<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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

    .fundao {
        
box-shadow: 5px 8px 8px 5px rgb(136,136,136);
border: none;
border-radius: 30px;
padding: absolute;
width: 820px; 
font-size: 12pt;
text-align: justify;
font-family: arial;
background: rgb(211,211,211);
margin-top: 130px;
margin-left: auto;
margin-right: auto;
    }
    
    .sobre{
  padding-top: 10px;
  margin-left: 35%;
  
  }

</style>
</head>
<body>
<div class="topo">

<h1>Fic Informatica</h1>

<div id="menu" class="menu">
    <a href="#" class="fechar" onclick="fechar()">&times</a>
    <a href="index.php">Home</a>
    <a href="consulta.php">Consulta</a>
    <a href="vendas_ver.php">Vendas</a>
    <a href="sobre.php">Sobre</a>
</div>
<span onclick="abrir()">&#9776</span>
    <input type="search" placeholder="Buscar..." class="pesquisa">
</div>
    <div class="fundao">
    <div class="sobre">
		<h1></h1>
		<h4>Sobre</h4>
		<br><br> Desenvolvido por FIC IFPA
		<br><br> Projeto Final 2020
    </div>
    </div>
</body>
</html>