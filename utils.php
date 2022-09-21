<?php

function baseURL($path_file){
    #Captura a URL do diretório atual do servidor
    $url = explode('/', $_SERVER["REQUEST_URI"]);
    array_pop($url);
    $url = implode('/', $url);

    #Prepara a url da imagem (exemplo: http://localhost/upload/imagens/ARQUIVO.png)
    $url_path = 'http://'.$_SERVER['HTTP_HOST'].$url.'/'.$path_file;
    return $url_path;
}

?>