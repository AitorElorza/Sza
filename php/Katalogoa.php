<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="http://sirse.info/wp-content/uploads/2015/05/cine541x311-800x500_c.jpg">
		<link rel="stylesheet" href = ../css/estiloak.css?v="<?php echo time(); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../js/alokatu.js"></script> 
		<script src="../js/itzuli.js"></script> 
		<script> function arp(){
			alert("Hau proba bat da");
		}</script> 
		<title>Katalogoa</title>
		<meta charset="UTF-8">
		<style>
		</style>
	</head>
	<body style="background-color: rgb(51, 50, 50);">
		<?php include '../php/Menu.php' ?>
		<?php 
						$filmak = simplexml_load_file('../xml/filmak.xml');
                        echo('<div class="filmak">');
						foreach($filmak-> filma as $filma){
							  echo('<div class="filma" id='.$filma["id"].'>');
                              echo('<img class="karatula" src="' . $filma->karatula . '"alt="'.$filma->izena.'">');
                              echo('<div class="datuak">');
							  echo('<p class="izenburua">' .$filma->izena . '</p>');
                              echo('<div class="goiburua"><div class="zuzendari">' . $filma->zuzendaria);
                              echo(' - ' . $filma->data.'</div>');
                              if ($filma['alokagarri']=="true"){
                                echo('<div class="alokbai">Alokagarri</div>');
								if(isset($_SESSION['erabiltzailea'])){
									if($_SESSION['erabiltzailea']!=""){
										$lag1= "'".$filma["id"]."'";
										$lag2= "'".$_SESSION["eposta"]."'";
										echo('<button class="botoia" onclick="alokatu('.$lag1.','.$lag2.');">alokatu</button>');
									}
								}
								
                              }
                              elseif ($filma['alokagarri']=="false"){
                                echo('<div class="alokez">Ez alokagarri</div>');
								if(isset($_SESSION['eposta'])){
									if($_SESSION['eposta']==(string)$filma['alokatzaile']){
										$lag1= "'".$filma["id"]."'";
										echo('<button class="botoia" onclick="itzuli('.$lag1.');">itzuli</button>');
										
									}
								}

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
