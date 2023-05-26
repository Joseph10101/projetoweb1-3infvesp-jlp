<?php
    require 'dados.php';

    if (!isset($_GET["i"])){
        header("location: index.php");
        die;
    }

    $info = $_GET ["i"];

         $f = $produtos[$info];

    //$info = $produtos[$_GET["index"]];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DoPe - Produto Fresquinho</title>
    <link rel="shortcut icon" type="image/x-icon" href="/imgs/favicon.ico">
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

    <section class = "inicial">

        <div class= "inicial-img">
            <img src="<?=$f["imagem"]?>">
        </div>

        <div class="inicial-txt">
            <h1><?=$f["nome"]?></h1>
            <h2><span class='menor'>R$</span><?=$f["preco"]?><span class='menor'><?=$f["quantidade"]?></span></h2>
            <a title="Compra" href="index.php"><button>Adicionar ao Carrinho</button></a>
            <p><?=$f["descricao"]?></p>
        </div>
    </section>

    <h1 class="divisao">VEJA TAMBÉM</h1>

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