<?php
function connectMaBase(){
    $base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ("itm_db", $base) ;
}
?>