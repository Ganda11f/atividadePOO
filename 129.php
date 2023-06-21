<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>129</title>
</head>
<body>
    <?php
    require_once('class129.php');
    if (isset($_POST['botao'])) {
        $sequencia = new Sequencia();
        $sequencia->setFim($_POST['fim']);
        $sequencia->setInicio($_POST['inicio']);
        if ($_POST['mostra'] == 'todos') {
            $sequencia->exibirNumeros();
        } elseif ($_POST['mostra'] == 'pares') {
            $sequencia->exibirPares();
        } elseif ($_POST['mostra'] == 'impares') {
            $sequencia->exibirImpares();
        }
    } else {
    ?>
    <form action="" method="post">
        Selecione o valor de início:
        <select name='inicio'>
            <option value='1' selected>1</option>
            
            <?php
            for ($i = 2; $i <= 100; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select> 
        <select name='fim'>
            <?php 
            for ($i = 1; $i <= 99; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
            <option value='100' selected>100</option>
        </select>
        Numeros:<br>
        <input type='radio' name='mostra' value='todos' checked>Todos<br>
        <input type='radio' name='mostra' value='pares'>Pares<br>
        <input type='radio' name='mostra' value='impares'>Impares<br>
        <input type='submit' name='botao' value='Enviar'>
    </form>
    <?php
    }
    ?>
</body>
</html>