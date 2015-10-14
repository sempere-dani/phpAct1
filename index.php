<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learning PHP</title>
<style>
			 td {
			   border: 1px solid black;
			}
		</style>
</head>

<body>
 <table >
	<?php
			for($i=1; $i<=4; $i++){
				
				if($i<=2){
				
				echo "<td>";
		 		echo "<img src=\"image_0".$i.".jpg\"width=200 height=200>";
				echo "</br>";
				echo "<a href=\"image_0".$i.".jpg\">image_0.$i.jpg</a>";
				
			
				}else{
				if($i==3){
				echo "<tr>";
				echo "<td>";
		 		echo "<img src=\"image_0".$i.".jpg\"width=200 height=200>";
				echo "</br>";
				echo "<a href=\"image_0".$i.".jpg\">image_0.$i.jpg</a>";
				
				}
				else{
				echo "<td>";
		 		echo "<img src=\"image_0".$i.".jpg\"width=200 height=200>";
				echo "</br>";
				echo "<a href=\"image_0".$i.".jpg\">image_0.$i.jpg</a>";
				echo "</tr>";
				}
				}
			}
    ?>
</table> 
</body>
</html>