<?php

    $password = 'admin';

    if (isset($_POST['try'])) {
        if ($_POST['pass'] == $password) {$_SESSION['login'][0] = 1; $_SESSION['login'][1] = $_POST['user'];}
        else { include 'pages/accueil_wrong.php'; }
    }

    if (isset($_POST['page'])) { $page = 'pages/'.$_POST['page']; }
    else { $page = 'pages/accueil.php' ; }

    
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