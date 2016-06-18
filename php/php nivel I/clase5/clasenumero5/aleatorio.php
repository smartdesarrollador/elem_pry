<?php
	$pictures = array('1.jpg', '2.jpg', '3.jpg','4.jpg', '5.jpg', '6.jpg');
	shuffle($pictures);
?>
<html>
	<head>
	<title>Contrabando Auto Partess</title>
	</head>
	<body>
	<center>    <h1>Contrabando Auto Partes</h1>
	<table width = 100%>
	<tr>
<?php
	for ( $i = 0; $i < 3; $i++ )   {
	      echo '<td align="center"><img src="';
	      echo $pictures[$i];
	      echo '"width="100" height="100"></td>';   }
?>
	</tr>
	</table>
	</center>
	</body>
</html>
