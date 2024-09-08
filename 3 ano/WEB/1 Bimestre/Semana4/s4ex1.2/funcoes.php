<?php
    function bonus($saldo){
        if($saldo<=1000){
            $bonus = 5;
        }else{
            $bonus = 10;
        }
        return $bonus;
    }
?>