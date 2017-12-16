<?php
include "conexao.php";
include "banco-produtos.php";
?>
<table>
<?php
$todosProdutos = listaProdutos($conexao);
foreach($todosProdutos as $produto){
?>
<tr>    
    <td><?php echo $produto["nome"]?></td>
    <td><?php echo $produto["preco"]?></td>
</tr>

<?php
}
?>
</table>