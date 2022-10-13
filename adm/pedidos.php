<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../femenino.css">
        <title>Document</title>
    </head>
    <body>
        <?php include("menu.php") ?>

        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Produto</th>
                        <th>Data</th>                       
                    </thead>
                    <tbody>
                        <?php
                            if ( $quantidade_mensagens == 0){ ?>
                            <tr>
                                <td colspan="4"> Nenhuma mensagem foi cadastrada.</td>
                            </tr>

                        <?php   } else { 

                            while ($mensagem = $retorno_consulta -> fetch_assoc()){
                                $data = date("d/m/Y H:i", strtotime($mensagem['data']));

                                if($mensagem['status']=="ok"){
                                    $mensagem['status'] = "ok";
                                }elseif ($mensagem['status']=="recup"){
                                    $mensagem['status'] = "recup";
                                }else{
                                    $mensagem['status'] = "corrigir";
                                }
                        ?>

                                <tr class="<?php echo $mensagem['status']; ?>">

                                    <td class="<?php echo $mensagem['status']; ?>"><?php echo $mensagem['id_arquivo']; ?></td>
                                    <td class="<?php echo $mensagem['status']; ?>"><?php echo ($mensagem['nome']); ?></td>
                                    <td > <a class="<?php echo $mensagem['status']; ?>" href="../<?php echo $mensagem['path']; ?>"><?php echo $mensagem['path']; ?></a></td>
                                    <td class="<?php echo $mensagem['status']; ?>"><?php echo $data; ?></td>
                                    <td class="<?php echo $mensagem['status']; ?>"><?php echo $mensagem['atividade']; ?></td>
                                    <td class="<?php echo $mensagem['status']; ?>"> <?php echo $mensagem['status']; ?></td>

                                    

                                    <td>

                                        <a class="btn btn-default" href="editar_trabalhos.php?id=<?php echo $mensagem['id_arquivo']; ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>

                                        <a class="btn btn-default" href="deletar_trabalhos.php?id=<?php echo $mensagem['id_arquivo']; ?>" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Deletar</a>

                                        

                                    </td>

                                </tr> 

                            <?php

                                }                        

                            ?>  

                        <?php

                        }                        

                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <section class="produto">
            <div class="Listradas">
                <a href="produtos/fem1.html"><img src="../fotos\adidas.png" alt="Produto">
                <p>TÊNIS ULTRA 4DFWD</p>
                <h3>R$1.699,99</h3>
                </a>
            </div>
        </section>
        
    </body>
</html>