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
		
 	<div class="formulario">
 		<form>
 			<label>Tipo</label>
 			<select>
 			<option>Descktop</option>
 			<option>Laptops</option>
 		    </select>
 			<label>Processador</label>
 			<input type="Proce" name="cp_Proce">
 			<label>Memória Ram</label>
 			<input type="ram" name="cp_ram">
 			<label>Disco Rígido</label>
 			<input type="disco" name="cp_disco">
 			<label>Marca</label>
 			<input type="marca" name="cp_marca">
 			<label>Modelo</label>
            <input type="modelo" name="cp_model">
            <label>Fonte</label>
            <input type="fonte" name="cp_fonte">
            <label>Tela</label>
 			<input type="tela" name="cp_tela">
 			<input type="submit" name="bt_cadastrar" value="Cadastrar">
 		    <input type="reset" name="bt_cancelar" value="Cancelar">
 		</form>
 		</div>
 		
 	</div>
</body>
</html>