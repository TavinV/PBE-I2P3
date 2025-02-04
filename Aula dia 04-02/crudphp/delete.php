<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Crud Delete</h1>
    
    <form method="">
        <label for="">Id</label>
        <input name="id" type="number">
        <input type="submit" value="Deletar">
    </form>
    
    <?php 
    
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbnome = "banco";

    // Criando a conexão com o banco de dados 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    if(isset($_GET['id'])) mysqli_query($conexao, 
    "DELETE FROM alunos WHERE id= {$_GET['id']}")
    ?>

    <h1 style='margin-top: 150vh'>Teixeira para de me molestar</h1>
</body>
</html>