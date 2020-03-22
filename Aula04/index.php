<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        
        $c1 = new Caneta('BIC', "Azul", 0.5);
        //$c1->modelo = "Bic";// posso fazer desse jeito tbm para mostrar na tela 
        $c1->setPonta(0.5);
        //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        print_r($c1);
        
        
        
        
        
        ?>
    </body>
</html>
