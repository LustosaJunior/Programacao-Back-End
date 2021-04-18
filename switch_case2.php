<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php

			$resultado = 8 + 2;

			echo $resultado;

			switch ($resultado) {
				case 11:
					echo "Caiu no 1º case";
					break;
				case "10":
					echo "Caiu no 2º case";
					break;
				case (5 + 5):
					echo "Caiu no 3º";
					break;
				default:
					echo "Caiu no deafult";
					break;
			}

		?>
	</body>
</html>