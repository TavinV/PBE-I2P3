<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Crud Post</h1>
    
    <form method="post">
        <label for="">Nome</label>
        <input name="nome" type="text">
        <label for="">Sobrenome</label>
        <input name="sobrenome" type="text">
        <input type="submit" value="Enviar">
    </form>
    
    <?php 
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbnome = "banco";

    // Criando a conexão com o banco de dados 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        $comando_banco = "INSERT INTO alunos (nome, sobrenome) VALUES('$nome', '$sobrenome')";

        if (mysqli_query($conexao, $comando_banco)) {
            echo "Registro Feito!";
        } else {
            echo "Erro ao registrar";
        }
    }
    ?>

    <h1 style='margin-top: 150vh'>Teixeira para de me molestar</h1>
</body>
</html>