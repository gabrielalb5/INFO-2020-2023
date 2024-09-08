<?php

function calcularMedia($nota1, $nota2) {
  return ($nota1 + $nota2) / 2;
}

function validarMedia($media) {
  if ($media >= 6) {
    return true;
  } else {
    return false;
  }
}

function validarFrequencia($presenca) {
  if ($presenca >= 75) {
    return true;
  } else {
    return false;
  }
}

function aprovado($rv){
    if($rv>=6){
      return true;
    }else{
      return false;
    }
}
?>