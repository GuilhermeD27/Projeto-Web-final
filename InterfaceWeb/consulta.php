<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de fundo</title>
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
.formulario1 {
	max-width: 400px;
	position: absolute;
	top: 25%;
	left: 23%;
	box-shadow: 5px 8px 8px 5px rgb(136,136,136);
	padding: 20px;
    background: rgb(255,250,250);
    cursor: pointer;
}

.formulario2 {
	max-width: 400px;
	position: absolute;
	top: 25%;
	right: 23%;
	box-shadow: 5px 8px 8px 5px rgb(136,136,136);
	padding: 20px;
    background: rgb(255,250,250);
    cursor: pointer;
}


p {
	text-align: left;
    margin-left: 10px;
    margin-top: 2px;
}

h2 {
    color: rgb(0,255,0);
    margin-top: 1px;
}


input[type=submit] {
	background: rgb(0,255,0);
	color: white;
	font-weight: bold;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
    margin-right: 100px;
    width: 230px;
    height: 60px;
}


input[type=focus] {
	background: rgb(0,255,0);
	color: white;
	font-weight: bold;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	float: right;
    margin-right: 30px;
    width: 25px;
    height: 36px;
    margin-top: -68px;
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

 	<div class="formulario1">
 		
         <img src="notebook-acer-aspire-3-intel-core-i5-4gb-1tb-windows-10-a315-54k-53zp_1591183759_gg.jpg" width="410" height="410">
         <p>
         Notebook Acer Intel I5 12gb Ram 1tb Hd 
         Tela 15,6 Polegadas
         </p>
        <h2>R$2,199.09 à vista</h2>
        <form>
        <input type="submit" name="bt_comprar" value="Comprar">
        </form>
        <form>
        <input type="focus" name="bt_" value="">
        </form>
         
 		</div>
 	<div class="formulario2">
         <img src="computador-t-home-ntc-price-4123-intel-core-i3-8100-4gb-ssd-120gb_97808.jpg" width="410" height="410">
       <p>
         Computador T-home NTC price 4123
         Intel Core I3 8100 / 4Gb / SSD 120g
       </p>
       <h2>R$2,199.09 à vista</h2>
        <form>
        <input type="submit" name="bt_comprar" value="Comprar">
        </form>
        <form>
        <input type="focus" name="bt_" value="">
        </form>
     </div>
 	</div>
</body>
</html>