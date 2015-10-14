<html>
	<head>
		<style>
			 td {
			   border: 1px solid black;
			}
		</style>
	</head>
<?php
	
	$images = array(
		array("name" => "image1", "url" => "image_01.jpg"),
		array("name" => "image2", "url" => "image_02.jpg"),
		array("name" => "image3", "url" => "image_03.jpg"),
		array("name" => "image4", "url" => "image_04.jpg"),
				);
	?>
	<body>
		Hello Dani
		<?php
			echo "PHP is COOL!! and Rocks</br>";

		?>

		
		
	<table align="center">
		<?php
			
		for ($i=0; $i < count($images) ; $i++) { 		
			$url=	$images[$i]['url'];
			$image= $images[$i]['name'];
			
			echo "<td> <img src=$url> </br> <a href=$url>$image</a></td> ";
			
		}
	
		?>
  </table>

		
	</body>

</html>