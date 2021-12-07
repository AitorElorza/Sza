<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="http://sirse.info/wp-content/uploads/2015/05/cine541x311-800x500_c.jpg">
		<link rel="stylesheet" href = ../css/estiloak.css?v=<?php echo time(); ?>">
		<title>Katalogoa</title>
		<meta charset=UTF-8">
		<style>
		</style>
	</head>
	<body style="background-color: rgb(51, 50, 50);">
		<?php include '../php/Menu.php' ?>
		<?php 
						$filmak = simplexml_load_file('../xml/filmak.xml');
                        echo('<div class="filmak">');
						foreach($filmak-> filma as $filma){
							  echo('<div class="filma">');
                              echo('<img class="karatula" src="' . $filma->karatula . '"alt="'.$filma->izena.'">');
                              echo('<div class="datuak">');
							  echo('<p class="izenburua">' .$filma->izena . '</p>');
                              echo('<div class="goiburua"><div class="zuzendari">' . $filma->zuzendaria);
                              echo(' - ' . $filma->data.'</div>');
                              if ($filma['alokagarri']=="true"){
                                echo('<div class="alokbai">Alokagarri</div>');
                              }
                              elseif ($filma['alokagarri']=="false"){
                                echo('<div class="alokez">Ez alokagarri</div>');
                              }
                              echo('</div>');
							  echo('<p>' . $filma->iruzkina . '</p>');
							  echo('<p class="nota">Nota:' . $filma->balorazioa . '/10</p>');
                              echo('</div>');
							  echo('</div>');
							  }
                        echo('</div>');
				  ?>
		
	</body>
</html>
