<html>
<?php
    include "conexao.php";
    include "banco-produtos.php";

    $nome= $_GET["nome"];
    $preco= $_GET["preco"];

   
    if(insereProduto($conexao, $nome, $preco)){ ?>
        <p><?php echo $nome ?> adicionado com sucesso! Preço <?php echo $preco ?>!</p>
    <?php
    }
    else{?>
        <p><?php echo $nome ?> nao foi adicionado com sucesso!!</p>
        <p><?php echo $msgerro = mysqli_error($conexao);?></p>
    <?php
    }
    mysqli_close($conexao);
 ?>
    
</html>