<!DOCTYPE html><!-- Tipo de versao do html -->
<!-- inicio do html, para funcionar precisa estar dentro dessa tag, o atributo lang é para a linguagem do site -->
<html lang="pt-br">
    
<head><!-- Cabeça, parte inteligente do site -->
    <meta charset="UTF-8"><!-- Interpreta os caracteres em auxiliar do lang -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- auxiliar da responsividade do site -->
    <title>Senac News</title><!-- Titulo do site na aba do navegador -->
   <link rel="stylesheet" type="text/css" href="css/style.css"><!-- link para o arquivo CSS do site (Caso você não use uma tag style no head do arquivo .html) -->
   <link rel="icon" type="image/x-icon" href="img/senac.ico"><!-- Favicon do site (img que fica na aba do navegador) -->

    
   <!-- fonte poppins -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
</head>
<body>
    <header>
       <a href="index.php"><img id ="logo" src="img/Senac News.png" alt="Logo do Senac News"></a>    
        <!-- id é unico, da erro se vc usar de novo, a classe já se pode usar o mesmo nome de classe mais de uma vez -->
  
        <nav class="menu_opcoes"> <!-- Navegação -->
            <ul> <!-- lista nao ordenada -->
                <!-- tag li = linha -->
                <li><a href="#">Sua Conta</a> <!-- tag a = link --></li> 
                <li><a href="#">Destaques</a></li> 
                <li><a href="#">Novidades</a></li> 
                <li><a href="#">Eventos</a></li> 
                <li><a href="#">Galeria</a></li> 
                <li><a href="#">Ajuda</a></li> 
                <li><a href="sobre.php">Sobre</a></li> 
                
            </ul>
        </nav>

    </header>   
    <div class="container"> <!-- Serve para retirar usando o CSS, a separação do body sobre o header e o footer. -->
       