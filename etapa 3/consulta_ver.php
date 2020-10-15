<style>
  table,th,td {
     border: 1px solid black;
     text-align: left;
     margin-left: 15px;
     margin-top: 5px;
     }

     button{
         text-align: left;
         margin-left: 20px;
         margin-top: 2px;
         background: rgb(0,206,209);
       color: white;
       font-weight: bold;
       padding: 10px 15px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
      
     }

     .formulario1 {
	max-width: 400px;
	position: absolute;
	top: 20%;
	left: 120%;
	box-shadow: 5px 8px 8px 5px rgb(136,136,136);
	padding: 20px;
  background: rgb(255,250,250);
  cursor: pointer;
  
}

.formulario2 {
	max-width: 400px;
	position: absolute;
	top: 20%;
	right: 120%;
	box-shadow: 5px 8px 8px 5px rgb(136,136,136);
	padding: 20px;
    background: rgb(255,250,250);
    cursor: pointer;
}

h2{
  color: black;
  margin-left: 30px;
}
</style>
<button id="btn_bscConsulta">Preencher</button><br>

<table>

 <thead>

     <tr>

         <th>ID</th>

         <th>PRODUTO</th>

         <th>PRECO</th>

         <th>QUANTIDADE</th>

     </tr>

 </thead>

 <tbody id="tblConsulta">
 
 </tbody>

</table>
  <h2> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
</svg>Confira os modelos <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-compact-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
</svg></h2>
<div class="formulario1">
      
         <img src="notebook-acer-aspire-3-intel-core-i5-4gb-1tb-windows-10-a315-54k-53zp_1591183759_gg.jpg" width="210" height="210">
         <p>
         Notebook Acer Intel I5 12gb Ram 1tb Hd 
         Tela 15,6 Polegadas
         </p>
        
        <form>
        <input type="submit" name="bt_comprar" value="Comprar">
        </form>
       
         
 		</div>
 	<div class="formulario2">
         <img src="computador-t-home-ntc-price-4123-intel-core-i3-8100-4gb-ssd-120gb_97808.jpg" width="210" height="210">
       <p>
         Computador T-home NTC price 4123
         Intel Core I3 8100 / 4Gb / SSD 120g
       </p>
      
        <form>
        <input type="submit" name="bt_comprar" value="Comprar">
        </form>
    
     </div>