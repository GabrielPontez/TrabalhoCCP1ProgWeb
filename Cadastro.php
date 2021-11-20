<?php
    function media($nota1,$nota2){
            $media = ($nota1 + $nota2) / 2;
            return $media;
    }
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $nota1 = (float) $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];

    $media = media($nota1,$nota2);

    echo "$nome, $matricula, $nota1, $nota2, $media";
?>