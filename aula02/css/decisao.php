<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=decisão, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="css/decisao.css">
</head>
<body>
    <?php
    $nota1=2;
    $nota2=6;
    $nota3=5;
    $nota4=8;
   
    $media= ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if($media >6){
    echo "<p class='aprovado'>'APROVADO', sua média é:$media</p>";
}

    else{
    echo "<p class='reprovado'>'REPROVADO', sua média é:$media</p>";
    }
  
  ?>

</body>
</html>