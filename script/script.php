<?php

    $password = 'admin';
    
    if (isset($_POST['log'])) { session_destroy(); session_start(); }

    if (isset($_POST['try'])) {
        if ($_POST['pass'] == $password) {$_SESSION['login'][0] = 1; $_SESSION['login'][1] = $_POST['user']; $page = 'pages/accueil.php'; }
        else { include 'pages/accueil_wrong.php'; }
    }

    if (isset($_SESSION['login'])) {

        if ($_SESSION['login'][0] == 1) {

            if (isset($_POST['page'])) { $page = 'pages/'.$_POST['page']; } else { $page = 'pages/accueil_login.php'; }

        } else { $page = 'pages/accueil_login.php'; }

    } else { $page = 'pages/accueil_login.php'; }

    switch($page) {
        case 'pages/article.php': $color1 = "red"; $color2 = "lightblue"; break;
        case 'pages/commandes.php': $color1 = "blue"; $color2 = "lightgreen"; break;
        case 'pages/client.php': $color1 = "green"; $color2 = "lightred"; break;
        default: $color1 = "black"; $color2 = "white"; break;
    }

    

    function SelectField($name, $option) {
        echo "<select name='{$name}'>";
        foreach ($option as $value) { echo ("<option value='{$value}'>{$value}</option>"); }
        echo "</select>";
    }

    function InputField($label, $name, $type, $other) {
        echo "<label for={$label}>{$label}</label>";
        echo "<input id='{$label}' name='{$name}' type='{$type}' ";
        foreach ($other as $value) { echo "{$value[0]}='{$value[1]}' "; }
        echo '/>';
    }

    function ButtonField($attr, $name){
	echo "<button";
        foreach ($attr as $value) { echo "{$value[0]}='{$value[1]}' "; }
	echo ">{$name}</button>";
    }

?>