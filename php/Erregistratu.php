<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="http://sirse.info/wp-content/uploads/2015/05/cine541x311-800x500_c.jpg">
		<link rel="stylesheet" href = ../css/estiloak.css>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../js/erregistratu.js"></script>    
		<title>Erregistratu</title>
		<meta charset="UTF-8">
		<style>
		</style>
	</head>
	<body style="background-color: rgb(51, 50, 50);">
		
        <?php
            if(isset($_POST['erabiltzailea']) && isset($_POST['eposta']) && isset($_POST['pasahitza']) && isset($_POST['pasahitza2'])){
                $erabiltzailea = $_POST['erabiltzailea'];
                /*if(preg_match("/^[a-zA-Z]{1,}@[a-zA-Z]{1,}\.[a-zA-Z]{1,}$/", $_POST['eposta'])){
                    $eposta = $_POST['eposta'];
                }else{
                    echo "Eposta ez da zuzena";
                    exit();
                }
                if($_POST['pasahitza'] == $_POST['pasahitza2']){
                    $pasahitza = $_POST['pasahitza'];
                }
                else{
                    echo 'Pasahitzak ez dira berdinak!';
                }
                echo "ongietorri";*/
                $eposta = $_POST['eposta'];
                $pasahitza = $_POST['pasahitza'];
                //xmlan gorde erabiltzailea
                $fitxategia = "../xml/erabiltzaileak.xml";
                $xml = simplexml_load_file($fitxategia);
                $erabiltzaile = $xml->addChild('erabiltzaile');
                $erabiltzaile->addChild('erabiltzailea', $erabiltzailea);
                $erabiltzaile->addChild('eposta', $eposta);
                $erabiltzaile->addChild('pasahitza', $pasahitza);
                $xml->asXML($fitxategia);

                echo'<script type="text/javascript">
              alert("Erabiltzailea ondo erregistratua izan da");
              window.location.href="../index.html";
              </script>';
            }else{
                'Eremu guztiak bete!';
            }

        ?>
		
	</body>
</html>