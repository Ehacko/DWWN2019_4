<?php
    
    if (isset($_POST['page'])) { $page = $_POST['page']; }
    else { $page = 'accueil.php' ; }
    
    function SelectField($name, $option) {
        echo "<select name='{$name}'>";
        foreach ($option as $value) { echo "<option value='{$value}'>{$value}</option>" };
        echo "</select>";
    }

    function InputField($label, $name, $type, $other) {
        echo "<label for={$label}>{$label}</label>";
        echo "<input id='{$label}' name='{$name}' type='{$type}' ";
        foreach ($other as $value) { echo "{$value[0]}='{$value[1]}' " };
        echo '/>';
    }

    function ButtonField($attr, $name){
	echo "<button";
        foreach ($attr as $value) { echo "{$value[0]}='{$value[1]}' " };
	echo ">{$name}</button>";
    }
?>