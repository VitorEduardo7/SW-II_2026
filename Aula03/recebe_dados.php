<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <?php
        $atual = date('Y');
        // $nome = $_POST ['nome'];
        // img src=https://rollingstone.com.br/entretenimento/smallville-animacao-continua-historia-da-serie-afirma-tom-welling/
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST ['email'];
        $idade = $_POST ['idade'];
        $altura = $_POST ['altura']
    ?>
    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>O idade é: <?php echo $idade; ?> </p>
    <p>A Altura é: <?php echo $altura; ?> </p>
    <?php $ano = $atual - $idade;
    echo $ano;
    ?>
    <p> <?php 
        if ($idade > 18) {
            echo "<p style='color: blue;'>Você é maior de idade.</p>"; 
        } else {
            echo "<p style='color: red;'>Você é menor de idade.</p>";
        }
     
    
    ?> </p>
</body>
</html>

