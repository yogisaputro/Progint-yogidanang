<html>
<head>
	<title>Web Service</title>
</head>
<body>
	<?php
		$uri = $_POST['app'];
		echo 'URI: '.$uri.'<br/>'; 
		$xml = simplexml_load_file($uri);
		echo 'Tabel : '.$xml->getName() . "<br>";

		echo '<table border=1> <br>';
		foreach($xml->children() as $child)
		  {
		  	foreach ($child->children() as $child2) {
		  		echo '<tr><td>';
			  	echo $child2->getName() ;
			  	echo '</td><td>';
			  	echo $child2 . "<br>";
			  	echo '</td></tr>';
		  	}
		  }
		echo '</table>';
	?>
</body>
</html>
