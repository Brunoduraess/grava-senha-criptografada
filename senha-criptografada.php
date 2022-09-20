<?php
if (isset($_POST['envia'])) { //se existir a var submit, ele vai salvar os dados no banco

    include('conexao.php');

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO sua_tabela(campo_senha) VALUES (
            '" . utf8_decode($senha) . "')");

}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <form action="senha-criptografada.php" name="contactForm" id="contactForm" method="post" enctype="multipart/form-data">

        <label>Informe uma senha:</label>
        <input type="password" name="senha">

        <input type="submit" name="envia">
    </form>
</body>

</html>