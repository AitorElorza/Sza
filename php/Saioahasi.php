<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="http://sirse.info/wp-content/uploads/2015/05/cine541x311-800x500_c.jpg">
		<link rel="stylesheet" href = ../css/estiloak.css>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../js/erregistratu.js"></script>    
		<title>SaioaHasi</title>
		<meta charset="UTF-8">
		<style>
		</style>
	</head>
	<body style="background-color: rgb(51, 50, 50);">
		<div class="formularioa">
            <form id="shasi" method="post" >
                <!--Erabiltzailearen eposta lortu-->
                <label>Eposta:</label>
                <input type="text" name="eposta" id="eposta"><br/>
                <!--Pasahitza sartu-->
                <label>Pasahitza:</label>
                <input type="password" name="pasahitza" id="pasahitza"><br/>
                

                <input class="botoi" type="submit" name="saioahasi" id="saioahasi" value="Saioa hasi"><br>
            </form>

            <?php
                if(!empty($_POST)){
                    $datuak = $_POST;
                
                $erabiltzaileak = simplexml_load_file('../xml/erabiltzaileak.xml');
                foreach($erabiltzaileak->erabiltzaile as $erabiltzailea) {
                    if((string)$erabiltzailea->eposta == $datuak['eposta'] && (string)$erabiltzailea->pasahitza == $datuak['pasahitza']){
                        session_start();
                        $_SESSION['erabiltzailea'] = (string)$erabiltzailea->erabiltzailea;
                        $_SESSION['eposta'] = (string)$erabiltzailea->eposta;//alokatzeko eposta bidez gordetzen da
                        //automatikoki katalogora bidali
                        echo'<script type="text/javascript">
                        alert("Ongi etorri");
                        window.location.href="../php/Katalogoa.php";
                        </script>';
                        break;
                    }
                }
            }
            ?>
            <a href="../index.html"><button class="botoi">Itzuli</button></a>
		</div>
		
	</body>
</html>