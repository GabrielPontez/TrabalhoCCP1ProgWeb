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