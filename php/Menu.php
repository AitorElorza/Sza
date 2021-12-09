<div id='page-wrap'>
<header class='main' id='h1'>
    <?php
    /*session_start();
    $parametroak = "";
    if (isset($_SESSION['eposta'])) {
        $parametroak = $_SESSION['eposta'];
        $parametroak = $parametroak.$_SESSION['irudia'];
    }

    if (isset($_SESSION['eposta'])) {
        echo '<span class="right"><a href="../php/LogOut.php">Logout</a></span> &nbsp;';
        echo $_SESSION['eposta'].'&nbsp;';

        if (isset($_SESSION['irudia']) && file_exists($_SESSION['irudia'])) {
            $irudia = file_get_contents($_SESSION['irudia']);
            echo '<img src="data:image;base64,' . base64_encode($irudia) . '" height=50 width=50"/>';
        } else {
            echo '<img src="../images/default_erabiltzailea.png" height=50 width=50"/>';
        }
    } else {
        echo '<span class="right"><a href="../php/SignUp.php">Erregistratu</a></span> &nbsp;';
        echo '<span class="right"><a href="../php/LogIn.php">Login</a></span> &nbsp;';
        echo 'Anonimoa &nbsp;';
        echo '<img src="../images/erabiltzaile_anonimoa.png" height=50 width=50"/>';
    }*/
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
