<?php
$mysqli = new mysqli('localhost', 'root', '', 'ttp');

mysqli_report(MYSQLI_REPORT_ALL);

$sql = "INSERT INTO ". $_POST["classe"] ." (nome, descricao, dia) VALUES (?, ?, ?)";

if($stmt = $mysqli->prepare($sql)) {

  $stmt->bind_param("sss", $nome, $descricao, $data);

  $nome = trim($_POST["nome"]);
  $descricao = trim($_POST["descricao"]);
  $data = $_POST["data"];

  if($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo "Algo deu errado";
  }

  $mysqli->close();
}

?>
