<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet"/>
    <title>Contato</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>"
     method="POST" enctype="mulitpart/form-data">
        <input type="text" name="nome" placeholder="Informe seu nome:" required />
        <input type="text" name="assunto" placeholder="Informe o assunto:" required />
        <input type="text" name="mensagem" placeholder="Escreva a mensagem:" required />
        <input id="btn" type="submit" name="enviar" value="ENVIAR"/>
    </form>
    <?php
    if(isset($_POST['enviar'])){ //informa se for iniciado
        //variáveis 
        $nome = $_REQUEST['nome'];
        $assunto = $_REQUEST['assunto'];
        $mensagem = $_REQUEST['mensagem'];
        $para = "haacklouise05@gmail.com"; 
        
        if(mail($para, $assunto, $mensagem, $nome)){
            echo("Seu e-amil foi enviado.");
        }else{
            echo("Erro!");
        }
    }   
    ?>    
</body>
</html>