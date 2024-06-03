<?php
// Coletando dados do formulario

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Anonimo';
$email = $_POST['email'] ?? 'Nao informado'; // null collecting operator
$idade = $_POST['idade'] ?? 'Nao informado';

// Armazenando dados em um array associativo

$usuario = [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade
];

// Funcao para saudacao
function saudacao($nome) {
    return "Olá $nome, seja bem-vindo ao nosso sistema!"; 
}

// Exibindo uma mensagem de boas-vindas

echo saudacao($usuario['nome']."<br>");
echo "Aqui estão os detalhes do seu cadastro <br>";
echo "Nome: ".$usuario['nome']."<br>";
echo "Email: ".$usuario['email']."<br>";
echo "idade: ".$usuario['idade']."<br>";
?>