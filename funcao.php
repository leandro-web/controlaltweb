<?php
    function sorteioLotoFacil(){
        $qtd = 15;
        $sorteio = array(); 
        
        while(count($sorteio) < $qtd){
            $numeros = rand( 1, 25 );
            if (!in_array($numeros, $sorteio)) { 
                array_push($sorteio, $numeros);
            }
        } 
        asort($sorteio);
        return $sorteio;
    }    
?>