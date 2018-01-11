<?php

class Conversor {
    public function lerTxt($filename = ''){
        $arquivo = $_FILES[$filename];

        if ($arquivo && !$arquivo['error'] && $arquivo['type'] === 'text/plain'){
            $txt = fopen($arquivo['tmp_name'], 'r');
            $data = array();

            while (($linha = fgets($txt)) !== false) {
                $nome = trim(substr($linha, 234, 40));
                $endereco = trim(substr($linha, 274, 50));

                if ($nome && $endereco){
                    $data[] = [
                        'nome' => $nome,
                        'endereco' => $endereco
                    ];
                }
            }

            fclose($txt);

            if(!empty($data)){
                Conversor::arrayToCsv($data);
            }
        } else {
            // não é aqruivo txt ou ocorreu algum erro no upload
        }
    }

    public static function arrayToCsv($lista = array()){
        $csv = 'arquivo.csv';
        $fp = fopen($csv, 'w');

        foreach ($lista as $linha) {
            fputcsv($fp, $linha);
        }
        fclose($fp);
        Conversor::downloadFile($csv);
    }

    public static function downloadFile($filename = ''){
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: Binary');
        header("Content-disposition: attachment; filename=\"" . basename($filename) . "\"");
        readfile($filename);
    }
}