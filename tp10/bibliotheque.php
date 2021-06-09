<?php

function panel_head($titre){
    
    echo ('<div class="panel panel-primary">');
    echo ('<div class="panel-heading">');       
    echo  $titre;    
    echo    '</div>';
    echo    '</div>';
    
    
}


function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    //echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}

function form_input_submit($value) {
    echo ("<input type='submit' class='btn btn-primary' value='$value'>");
}

function form_end() {
    echo ("</form>");
}

function form_select_query($label, $name, $size, $statement) {
    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    
    echo (" <select class='form-control' name='$name' size='$size' multiple>");

    while($tuple = $statement->fetch()){
        printf("<option value='%d'>%d</option>",$tuple["annee"],$tuple["annee"]);
    }

    echo (" </select>");
    echo ("</div>");
}

?>

