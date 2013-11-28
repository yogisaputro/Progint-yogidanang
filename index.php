<?php 
	$xmlfile = simplexml_load_file("cd_catalog.xml");
	// htmlspecialchars($_GET["kolom"]);
	header("content-type: text/xml");
	if (htmlspecialchars($_GET["kolom"])=='all'){
		echo "<".$xmlfile->getName().">";
		foreach ($xmlfile->children() as $children1){
		 	echo "<".$children1->getName().">";
		 		foreach ($children1->children() as $children2) {
		 			echo "<".$children2->getName().">".$children2."</".$children2->getName().">";
		 		}
		 	echo "</".$children1->getName().">";
		}
		echo "</".$xmlfile->getName().">";
	}
	elseif (htmlspecialchars($_GET["kolom"])=='basic'){
		echo "<".$xmlfile->getName().">";
		foreach ($xmlfile->children() as $children1){
		 	echo "<".$children1->getName().">";
		 		foreach ($children1->children() as $children2) {
		 			$nama = $children2->getName();
		 			if ($nama =='TITLE' OR $nama =='ARTIST' OR $nama =='YEAR'){
		 				echo "<".$children2->getName().">".$children2."</".$children2->getName().">";
		 			}
		 		}
		 	echo "</".$children1->getName().">";
		}
		echo "</".$xmlfile->getName().">";
	}
 ?>
