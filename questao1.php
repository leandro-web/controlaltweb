<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questão 1</title>
</head>
<body>
    <?php
        include('funcao.php');    
        $resultado = sorteioLotoFacil();
    
        foreach( $resultado as $chave => $valor ){
            echo "$valor<br />";
        }        
    ?>
</body>
</html>