<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once "Bolsista.php";
            //$p1 = new Pessoa();
            /*$v1 = new Visitante();
            $v1->setNome("Lorran");
            $v1->setIdade(23);
            $v1->setSexo("M");
            print_r($v1);*/
            
            $a1 = new Aluno();
            $a1->setNome("Lorran");
            $a1->setMatricula(11111);
            $a1->setIdade(23);
            $a1->setSexo("M");
            $a1->setCurso("Ciência da computação");
            $a1->pagarMensalidade();
            print_r($a1);
            
            $b1 = new Bolsista();
            $b1->setMatricula(11112);
            $b1->setNome("Lorran");
            $b1->setBolsa(12.5);
            $b1->setCurso("Analise e desenvolvimento de sistemas");
            $b1->setIdade(23);
            $b1->setSexo("M");
            print_r($b1);
        ?>
        </pre>
    </body>
</html>
