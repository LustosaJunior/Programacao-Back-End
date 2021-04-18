<!DOCTYPE html>
<html>
<head>
	<title>Seitch..Case</title>
</head>
<body>
	<?php

		$nota = rand(9, 10);
		echo $nota."<br/>";

		switch ($nota) { // equivalente ao "==" ou seja, não compara o tipo
			case 10:
			case 9:
				echo "Arrebentou!";
				break;
			case 8:
				echo "Foi aprovado, com 8!";
				break;
			case 7: 
				echo "Tirou 7. Precisa estudar hein!";
				break;
			case 6:
				echo "Aprovado, mas precisa estudar mais!";
				break;
			case 5:
				echo "Reprovado. Por pouco hein!";
				break;
			case 2:
				echo "Foi mal pra caramba.";
				break;
			default:
				echo "Não sei dizer!";
				break;
		}


	?>

</body>
</html>