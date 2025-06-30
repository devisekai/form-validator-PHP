<?php
// validador.php

define('MIN_SENHA', 6);
define('MAX_SENHA', 16);

function limpar($dado) {
  return htmlspecialchars(trim($dado));
}

$erros = [];
$sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = limpar($_POST['nome'] ?? '');
  $email = limpar($_POST['email'] ?? '');
  $senha = limpar($_POST['senha'] ?? '');

  if ($nome === '') {
    $erros[] = 'Nome é obrigatório';
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = 'E-mail inválido';
  }
  if (strlen($senha) < MIN_SENHA || strlen($senha) > MAX_SENHA) {
    $erros[] = 'A senha deve ter entre ' . MIN_SENHA . ' e ' . MAX_SENHA . ' caracteres';
  }

  if (empty($erros)) {
    $sucesso = true;
  }
}
?>