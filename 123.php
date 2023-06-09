<?php
if (isset($_POST["button"])) {
    include("123d).php");
    $conta = new Conta();

    if ($_POST["button"] === "depositar") {
        $conta->depositar($_POST["valor"]);
    } elseif ($_POST["button"] === "sacar") {
        $conta->sacar($_POST["valor"]);
    }

    $saldo = $conta->getSaldo();
    echo "O saldo é: " . $saldo;
}
?>

<form action="" method="post">
    <input type="text" name="valor" placeholder="Digite o valor">
    <button type="submit" value="depositar" name="button">Depositar</button>
    <button type="submit" value="sacar" name="button">Sacar</button>
</form>
