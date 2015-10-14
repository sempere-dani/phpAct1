<?php
	require "header.php";

?>

<html>
	<head>
	
		
	</head>
	
	<body>
		<?php
			echo "This is a connextion test </br>";
			$page = new header();
			

			echo $page->getTitle();
			echo "</br>".$page->getPie();
			
		?>

		
		
	</body>

</html>