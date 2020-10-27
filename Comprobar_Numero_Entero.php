<form action="Codigo.php" method="POST">
<table>
	<tr>
			<td><h3>Numero para Comprobar</h3></td>
		<td><input type="text" name="NumEnt">
	</tr>
		<tr>
		<td> <input type="submit" value="Determinar">
	</tr>
</table>
<?php
	if($_POST)
	{	
		function int($int){
       
        
        if(is_numeric($int) === TRUE){ 
           
            
            if((int)$int == $int & $int >0){
			if($int%2==0){
				echo "<h2><u>El numero $int es par</h2></u>";
			}else{
				echo "<h2><u>El numero $int es impar</h2></u>";
			}
			}		
            
			else{
				echo "<h2><u>No es un numero entero</h2></u>";
			}
       
        
        }else{
       
            echo "<h2><u>No hay numero</h2></u>";
        }
    }
		$Numsixk = $_POST
		['NumEnt'];
		int($Numsixk)
}
?>
