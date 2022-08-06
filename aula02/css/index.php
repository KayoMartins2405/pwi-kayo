<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="decisao.php">decisao</a>
                <li>
                <li>
                <li>
            </ul>
        </nav>
</header> 
    
<?php
    $nome="Juarez";
    $idade=28;
    $email= "juarez@gmail.com";

   
   
   
    echo "<h1 class= 'titulo'>Informações pessoais: </h1>";
    echo "<p class= 'nome'> nome: $nome</p>";
    echo "<p class= 'idade'> idade: $idade</p>";
    echo "<p class= 'email'> email: $email<p>";



?>

</body>
</html>