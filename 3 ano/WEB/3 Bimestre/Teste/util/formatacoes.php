<?php
function formatadata($data){
    if($data == "" OR $data == "0000-00-00"){
        return "";
    }else{
        $dados = explode("-",$data);
        $data_formatada = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
        return $data_formatada;
    }
}
?>