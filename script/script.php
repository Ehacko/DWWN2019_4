<?php

    $password = 'admin';
    
    if (isset($_POST['log'])) { session_destroy(); session_start(); }

    if (isset($_POST['pass'])) {
        if ($_POST['pass'] == $password) {
            $_SESSION['login'][0] = 1; 
            $_SESSION['login'][1] = $_POST['user']; 
            $page = 'pages/accueil.php'; 
        } 
        else { include 'pages/accueil_wrong.php'; }
    }

    //Si l'utilisateur esy connecté
    if (isset($_SESSION['login']) && $_SESSION['login'][0] == 1) {
        if (isset($_POST['page'])) { $page = 'pages/'.$_POST['page']; 
        } else { $page = 'pages/accueil.php'; }
    } else { $page = 'pages/accueil.php'; }

    switch($page) {
        case 'pages/article.php'    : $color1 = "darkred"   ; $color2 = "lightblue"  ; break;
        case 'pages/commandes.php'  : $color1 = "darkblue"  ; $color2 = "lightgreen" ; break;
        case 'pages/client.php'     : $color1 = "darkgreen" ; $color2 = "pink"       ; break;
        default                     : $color1 = "black"     ; $color2 = "white"      ; break;
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