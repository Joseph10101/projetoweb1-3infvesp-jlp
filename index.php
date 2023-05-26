<?php
    include 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DoPe - Produto Fresquinho</title>
    <link rel="icon" type="image/x-icon" href="/imgs/favicon.ico">
</head>
<body>

    <header class="container-header">
        <div class="menu-header-1">
            <nav class="menu-header">
                <ul>
                    <li><a title="Contato" href="index.php">Contato</a></li>
                    <li><a title="Sobre Nós" href="index.php">Sobre Nós</a></li>
                </ul>
            </nav>
        </div>

        <div class="logo-div">
            <a title="Logo" href="index.php"><img src="imgs/Logo.svg" class="logo"></a>
        </div>

        <div class="menu-header-2">
            <nav class="menu-header">
                <ul>
                    <li><a title="FAQ" href="index.php">FAQ</a></li>
                    <li><a title="Parceiros" href="index.php">Parceiros</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="maozinha">
        <img src="imgs/maozinha.png">
    </div>

    <section class="container-corpo">
        <div class="body-1">
            <img src="imgs/Ilust1.svg" class="ilustration-1">
            <h1>ENTREGA RÁPIDA</h1>
            <h3>A gente vai bater na sua porta muito antes do que você espera.</h3>
        </div>

        <div class="body-1">
            <img src="imgs/diet.png" class="ilustration-1">
            <h1>PRODUTOS DE QUALIDADE</h1>
            <h3>Todas as suas marcas favoritas em um carrinho de compras só.</h3>
        </div>

        <div class="body-1">
            <img src="imgs/Ilust3.svg" class="ilustration-1">
            <h1>PREÇO EM CONTA</h1>
            <h3>Nem parece que você está comprando produtos on-line.</h3>
        </div>
    </section>

    <section class="container-corpo-2">
            <div><h1>PERTINHO<br>DE VOCÊ!</h1></div>
            <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.8666908384303!2d-41.6725546250337!3d-14.202582986237948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7444bb2050203fb%3A0xba2923ba2a5c59e0!2sBrumado!5e0!3m2!1spt-BR!2sbr!4v1685108392178!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div><img id="mao" src="imgs/mao.png" class="imagem"></div>
    </section>
    
    <section class="container-produto">
        <?php
        foreach ($produtos as $y => $x){
        ?>
        <div class="body-2">
            <a href="item.php?i=<?=$y?>"><img src="<?=$x['imagem']?>"></a>
            <div>
            <h1 style='text-transform: uppercase;'><?=$x['nome']?></h1>
            <h2 class="kg"><?=$x['quantidade']?></h2>
            </div>
            <div>
            <h2 class="Preco">R$<?=$x['preco']?></h2>
            <img src="imgs/icon_add.svg" class="ilustration">
            </div>
        </div>
        <?php
        }
        ?>
    </section>

    <footer> 
        &copy;<span id="year"> </span><span> DoPeInc. Todos os direitos reservados.</span></div>
    </footer>
</body>
</html>