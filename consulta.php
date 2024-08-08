<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loja</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body>

<?php
 include "conect.php";
 $sql = "SELECT id, descricao, fabricante, qnt, preco_custo, preco_venda, imagem FROM produtos";
 $resultado = mysqli_query($conexao, $sql);
 echo "<br>";
 if (mysqli_num_rows($resultado) > 0){
    while ($registro = mysqli_fetch_assoc($resultado)){
        echo "<div class=dados>". "id: " . $registro["id"]. " descricao: " . $registro["descricao"].
        " fabricante: ". $registro["fabricante"]. "qnt". $registro["qnt"].
        "preco_venda:" . $registro["preco_venda"]. "imagem:". $registro["imagem"]. "<br>";

    }
 } else{
    echo "Nenhum registro encontrado!";

 }
 ?>
 </body>
</html>