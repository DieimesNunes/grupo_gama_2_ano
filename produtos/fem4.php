<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    $_SESSION['id'] = "4";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> 
        <link rel="stylesheet" href="produto.css">
        <title>Meia Inteira</title>
        <!-- Ícones -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <!-- Fonte -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php include ("menu.php");?>   
        <main>
            <section class="produto">
                
                <div>
                    <img src="../fotos/adidas3.png" alt="Produto Listrada Zebra">
                </div>
                <ul>
                    <li><div><h2>TÊNIS FORUM BOLD</h2></div></li>
                    <li><p>Tênis supeeer na moda e estiloso, disponivel para você!!!.</p></li>
                    <li>Marca: Adidas</li>               
                    <li>Tamanho: <button>33 ao 36</button> <button>37 ao 39</button></li>
                    <li>Variante: <button>Laranja e Preto</button></li>
                    <li>Quantidade: 
                        <select name="quantidade" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                    <li><h3>R$699,99</h3></li>
                    <li>Até x8 no cartão sem juros</li>
                    <li>
                        <form action="../contato.php" method="get">

                            <button type="submit">Entre em contato</button>
                        </form> 
                    </li>
                </ul>
            </section>

        </main>
            
<br>
        <footer class="fixar">
        <ul>               
                <li> <a href="../institucional.php"> Quem somos </a></li>
                
            </ul>
        </footer>

    </body>
</html>