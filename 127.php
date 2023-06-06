<?php
if (isset ($_POST["button"])){
    include ("retangulo.php");
    $retangulo = new Retangulo();
    $retangulo->setLadoMaior ($_POST["largura"]);
    $retangulo->setLadoMenor ($_POST["altura"]);
    $area = $retangulo->calcularArea();
    echo "A área do retangulo é:".$area;
}
 ?>
     <form action="127.php" method="post">
    <label for="largura">Informe a largura:</label>
    <input type="text" name="largura"><br>

    <label for="altura">Informe a altura:</label>
    <input type="text" name="altura"><br>

    <button type="submit" value="calcular" name="button">Calcular area</button>
</form>
<?php 
?>