<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Questão 2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- CSS Leandro -->
    <link rel="stylesheet" href="main.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 content">
                <div class="panel panel-default panel-profile">
                    <div class="panel-heading" style="background-image: url(logo.jpg)"></div>
                    <div class="panel-body">
                        <?php 
                            $sorteados = array("1", "4", "5", "6", "9", "10", "11", "12", "19", "20", "21", "22", "23", "24", "25");
                            
                            include('funcao.php');                         
                            $jogo1 = sorteioLotoFacil();
                            $jogo2 = sorteioLotoFacil();
                            $jogo3 = sorteioLotoFacil();                        
                        ?>
                        
                        <div class="row">
                            <p class="text-center">Jogo 1</p>
                            <?php for($a=1; $a <= 25; $a++){ ?>
                                <?php
                                    if (in_array($a, $sorteados) && in_array($a, $jogo1)){ 
                                        $s = "verde";
                                    }elseif (!in_array($a, $sorteados) && in_array($a, $jogo1)){ 
                                        $s = "preto";
                                    }else{
                                        $s = "";
                                    }
                                ?>
                                <div class="col-md-2 border <?= $s; ?>">
                                    <?= $a; ?>
                                </div>
                            <?php } ?>
                        </div>
                        
                        
                        <div class="row">
                            <p class="text-center">Jogo 2</p>
                            <?php for($a=1; $a <= 25; $a++){ ?>
                                <?php
                                    if (in_array($a, $sorteados) && in_array($a, $jogo2)){ 
                                        $s = "verde";
                                    }elseif (!in_array($a, $sorteados) && in_array($a, $jogo2)){ 
                                        $s = "preto";
                                    }else{
                                        $s = "";
                                    }
                                ?>
                                <div class="col-md-2 border <?= $s; ?>">
                                    <?= $a; ?>
                                </div>
                            <?php } ?>
                        </div>
                        
                        
                        <div class="row">
                            <p class="text-center">Jogo 3</p>
                            <?php for($a=1; $a <= 25; $a++){ ?>
                                <?php
                                    if (in_array($a, $sorteados) && in_array($a, $jogo3)){ 
                                        $s = "verde";
                                    }elseif (!in_array($a, $sorteados) && in_array($a, $jogo3)){ 
                                        $s = "preto";
                                    }else{
                                        $s = "";
                                    }
                                ?>
                                <div class="col-md-2 border <?= $s; ?>">
                                    <?= $a; ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <br />
                            <p>Verde: Números que joguei e foram contemplados</p>
                            <p>Preto: Números que joguei e não foram contemplados</p>
                            <p>Branco: Números que não joguei e não foram contemplados</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>