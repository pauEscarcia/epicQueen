<?php
	$tres=1;
	if(isset($_POST['submit'])){
		if(!empty($_POST['check_list'])) {

			$seleccionados = $_POST['check_list'];
			$sel_count = count($seleccionados);
			$checked_count = count($_POST['check_list']);
			echo " <br> Seleccionaste ".$checked_count." tecnologías <br/><br>";

			echo "<p><strong>Instrucciones: </strong> Selecciona de acuerdo a lo que consideres </p> <br>";
			echo "<label > Mayor motivación de los niños </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"motivacion\" value=\"$seleccionados[$col]\"> $seleccionados[$col]  <br>";
			}
			echo "<p>¿Por qué? </p>";
			echo"<input type=\"text\" name='textMotivacion' placeholder=\"¿Por qué esa tecnología motivo más a los niños?\" required><br>"; 
			

			echo "<label >Mayor cooperación de los niños </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"cooperacion\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textCooperación' placeholder=\"¿Por qué esa tecnología hizo que cooperaran más los niños?\" required><br>"; 
			
			echo " <label >Mayor apoyo de los mentores </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"apoyo\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textApoyo' placeholder=\"¿Por qué en esa tecnología necesitaron más apoyo de los mentores?\" required><br>"; 
				
			echo " <label >Más fácil para los niños entender el software </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"entendimieto\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textEntendimieto' placeholder=\"¿Por qué crees que entendieron mejor el software con esa tecnología?\" required><br>"; 
				
			echo " <label>Más fácil para los niños usar el software </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"uso\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textUso' placeholder=\"¿Por qué en esa tecnología entendieron más fácil el software?\" required><br>"; 

			echo "<label >Aprendieron más los niños </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"aprendizaje\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textAprendizaje' placeholder=\"¿Por qué en esa tecnología aprendieron más los niños?\" required><br>"; 

			echo " <label >En qué tecnología fallo más el software </label >";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<input type=\"radio\" name=\"fallo\" value=\"$seleccionados[$col]\"> $seleccionados[$col]<br> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textFallo' placeholder=\"¿Por qué esa tecnología fallo más?\" required><br>"; 
					
			echo "<label >Qué tecnologías fue más difícil de instalar </label > ";
			for ($col=0; $col < $checked_count; $col++) {
				echo "<option value=\"$seleccionados[$col]\">$seleccionados[$col]</option> ";
			}
			echo "<p>¿Por qué?</p>";
			echo"<input type=\"text\" name='textApoyo' placeholder=\"¿Por qué en esa tecnología fue más difil de instalar?\" required><br>"; 
				
		}

	}
?>

