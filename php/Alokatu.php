<?php
if(isset($_POST['id']) && isset($_POST['user'])){
    $id = $_POST['id'];
    $user = $_POST['user'];
    $alokairua= simplexml_load_file("../xml/filmak.xml");
    
    foreach($alokairua->filma as $film){
        if($film->attributes()->id==$id){
            
            
            $film->attributes()->alokagarri="false";
            $film->attributes()->alokatzaile=$user;
            $alokairua->asXML("../xml/filmak.xml");
            
        }
    }
    
    $alokairua->asXML("../xml/filmak.xml");
    //echo "true";
}

?>