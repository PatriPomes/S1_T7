<?php

namespace Patri;

?>

<form   method="post" action="">
    <label for="nota">Introduzca la nota del estudiente entre 0 y 100:</label>
    <input type="text" name="nota" id="nota"><br><br>
    <button type="submit" name="enviar">Enviar notas</button>
</form>

<?php
if (isset($_POST['enviar'])) {
    $nota = $_POST['nota'];
  echo  "La nota es de" .$nota."". grau($nota);
 }

function grau($nota){
    
    if ($nota>="6"){
        echo "Enorabuena, estas en PRIMERA DIVISION!!!! ";
    }elseif ("5.9">=$nota && $nota>="4.5" ){
        echo "Buen trabajo, estas en SEGUNDA DIVISION!!!! ";
    }elseif ("4.4">=$nota && $nota>="3.3"){
        echo "Sigue esforzandote, estas en TERCERA DIVISION!!!! ";
    }else{
        echo "Tendras que reprobar, lo lamento.";
    }
}
//grau($nota);
//echo "<br>";
//echo "<br>";


?>