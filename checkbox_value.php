<?php
	$tres=1;
	if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {

	$seleccionados = $_POST['check_list'];

	//contador de seleccionados
	$sel_count = count($seleccionados);
	
	//Counting number of checked checkboxes 
	$checked_count = count($_POST['check_list']);
	echo "Estuviste en ".$checked_count." Code Party: <br/>";
	
	//Loop to store and display values of individual checked checkbox
		foreach($_POST['check_list'] as $selected) {
				echo "<p>".$selected ."</p>"; 
		}
		echo "<br></br>";
		/*
		echo "<table border = 1 cellspacing = 1 cellpadding = >";
		//fila
		for ($i=0; $i < $tres; $i++) { 
			
			echo "<tr>";
			
			//echo "<p>".$seleccionados[$i].  "</p>";
		//columna 
			for ($col=0; $col < $checked_count; $col++) { 
				echo "<td>$seleccionados[$col]</td>";
				
				//echo "<td> $i, $col</td>";
			}

		}
		echo"</tr>";
		echo"</table>";*/

		echo "<p><strong>Selecciona de acuerdo a lo que consideres: </strong></p>";
			echo "<p><label > Mayor motivación de los niños </label >";
				echo "<select name= \"selectmotivacion\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaMotivacion\" rows=\"3	\" cols=\"50 \" required></textarea>";
			echo "	</p>";

			echo "<p> <label >Mayor cooperación de los niños </label >";
				echo "<select name= \"selectCooperacion\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaCooperacion\" rows=\"3\" cols=\"50\" required></textarea>";
			echo "	</p>";

			echo "<p> <label >Mayor apoyo de los mentores </label >";
				echo "<select name= \"selectApoyo\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaApoyo\" rows=\"3\" cols=\"50\" required></textarea>";
			echo "	</p>";

			echo "<p> <label >Más fácil para los niños entender el sw</label >";
				echo "<select name= \"selectEntendimiento\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaEntendimiento\" rows=\"3\" cols=\"50  \"required></textarea>";
			echo "	</p>";

			echo "<p> <label>Más fácil para los niños usar el sw<label >";
				echo "<select name= \"selectUso\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaUso\" rows=\"3\" cols=\"50  \"required></textarea>";
			echo "	</p>";

			echo "<p> <label >Aprendieron más los niños</label >";
				echo "<select name= \"selectAprendizaje\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaAprendizaje\" rows=\"3\" cols=\"50 \"required></textarea>";
			echo "	</p>";

			echo "<p> <label >En qué code party fallo más el software </label >";
				echo "<select name= \"selectFallo\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaFallo\" rows=\"3\" cols=\"50 \"required></textarea>";
			echo "	</p>";

			echo "<p> <label >Qué software fue más difícil de instalar</label > ";
				echo "<select name= \"selectInstalacion\">";
					foreach($_POST['check_list'] as $selected) {
						echo "<option value=".$selected .">".$selected ."</option> ";
					}
				echo "</select>";
				echo "<p>¿Porqué?</p>";
				echo "<textarea name= \"textAreaInstalacion\" rows=\"3\" cols=\"50 \"required></textarea>";
			echo "	</p>";




		
	}

	}
?>

