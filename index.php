<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Exemplo de array em json, editando e incluindo novos valores

// $funcionarios = array(
//     "pessoa 1" => array(
//         "nome" => "Roberto",
//         "idade" => "26",
//         "sexo" => "masculino"
//     ),

//     "pessoa 2" => array(
//         "nome" => "Maria",
//         "idade" => "20",
//         "sexo" => "feminino"
//     ),
//     "pessoa 3" => array(
//         "nome" => "Rodrigo",
//         "idade" => "30",
//         "sexo" => "masculino"
//     ),
//     "pessoa 4" => array(
//         "nome" => "Fernanda",
//         "idade" => "40",
//         "sexo" => "feminino"
//     ),
// );

// $funcionarios["pessoa 5"] = array(
//     "nome" => "Rafael",
//     "idade" => "55",
//     "sexo" => "masculino"
// );

// $funcionarios["pessoa 1"] = array(
//     "nome" => "Ricardo",
//     "idade" => "60",
//     "sexo" => "masculino"
// );

//     $data = json_encode($funcionarios);
//     echo $data;


?>

<?php

// Exemplo de variáveis globais

// $nome = $_GET["nome"];
// echo "Meu nome é ".$nome;

?>

<?php

// Exemplo de constantes

// define("URL", "http://robertodoradopena.com");
// define("VERSION", "1.0");

// echo "O sistema esta no website ".URL." na versão ".VERSION;


?>

<?php

// Exemplo de IF e ELSE

// $usuario = "roberto-dorado";
// $senha = "Rob5566";

// if($usuario === "roberto-dorado" && $senha === "Rob5566"){
//     echo "login ok";
// } else{
//     echo "acesso negado";
// }


?>

<?php

// Exemplo de como receber os dados de um formulário

// if(isset($_POST["email"]) && empty($_POST["email"]) == false ){

//     $email = $_POST["email"];
//     echo "Meu e-mail é ".$email;

// } else {
//     // echo "Por favor, insira um e-mail válido";
// }

// if(isset($_POST["senha"]) && empty($_POST["senha"]) == false){

//     $senha = $_POST["senha"];
//     echo "<br><br>E a minha senha é ".$senha;

// } else{
//     // echo "<br><br>Por favor, preencher a senha";
// }

?>
<!-- <hr>

<form method="POST">

E-mail:<br>
<input type="email" name="email"><br><br>
Senha:<br>
<input type="password" name="senha"><br><br>

<input type="submit">

</form> -->

<?php

// Exemplo de teste da função SWITCH

// $np1 = 3.4;
// $np2 = 5.2;
// $pim = 4.5;


// $divisor = 10;
// $multnp1 = 5;
// $multnp2 = 5;
// $multpim = 4;

// $resultadonp = $np1 * $multnp1 + $np2 * $multnp2 + $pim * $multpim;
// $resultadofinal = $resultadonp / $divisor;

// switch($resultadofinal){

//     case 0.1:
//     case 0.2:
//     case 0.3:
//     case 0.4:
//     case 0.5:
//     case 0.6:
//     case 0.7:
//     case 0.8:
//     case 0.9:
//     case 1:
//     case 1.1:
//     case 1.2:
//     case 1.3:
//     case 1.4:
//     case 1.5:
//     case 1.6:
//     case 1.7:
//     case 1.8:
//     case 1.9:
//     case 2:
//     case 2.1:
//     case 2.2:
//     case 2.3:
//     case 2.4:
//     case 2.5:
//     case 2.6:
//     case 2.7:
//     case 2.8:
//     case 2.9:
//     case 3:
//     case 3.1:
//     case 3.2:
//     case 3.3:
//     case 3.4:
//     case 3.5:
//     case 3.6:
//     case 3.7:
//     case 3.8:
//     case 3.9:
//     case 4:
//     case 4.1:
//     case 4.2:
//     case 4.3:
//     case 4.4:
//     case 4.5:
//     case 4.6:
//     case 4.7:
//     case 4.8:
//     case 4.9:
//         echo "Reprovado";
//     break;

//     case 5:
//     case 5.1:
//     case 5.2:
//     case 5.3:
//     case 5.4:
//     case 5.5:
//     case 5.6:
//     case 5.7:
//     case 5.8:
//     case 5.9:
//     case 6:
//     case 6.1:
//     case 6.2:
//     case 6.3:
//     case 6.4:
//     case 6.5:
//     case 6.6:
//     case 6.7:
//     case 6.8:
//     case 6.9:
//         echo "Recuperação";
//     break;

//     case 7:
//     case 7.1:
//     case 7.2:
//     case 7.3:
//     case 7.4:
//     case 7.5:
//     case 7.6:
//     case 7.7:
//     case 7.8:
//     case 7.9:
//     case 8:
//     case 8.1:
//     case 8.2:
//     case 8.3:
//     case 8.4:
//     case 8.5:
//     case 8.6:
//     case 8.7:
//     case 8.8:
//     case 8.9:
//     case 9:
//     case 9.1:
//     case 9.2:
//     case 9.3:
//     case 9.4:
//     case 9.5:
//     case 9.6:
//     case 9.7:
//     case 9.8:
//     case 9.9:
//     case 10:
//         echo "Aprovado";
//     break;

//     default:
//         echo "Valor inválido";
//     break;

// }

// Simulando notas de alunos para imprimir na tela

// echo " ";

// $np1 = 3.4;
// $np2 = 5.2;
// $pim = 4.5;

// $divisor = 10;
// $multnp1 = 5;
// $multnp2 = 5;
// $multpim = 4;

// $resultadonp = $np1 * $multnp1 + $np2 * $multnp2 + $pim * $multpim;
// $resultadofinal = $resultadonp / $divisor;

// echo $resultadofinal;


?>

<?php

// Exemplo utilizando o require_once no arquivo recebedor.php
// O atributo action no input redireciona para a outra página

// require_once "recebedor.php";

?>

<!-- <style>

.fundo{
    background:gray;
    width:200px;
    height:200px;
    margin:auto;
    margin-top:200px;
}
.fundo form{
    padding-left:10px;
    padding-top:25px;
}


</style>

<div class="fundo">

<form method="POST" action="recebedor.php">

    E-mail:<br>
    <input type="email" name="email"><br><br>
    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit">

</form>

</div> -->

<!-- Técnica antiF5 para formulários -->

<!-- <form method="POST">

Pessoa:<br>
<input type="text" name="texto"><br><br>
Nome:<br>
<input type="text" name="texto"><br><br>
Idade:<br>
<input type="text" name="texto"><br><br>
Sexo:<br>
<input type="text" name="texto"><br><br>
<input type="submit" value="enviar">

</form> -->

<?php

// if(isset($_POST["texto"])) {

//     $nome = $_POST["texto"];
//     file_put_contents("texto.txt", $nome, FILE_APPEND);

//     header("Location: index.php");
// }

?>
<!-- <script src="script.js"></script>

<div id="elemento">Texto</div><br>
<button id="botao" onclick="trocaTexto()">Troca</button> -->


<!-- <script src="script.js"></script>

    <input type="text" id="campo"><br><br>
    <button id="botao" onclick="inserirIngrediente()">Inserir</button>

    <ul id="lista">
        
    </ul> -->



    <!-- <script src="script.js"></script>

    <input type="text" id="campo1">
    <input type="text" id="campo2">
    <input type="text" id="campo3">
    <button onclick="operacoes()">Igual</button> -->


    <!-- Link que liga em exemplos de loops for e while -->
    <!-- <script src="script.js"></script> -->
    <!-- Os loops estão sendo executados no console.log -->

    <!-- Link que liga em exemplo de switch  -->
    <!-- <script src="script.js"></script> -->



    <!-- <script src="script.js"></script>

    
    Nome:<br>
    <input type="text" id="nome"><br><br>

    E-mail:<br>
    <input type="text" id="email"><br><br>

    Telefone:<br>
    <input type="text" id="telefone"><br><br>

    Profissão:<br>
    <input type="text" id="profissão"> -->


    <!-- <script src="script.js"></script>

    <button onclick="abrir()">Abrir</button>
    <button onclick="fechar()">Fechar</button><br>
    <div id="conteudo" style="display:none;">Texto</div> -->


    <!-- Jogo dos balões -->

    <!-- <script src="script.js"></script>
    <style>
    .bola{
        width:50px;
        height:50px;
        background:red;
        border-radius:50px;
        position:absolute;
    }
    </style>

    <div style="display:none;" class="bola"></div> -->

<?php

//  Exemplos de for e while no php

// $x = 0;

// while($x < 10) {
//     echo "X é igual a: ".$x."<br>";
//     $x++;
// }

// echo "<br>";

// for($x = 0; $x < 10; $x++) {
//     echo "X é igual a: ".$x."<br>";
// }

?>

<?php

// Simples exemplo de foreach

// $pessoas = array("Roberto", "Renato", "Rafaela", "Ricardo");

// foreach($pessoas as $alunos) {
//     echo "O nome do aluno é: ".$alunos."<br>";
// }

// echo "<br>";

// foreach mais utilizado e mais prático

// $pessoa = array(
//         "nome" => "Roberto",
//         "idade" => "26",
//         "escolaridade" => "Graduado",
//         "profissão" => "programador"
    
// );

// foreach($pessoa as $key => $aluno){
//     echo $key." = ".$aluno."<br>";
// }

// echo "<br>";

// Exemplo de foreach concatenando chave e valor

// $agentes = array(
//     array(
//         "nome" => "Roberto",
//         "idade" => "26",
//         "escolaridade" => "graduado",
//         "profissão" => "programador"
//     ),
//     array(
//         "nome" => "Renato",
//         "idade" => "33",
//         "escolaridade" => "ensino médio",
//         "profissão" => "programador"
//     ),
//     array(
//         "nome" => "Rafaela",
//         "idade" => "23",
//         "escolaridade" => "graduado",
//         "profissão" => "analista de marketing"
//     ),
//     array(
//         "nome" => "Carla",
//         "idade" => "22",
//         "escolaridade" => "ensino médio",
//         "profissão" => "manicuri"
//     )
// );

// foreach($agentes as $profissional) {
//     echo "Nome: "."<strong>".$profissional["nome"]."</strong>"." - idade: ".$profissional["idade"]." - escolaridade: ".$profissional["escolaridade"]." - profissão: ".$profissional["profissão"]."<br>";
// }

?>

<?php

// Funções

// function somarNumero($x, $y) {
//     $conta = $x + $y;
//     return $conta;
// }

// $resultado = somarNumero(10, 20);
// echo "O total da soma é: ".$resultado;

// echo "<br>";

// function adivinhaNumero($x) {

//     $y = 10;

//     if($x > $y){
//         echo $x." é maior que: ".$y;
//     }

//     if($x < $y){
//         echo $x." é menor que: ".$y;
//     }

//     if($x == $y){
//         echo $x." é igual a ".$y;
//     }
//     return $x;
// }

// adivinhaNumero(5);

?>

<?php

// Exemplo de data

// $dataatual = date("d/m/Y", strtotime("-1 day"));
// $tempoatual = date("H:i:s", strtotime("-5 hour"));

// echo "Agora são ".$tempoatual.", da data: ".$dataatual;

?>
<?php

// Funções matemáticas

// echo abs() Retorna um valor absoluto
// echo ceil() Arredonda o número para cima
// echo floor() arredonda o número para baixo

// $lista = array("Roberto", "Lucas", "Tamires", "Luan");
// $sorteio = rand(0, 3);

// echo "E o sorteado é: ".$lista[$sorteio];

// echo rand() gera números aleatórios

?>

<?php

// Principais Funções para string

// echo implode() Junta uma string de array;
// echo explode() Separa uma string em strings ou em um array;
// echo print_r() Imprime uma variável;
// echo strtoupper() Converte uma string para maiúsculas;
// echo strtolower() Converte uma string para minúscula;
// echo number_format() Formata um número com os milhares agrupados;
// echo str_replace() Substitui todas as ocorrências da string de procura com a string de substituição;
// echo strlen() Conta os caracteres de uma string;
// echo substr() Retorna uma parte de uma string;
// echo ucfirst() Primeira letra de uma string maiúscula;
// echo ucwords() Todas as letras maiúsculas;

?>

<?php

// Funções de array

// echo array_keys() Retorna um novo array com as chaves do array anterior;
// echo array_values() Retorna um novo array com os valores do array anterior;
// echo array_pop() Remove a última chave e valor do array;
// echo array_shift() Remove a primeira chave e valor do array;
// echo asort() Ordena o array em ordem alfabética;
// echo arsort () Oredena o array em ordem decrescente;
// echo count() Total de elementos que existe no array;
// echo in_array() Utilizado mais em IF, verifica se o elemento se encontra dentro da array;

?>

<?php

// Introdução a criptografia;

// $senha = "Rob@1910";

// Criptografia irreversível md5();
// $cript = md5($senha);

// Criptografia reversível base64_encode();
// $cript2 = base64_encode($senha);

// Descriptografar com base64_decode();
// $descript = base64_decode($cript2);


// echo $senha;
// echo "<br>";
// echo $cript;
// echo "<br>";
// echo $cript2;
// echo "<br>";
// echo $descript;

?>

<?php

// Comandos para iserir/ler/deletar/modificar dados;

// Comando para inserir;
// INSERT INTO nome_da_tabela SET coluna_1 = 'valor_1', coluna_2 = 'valor_2', coluna_3 = 'valor_3';

// Comando para selecionar;
// SELECT * FROM nome_da_tabela;
// SELECT coluna1 FROM nome_da_tabela;
// SELECT * FROM nome_da_tabela WHERE coluna_1 = 'valor_1';
// SELECT * FROM nome_da_tabela WHERE coluna_1 < 'valor_especico';
// SELECT * FROM nome_da_tabela WHERE coluna_1 <= 'valor_especico';

// Comando para atualizar;
// UPDATE nome_da_tabela SET coluna_1 = 'novo_valor' WHERE id = '1';
// UPDATE nome_da_tabela SET coluna_1 < 'novo_valor' WHERE id = '1';
// UPDATE nome_da_tabela SET coluna_1 <= 'novo_valor' WHERE id = '1';

// Comando para deletar;
// DELETE FROM nome_da_tabela WHERE id = 2;
// DELETE FROM nome_da_tabela WHERE coluna_1 < valor_1;
// DELETE FROM nome_da_tabela WHERE coluna_1 <= valor_1;

?>

<?php
// session_start();

// Gerar uma sessão
// $_SESSION['teste'] = "Roberto Felipe";
// echo "Minha sessão é de: ".$_SESSION['teste'];

// Gerar um cookie
// setcookie("meuteste", "nomedocookie", time() + 3600);
// echo "Meu cookie é: ".$_COOKIE["meuteste"];

// Como gerar cookies / sessão

?>

<?php

// PDO: Definindo acesso, conexão com o banco de dados

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

//     $pdo = new PDO($dsn, $dbuser, $dbpass);

// try {
//     echo "Conexão estabelecida com sucesso";
// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }

// Obs: cuidado com a senha, ela não pode ter um espaço vazio, as aspas devem ser fechadas

?>

<?php

// Selecionando o banco de dados através do php

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// $pdo = new PDO($dsn, $dbuser, $dbpass);
// $sql = "SELECT * FROM usuarios";
// $sql = $pdo->query($sql);

// try {
    
    
//     if($sql->rowCount() > 0){

//         foreach($sql->fetchAll() as $usuario){
//             echo " Nome: ".$usuario["nome"]."<br>"." E-mail: ".$usuario["email"]."<br>".$usuario["data_nascimento"]."<br><br>";
//         }

//     }else{
//         echo "Não á usuários cadastrados";
//     }

// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }


?>

<?php

// Como inserir dados

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// $pdo = new PDO($dsn, $dbuser, $dbpass);
// try {
    
//     $nome = "Gabriela";
//         $email = "gabriela@gmail.com";
//         $senha = md5("123@456");
//         $nascimento = "1980-05-12";
    
//         $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha', data_nascimento = '$nascimento'";
//         $sql = $pdo->query($sql);
    
//         echo "Usuario inserido com sucesso<br>";
//         echo "Id do usuario inserido é o ".$pdo->lastInsertId()."<br>";

// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }


?>

<?php

// Como realizar o update

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// $pdo = new PDO($dsn, $dbuser, $dbpass);
// try {
    
//     $senha = md5("ver@447788");
//         $sql = "UPDATE usuarios SET senha = '$senha' WHERE id = '12350'";
//         $pdo->query($sql);
//         echo "Usuario atualizado com sucesso";

// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }

?>

<?php

// Como deletar um registro

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// $pdo = new PDO($dsn, $dbuser, $dbpass);
// try {
    
//     $sql = "DELETE FROM usuarios WHERE id = '12357'";
//         $sql = $pdo->query($sql);
//         echo "usuario deletado com sucesso";

// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }

?>

<?php

// Como tratar o PDOStatement e binds de forma segura,
// Como receber os dados do usuario de forma segura

// $dsn = "mysql:dbname=teste456;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// try {
//     $pdo = new PDO($dsn, $dbuser, $dbpass);

//     $nome = 'Pedro';
//     $email = 'pedro@hotmail.com';
//     $senha = md5('pedro@pedro5544');
//     $nascimento = '1985-05-02';
//     $id = 12351;

//     $sql = "INSERT INTO usuarios SET nome = :novonome, email = :novoemail, senha = :novasenha, nascimento = :novonascimento, id = :novoid";
//     $sql = $pdo->prepare($sql);
//     $sql->bindValue(':novonome', $nome);
//     $sql->bindValue(':novoemail', $email);
//     $sql->bindValue(':novasenha', $senha);
//     $sql->bindValue(':novonascimento', $nascimento);
//     $sql->bindValue(':novoid', $id);
//     $sql->execute();

//     echo "Usuário enviado com sucesso id: ".$pdo->lastInsertId();


// } catch(PDOException $e) {
//     echo "Falhou: ".$e -> getMessage();
// }

?>

<!-- Envio de arquivos por formulário -->

<!-- <form action="recebedor.php" method="post" enctype="multipart/form-data">

<input type="file" name="arquivo"><br><br>

<input type="submit" value="Enviar">

</form> -->





<!-- Enviando mais de um arquivo ao mesmo tempo -->
<!-- <pre> -->
<?php

// if(isset($_FILES['arquivo'])){

//     if(count($_FILES['arquivo']['tmp_name']) > 0){

//         for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){

//             $nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.jpg';

//             move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivo/'.$nomedoarquivo);
//         }
//     }
// }

?>

<!-- </pre>

    <form method="POST" enctype="multipart/form-data">
    
    <input type="file" name="arquivo[]" multiple><br><br>

    <input type="submit" value="Enviar">
    
    </form> -->

<?php

// PHP AVANÇADO

// Exemplo de orientação ao objeto e instanciando classes

// class Cachorro{

//     public function latir(){
//         return "Au au";
//     }
// }

// $cachorro = new Cachorro();
// echo $cachorro->latir();

?>

<?php

// Exemplo de get e set, serve para protejer a execução do metodo fazendo uma verificação if no set

// class Cachorro{
//     private $latir;

//     public function getLatir(){
//         return $this->latir;
//     }
//     public function setLatir($latir){
//         if(is_string($latir)){  // <- Verificação if para proteger o metodo set 

//             $this->latir = $latir;
//         }
//     }
// }

// $cachorro = new Cachorro();
// $cachorro->setLatir("Au au!");

// echo "O cachorro faz: ".$cachorro->getLatir();

?>

<?php

// Exemplo de função construtora, a função construtora sempre irá ser a primeira a dar o retorno

// class Cachorro{
//     private $latir;
//     private $pata;

//     public function __construct($latir, $pata){
//         $this->setLatir($latir);
//         $this->setDapata($pata);
//     }

//     public function getLatir(){
//         return $this->latir;
//     }
//     public function setLatir($latir){
//         if(is_string($latir)){  // <- Verificação if para proteger o metodo set 
//             $this->latir = $latir;
//         }
//     }
//     public function setDapata($pata){
//         if(is_string($pata)){
//             $this->pata = $pata;
//         }
//     }
//     public function getDapata(){
//         return $this->pata;
//     }
// }

// $cachorro = new Cachorro("Au au!", "Da a pata!");
// echo "O cachorro faz: ".$cachorro->getLatir()."<br>";
// echo "O cachorro faz: ".$cachorro->getDapata();


?>

<?php
// Exemplo de métodos auxiliares

// class Post {
//     private $comentarios;
//     private $qtComentarios;

//     public function addComentarios($msg){
//         $this->comentarios[] = $msg;
//         $this->contarComentarios();
//     }

//     public function getQuantosComentarios(){
//         return $this->qtComentarios;
//     }

//     private function contarComentarios(){
//         $this->qtComentarios = count($this->comentarios);
//     }

// }

// $comentarios = new Post();
// $comentarios->addComentarios("Teste 1");
// $comentarios->addComentarios("Teste 2");
// $comentarios->addComentarios("Teste 3");
// $comentarios->addComentarios("Teste 4");
// $comentarios->addComentarios("Teste 5");
// $comentarios->addComentarios("Teste 6");
// echo "Tem: ".$comentarios->getQuantosComentarios()." comentarios";
?>

<?php
// Exemplo de herança de classes

// class Personagem{
//     public $nome;
//     public $arma;
//     public $escudo;
// }

// class Knight extends Personagem{
//     private $fulano;
//     private $espada;
//     private $shield1;
// }
// class Mage extends Personagem{
//     private $ciclano;
//     private $varinha;
//     private $shield2;
// }
// class Druid extends Personagem{
//     private $beltrano;
//     private $varinha2;
//     private $shield3;
// }

// $knight = new Knight;
// $mage = new Mage;
// $druid = new Druid;
// $druid->nome = "Beltrano!";
// $mage->nome = "Ciclano!";
// $knight->nome = "Fulano!";
// echo "O nome do personagem é: ".$knight->nome."<br>";
// echo "O nome do personagem é: ".$mage->nome."<br>";
// echo "O nome do personagem é: ".$druid->nome;



?>

<?php

// O abstract function obriga todas as outras classes a utilizarem a mesma função qu a classe mãe
// Eu não posso instanciar uma classe abstrata

// abstract class Personagem{
//     public $nome;
//     public $arma;
//     public $escudo;

//     abstract protected function andar();

//     function setNome($n){
//         $this->nome = $n;
//     }
//     function getNome(){
//         return $this->nome;
//     }
// }

// class Knight extends Personagem{
//     private $fulano;
//     private $espada;
//     private $shield1;

//     public function andar(){

//     }
// }
// class Mage extends Personagem{
//     private $ciclano;
//     private $varinha;
//     private $shield2;

//     public function andar(){
        
//     }
// }
// class Druid extends Personagem{
//     private $beltrano;
//     private $varinha2;
//     private $shield3;

//     public function andar(){
        
//     }
// }

// $knight = new Knight();
// $mage = new Mage();
// $druid = new Druid();

// $druid->setNome("Fernando!");
// $mage->setNome("Rafel!");
// $knight->setNome("Roberto!");

// echo "O nome do meu personagem é: ".$druid->getNome()."<br>";
// echo "O nome do meu personagem é: ".$mage->getNome()."<br>";
// echo "O nome do meu personagem é: ".$knight->getNome()."<br>";

?>

<?php
// Exemplo de interface, cria regras e funções obrigatórias para as demais classes utilizarem ela

// interface Animal {
//     public function andar();
// }
// class Cachorro implements Animal {
//     public function andar(){
//         echo "Estou andando...";
//     }
// }

// $cachorro = new Cachorro();
// $cachorro->andar();

?>

<?php
// A classe Identidade que herda a classe Pessoa sobrescreve a função da classe Pessoa, isso é polimorfismo

// class Pessoa {

//     public function seuNome(){
//         echo "Rodrigo!<br>";
//     }
// }

// class Identidade extends Pessoa{

//     public function seuNome(){
//         echo "Roberto!";
//     }
// }

// $pessoa = new Pessoa();
// $pessoa->seuNome();

// $identidade = new Identidade();
// $identidade->seuNome();




// Como resetar o AUTO_INCREMENT  do banco de dados

// SET @autoid := 0;
// UPDATE nome_da_tabela SET id = @autoid := (@autoid+1);
// ALTER TABLE nome_da_tabela AUTO_INCREMENT = 1;





// Projeto API DEVSNOSTES (Sistema de anotações simples)
// - Listar as anotações
// - Pegar as informações de uma anotação
// - Inserir uma anotação nova
// - Atualizar uma anotação nova
// - Deletar uma anotação

// Qual a estrutura de dados?
// - Local para armazenar as anotações
// -- Id
// -- title
// -- body

// Quais os endpoints?
// - (GET) /api/notes
// - (GET) /api/notes/123
// - (POST) /api/note (title, body)
// - (PUT) /api/note/123 (title, body)
// - (DELETE) /api/note/123
?>

</body>
</html>
