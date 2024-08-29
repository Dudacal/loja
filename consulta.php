<?php
    include "conecta.php";
?>




<?php
    echo "<b>Mostrando todos os registros</b><br>";
    $sql = "SELECT id, descricao, fabricante, qnt, preco_custo, preco_venda FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
  
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"]. " - Descrição: " . $registro["descricao"].
        " - Fabricante:" . $registro["fabricante"]. " - Quantidade:" . $registro["qnt"].
        " - Preço de custo:" . $registro["preco_custo"]. " - Preço de venda:" . $registro["preco_venda"].
        "<br>";
        }
    } else{
        echo "Nenhum registro encontrado.";
    }

    
?>