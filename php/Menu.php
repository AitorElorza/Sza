<div id='page-wrap'>
<header class='main' id='h1'>
    <?php
    
    session_start();
    echo '<span class="right"><a href="../index.html"><button class="botoia">Itzuli</button></a></span> &nbsp;';
    if(isset($_SESSION['erabiltzailea'])){
        echo '<span class="right"><a href="../php/Irten.php"><button class="botoia">Amaitu Saioa</button></a></span> &nbsp;';
        echo $_SESSION['erabiltzailea'].'&nbsp;';
    }else{
    echo '<span class="right">Gonbidatua</span>';
    }

    ?>
</header>

<nav class='main' id='n1' role='navigation'>
    
</nav>
