<?php
$servername = "localhost";
$username = "root";
$password = "";
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
  // troca mensagem para que seja exibida em forma de alerta para
  // o usuário e limpar os campos do formulário.
  echo "Dados enviados com sucesso!";
} catch(PDOException $e) {
  echo "Erro: " . $e->getMessage();
}
$conn = null;
?>
