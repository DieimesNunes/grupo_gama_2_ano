<?php
    include("conexao.php");

    $consultar_sql = "SELECT * FROM contato_projeto"; 
    $retorno_consulta = $mysqli->query( $consultar_sql) or die($mysqli->error);
    $quantidade_mensagens = $retorno_consulta->num_rows; // Retornar quantidade de linhas
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Consultar Mensagens</h1>

        <table>
            <thead>
                <th>Nome:</th>
                <th>Mensagens:</th>
            </thead>
            <tbody>
                <?php
                 if ( $quantidade_mensagens == 0){ 
                ?>
                <tr>
                    <td colspan="2"> Nenhuma mensagem foi cadastrada.</td>
                </tr>
                <?php   } else { 
                 while ($mensagem = $retorno_consulta -> fetch_assoc()){
                    
                ?>
                    <td><?php echo $mensagem['nome']; ?></td>
                    <td><?php echo $mensagem['comentario']; ?></td>
                 
                </tr> 
                <?php

                }                        

                ?>  

                <?php

                }                        

                ?>
            </tbody>           
        </table>
    </body>
</html>