<?php

// configurações locais / desenvolvimento
$servername = "localhost";
$username = "root";
$password = "";

// configurações do db4free.net / produção
// $servername = "db4free.net";
// $username = "alanldv";
// $password = "admin123";

$dbname = "projeto_des_web";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare("INSERT INTO Contatos (nome, email, telefone, mensagem) 
  VALUES (:nome, :email, :telefone, :mensagem)");
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telefone', $telefone);
  $stmt->bindParam(':mensagem', $mensagem);

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
  $stmt->execute();
  echo "<script type='text/javascript'>
          alert('Mensagem enviada com sucesso!');
          window.location.href = './contato.html'; 
        </script>";
} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}
$conn = null;
?>
