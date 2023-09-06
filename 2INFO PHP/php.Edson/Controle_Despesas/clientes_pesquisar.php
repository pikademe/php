<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>
    <?php 
    
        require "menu.php";
        echo "<h3>LISTAGEM DOS CLIENTES</h3>";
        require "conexao.php";
        $sql="SELECT * FROM Clientes ORDER by nome";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='right'>Código</th>";
                echo "<th width='300' align='left'>Nome</th>";
                echo "<th width='100' align='left'>CPF</th>";
                echo "<th width='250' align='left'>E-mail</th>";
                echo "<th width='50' align='left'>Editar</th>";
            echo "</tr>";

            while($linha=mysqli_fetch_array($resultado)){

                //Obtém cada coluna da tabela de cliente e armazena
                $codigo = $linha["codigo"];
                $nome   = $linha["nome"];
                $cpf    = $linha["cpf"];
                $email  = $linha["email"];
                
                //Exibe os dados
                echo "<tr>";
                    echo "<td width='100' align'right'>$codigo</td>";
                    echo "<td width='300' align='left'>$nome</td>";
                    echo "<td width='100' align='left'>$cpf</td>";
                    echo "<td width='250' align='left'>$email</td>";
                    echo "<td width='50'><a href='clientes_editar.php?codigo=$codigo'>Editar</td>";
            
                
            
            }
        echo "</table>";
    

    
    ?>
    
</body>
</html>