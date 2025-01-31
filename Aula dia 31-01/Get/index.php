<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET - PHP</title>
</head>
<body>
    <h1>GET - Banco de Dados - PHP</h1>

    <?php
        echo "Banco de dados";

        // Definir as informações de conexão ao banco de dados

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbnome = "banco";

        // Criando a conexão com o banco de dados 
        $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);

        //Definir a consulta SQL para selecionar os registros da tabela

        $comando_banco = "SELECT * FROM nomes";

        //Executa a consulta SQL e armazena em uma variável

        $resultado_tabela = mysqli_query($conexao, $comando_banco);

        //Percorrer todos os registros e imprimindo na tela

        while($linha_registro = mysqli_fetch_assoc($resultado_tabela)){
            //Imprimindo os valores da tabema

            echo "<p> id: " . $linha_registro['id'] . "</p>";
            echo "<br>";
            echo "<p> Nome: " . $linha_registro['nome'] . "</p>";
            echo "<br>";
            echo "<p> Sobrenome: " . $linha_registro['sobrenome'] . "</p>";
            echo "<hr>";
            
        }

        //Fechar a conexão

        mysqli_close($conexao);
    ?>
</body>
</html>