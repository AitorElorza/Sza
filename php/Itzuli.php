<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    $alokairua= simplexml_load_file("../xml/filmak.xml");
    
    foreach($alokairua->filma as $film){
        if($film->attributes()->id==$id){
            
            //$film->alokatu=$user;
            $film->attributes()->alokagarri="true";
            $film->attributes()->alokatzaile="";
            $alokairua->asXML("../xml/filmak.xml");
            //echo "Alokatu zaio";
        }
    }
    
    $alokairua->asXML("../xml/filmak.xml");
    //echo "true";
}

?>