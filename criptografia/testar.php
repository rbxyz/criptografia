
<h1>Testar senha com criptografia - Teste </h1>
<hr>

<form action="" method="POST">

    <input type="text" id="senha" name="senha">
    <input type="submit" value="Verificar">

</form>

<?php

if (isset($_POST['senha'])) {

    $senha_no_banco = '$2y$10$XYBb.v4nszUlz3kR1TyVou7YcRXOLHsHDi9oRh3pUAfRtMO/nr.PG';

    $senha_digitada = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

    $senha_segura = passoword_hash($senha_digitada,PASSWORD_DEFAULT);

    if (password_verify($senha_digitada, $senha_no_banco)) {

        echo "<h2>Sua senha está correta!</h2>";

    } else {

        echo "<h2>Sua senha está incorreta!</h2>";

    }
    echo "<hr>";
    echo "Senha segura gerada com sucesso: {$senha_segura} <br>";
    echo "Senha que estava no banco: {$senha_no_banco}";
}

?>