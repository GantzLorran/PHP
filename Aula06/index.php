<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <h1>Controle Remoto</h1>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->abrirMenu();//Esse item tem que sempre esta abaixo de todos os outros itens porque se não estiver o programa não funciona
        ?>
        </pre>
    </body>
</html>
