# Passando parametros via GET
- Para passar parametros na URL com GET:
    - /projeto/adiciona-produto.php?nome=carro&preco=1000
- Para acessar esses parametros na página:
    - Declarar variável usando o $_GET
```php
$nome= $_GET["nome"];
$preco= $_GET["preco"];
```
# Criando formulário
- Para enviar uma informação que será preenchida no formulário, é necessário criar o atributo name no input
```html
<form>
    <label for="">Nome</label>
    <input type="text" name="nome"/>
</form>
```
- Para o formulário enviar os dados para outra página é preciso criar o atributo action com a URL a ser enviada
```html
<form action="adiciona-produto.php"></form>
```
# MySQL
- Como criar uma tabela no banco de dados:
```mysql
CREATE TABLE produtos (id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR (255), preco DECIMAL (10,2))
```
- Para inserir na tabela no banco de dados:
```mysql
INSERT INTO produtos VALUES ("", "carro", 1000);
INSERT INTO produtos (nome, preco) VALUES ("carro2", 200);
```
# PHP e MySQL
- Conectando no bando de dados:
```php
$conexao = mysqli_connect('ipdobanco', 'usuario', 'senha', 'banco');
```
- Para executar uma query:
```php
mysqli_query($conexao, $sql);
```
- Para fechar uma conexão:
```php
mysqli_close($conexao);
```
- Verifica se a query  rodou com sucesso:
```php
 if(mysqli_query($conexao, $sql)){...}
    else{...}
```
- Para encontrar o erro do mysql:
```php
 mysqli_error($conexao);
 ```
- Buscar e o resultado de um select e pegar a PRIMEIRA linha:
 ```php
$retorno = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($retorno);
 ```
- Buscar todas as linhas do banco:
```php
$retorno = mysqli_query($conexao, $sql);
while ($produto = mysqli_fetch_assoc($retorno)){
    echo $produto["nome"];
}
 ```
# Criando funções
- Para criar uma função:
```php
function nomeDaFuncao($parametro1, $parametro2, $parametro3){...}
function nomeDaFuncao($parametro1, $parametro2, $parametro3){return}
```
# Funções do PHP
- Adiciona um elemento dentro do array:
```php
$produtos = array();
array_push($produtos, $produto)
```





# Observações
- Sempre depois de executar uma query tem que fechar a conexão com o banco