<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
</head>
<body>
    <?php
    
        function media($nota1,$nota2){
                $media = ($nota1 + $nota2) / 2;
                return $media;
        }
        function cadastro($nome, $matricula, $nota1, $nota2, $media){
            $fluxoArquivo = fopen("Cadastro.txt", "a");
            fwrite($fluxoArquivo, "$nome\n");
            fwrite($fluxoArquivo, "$matricula\n");
            fwrite($fluxoArquivo, "$nota1\n");
            fwrite($fluxoArquivo, "$nota2\n");
            fwrite($fluxoArquivo, "$media\n");
            fclose($fluxoArquivo);
        }
        
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $nota1 = (float) $_POST["nota1"];
        $nota2 = (float) $_POST["nota2"];
        $media = media($nota1,$nota2);

        cadastro($nome,$matricula, $nota1, $nota2, $media);

        $cadastros = [];
        $cadastro = [];
        
        $fluxoArquivo = fopen("Cadastro.txt", "r");
            while(!feof($fluxoArquivo)){
                $cadastro["nome"] = fgets($fluxoArquivo);
                $cadastro["matricula"] = fgets($fluxoArquivo);
                $cadastro["nota1"] = fgets($fluxoArquivo);
                $cadastro["nota2"] = fgets($fluxoArquivo);
                $cadastro["media"] = fgets($fluxoArquivo);
                $cadastros[] = $cadastro;
            }
        fclose($fluxoArquivo);
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Primeira Nota</th>
            <th>Segunda Nota</th>
            <th>Media</th>
        </tr>
        <?php foreach($cadastros as $cadastro){?>
        <tr>
        <td><?php echo $cadastro["nome"]?></td>
        <td><?php echo $cadastro["matricula"]?></td>
        <td><?php echo $cadastro["nota1"]?></td>
        <td><?php echo $cadastro["nota2"]?></td>
        <td><?php echo $cadastro["media"]?></td>
        </tr>
        <?php }?>
            
    </table>
    
    <a href="FormularioCadastro.html">Página para cadastro</a>
    
</body>
</html>