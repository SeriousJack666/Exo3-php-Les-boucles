<!DOCTYPE html>
<html>
<head>
	<title>Exos Php 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<?php

		echo "<div class='wrapper'>";

			echo "<div>";

				echo "<h1>"."Exo 1"."</h1>";

					$i = 0;

					while ( $i < 10) {
						echo "<p>".$i."</p>";
						$i++;
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 2"."</h1>";

					$var1 = 0;
					$var2 = 30;

					while ( $var1<= 20) {
						echo "<p>".$var1*$var2."</p>";
						$var1++;
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 3"."</h1>";

					$var1 = 30;
					$var2 = 2.3;

					while ( $var1 > 10) {
						echo "<p>".$var1*$var2."</p>";
						$var1--;
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 4"."</h1>";

					$var1 = 1;

					while ($var1 < 10) {
						echo "<p>".$var1."</p>";
						$var1 = $var1 + $var1/2;
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 5"."</h1>";

					for ($i=1; $i < 16; $i++) {	 
						echo "<p>"."On y arrive presque."."</p>";
						
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 6"."</h1>";

					for ($i=20; $i >= 0; $i--) {	 
						echo "<p>"."C'est presque bon."."</p>";
						
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 7"."</h1>";

					for ($i=1; $i < 100; $i+=15) {	 
						echo "<p>"."On tient le bon bout."."</p>";
						
					}

			echo "</div>";


			echo "<div>";

				echo "<h1>"."Exo 8"."</h1>";

					for ($i=200; $i > 0; $i-=12) {	 
						echo "<p>"."Enfin !!!!"."</p>";
						
					}

			echo "</div>";
			
		echo "</div>";

	?>

</body>
</html>