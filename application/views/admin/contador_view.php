
 <script type="text/javascript" src="<?php echo base_url() ?>js/cliente/contador_calorias.js"></script>
    
    <div id="dialog" title="">
    <!-- <FORM  action="" method="post"> -->
    <P>
        <LABEL>Tipo de comida: </LABEL>
            <select name="tipo_comida" id="tipo_comida">
            <option value ="" >Elija una opcion...</option>
            <option value ="1" >Desayuno</option>
            <option value ="2" >Almuerzo</option>
            <option value ="3" >Colacion</option>
            <option value ="4" >Once</option>
            <option value ="5" >Cena</option>
            </select><BR>
    <LABEL >Numero: </LABEL>
              <INPUT type="text" id="num" name="num"><BR>     
    <LABEL >Alimento: </LABEL>
              <INPUT type="text" id="alimento" name="alimento"><BR>
    <LABEL>porcion: </LABEL>
              <INPUT type="text" id="porcion" name="porcion"><BR>              
    <LABEL>cantidad: </LABEL>
               <input type="number" name="cantidad" id = "cantidad" min="1" max="45">
     <LABEL>el equivalente a 1 porcion: </LABEL>
               <input type="number" name="tot" id = "tot" min="1" max="45">
    <LABEL>Total de calorias: </LABEL>
              <INPUT type="text" id="result" name="result"><BR>
   
    <input id="add" type="button" value = "Guardar">  
     <div id="mens"></div>

    </P>
 <!-- </FORM>-->
 
 
 
 </div>
 <input class="button" type="button" id="editar" value="Grabar Alimento"><br>
    
    <div class="large-9 medium-9 columns">
    <div class="row">
    	<div class="large-12 columns">
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>N°</th>
                 <th>ALIMENTO</th>
                <th>Cantidad_gramos</th>
                <th>Calorias</th>
            </tr>
        </thead>
        <tbody>
        </tbody>  
	</table>
        </div>
    </div>
</div>