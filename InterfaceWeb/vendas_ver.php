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
      button{
            text-align: left;
            margin-left: 20px;
            margin-top: 5px;
            background: rgb(0,206,209);
	        color: white;
	        font-weight: bold;
	        padding: 10px 15px;
	        border: none;
	        border-radius: 4px;
	        cursor: pointer;
	       
           
    
        }

    table,th,td {
        border: 1px solid black;
        text-align: left;
	    margin-left: 15px;

    }

    
.fundo {

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
    
</style>

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

<div  id="conteudo" class="fundo">

<button id="btn_bscFuncionarios">Preencher</button><br>

<table>

    <thead>

        <tr>

            <th>ID</th>

            <th>CLIENTE</th>

            <th>CPF</th>

            <th>PRODUTO</th>

            <th>MODELO</th>

            <th>VALOR</th>

            <th>QUANTIDADE COMPRADA</th>

            <th>QUANTIDADE DISPONIVEL</th>


        </tr>

    </thead>

    <tbody id="tblFuncionarios">
    
    </tbody>

</table>