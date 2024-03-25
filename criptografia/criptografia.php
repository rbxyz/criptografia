
    <h1>Criptografia com PHP - Criptografar </h1>
    <hr>
    <form action="" method="POST">
        <input type="text" id="senha" name="senha">
        <input type="submit" value="Criptografar">
    </form>
<?php
if (isset($_POST['senha'])) {
    $senha_sem_criptografia = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
    $senha_segura = password_hash($senha_sem_criptografia,PASSWORD_DEFAULT);

    echo "<h2>Senha não criptografada: {$senha_sem_criptografia}</h2>";
    echo "<h2>Senha criptografada: {$senha_segura}</h2>";
}

?>
<a href="testar.php">Testar</a>
