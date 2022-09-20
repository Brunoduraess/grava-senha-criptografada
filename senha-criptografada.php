<?php
include('conexao.php'); //chama o arquivo de conexão com o BD

if (isset($_POST['envia'])) { //Caso exista um post do formulário, ele realiza as condições abaixo.
    
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //Usa o password_hash para criptografar a senha.
    
    //Inserindo os dados no BD.
    $result = mysqli_query($conexao, "INSERT INTO sua_tabela(campo_senha) VALUES (
            '" . $senha . "')");

}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="senha-criptografada.php">

        <label>Informe uma senha:</label>
        <input type="password" name="senha">

        <input type="submit" name="envia">
    </form>
</body>

</html>
