<?php
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

    function ButtonField($attr){
        foreach ($attr as $value) {  }
    }
?>