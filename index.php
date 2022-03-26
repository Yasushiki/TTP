<?php

$mysqli = new mysqli('localhost', 'root', '', 'ttp');

?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="custom.css">
    <title>TTP</title>
  </head>
  <body>
    <header>
      <div class="ttp active" onclick="mudar(0);">Tarefas</div>
      <div class="ttp" onclick="mudar(1);">Trabalhos</div>
      <div class="ttp" onclick="mudar(2);">Provas</div>
    </header>

    <div class="ttpC">

      <table style="border-collapse: collapse;" border="1">
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Data</th>
        </tr>
<?php
$sql = "SELECT id, nome, descricao, dia FROM tarefa ORDER BY dia";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr onclick='apagar(\"tarefa\", ". $row["id"] .")'>";
    echo "<td>". $row["nome"] ."</td>";
    echo "<td>". $row["descricao"] ."</td>";
    echo '<td><input type="date" readonly value="'. $row["dia"] .'"></td>';
    echo "</tr>";

  }
}
?>
      </table>

    </div>

    <div class="ttpC hidden">
      <table style="border-collapse: collapse;" border="1">
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Data</th>
        </tr>
<?php
$sql = "SELECT id, nome, descricao, dia FROM trabalho ORDER BY dia";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr onclick='apagar(\"trabalho\", ". $row["id"] .")'>";
    echo "<td>". $row["nome"] ."</td>";
    echo "<td>". $row["descricao"] ."</td>";
    echo '<td><input type="date" readonly value="'. $row["dia"] .'"></td>';
    echo "</tr>";

  }
}
?>
      </table>
    </div>

    <div class="ttpC hidden">
      <table style="border-collapse: collapse;" border="1">
        <tr>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Data</th>
        </tr>
<?php
$sql = "SELECT id, nome, descricao, dia FROM prova ORDER BY dia";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr onclick='apagar(\"prova\", ". $row["id"] .")'>";
    echo "<td>". $row["nome"] ."</td>";
    echo "<td>". $row["descricao"] ."</td>";
    echo '<td><input type="date" readonly value="'. $row["dia"] .'"></td>';
    echo "</tr>";

  }
}
?>
      </table>
    </div>

    <a class="botao" href="add.php">+</a>
    <script src="javascript.js" charset="utf-8"></script>
    <script type="text/javascript">
      var today = new Date();
      var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
      var tr = document.getElementsByTagName("tr");

      for(let i = 1; i <= tr.length; i++) {
        if(tr[i].getElementsByTagName("th").length > 0) {
          continue;
        } else if(calc(tr[i].getElementsByTagName("td")[2].getElementsByTagName("input")[0].value, date) < 2) {
          tr[i].style.backgroundColor = "red";
        } else if(calc(tr[i].getElementsByTagName("td")[2].getElementsByTagName("input")[0].value, date) <= 7) {
          tr[i].style.backgroundColor = "orange";
        }
      }

    </script>

  </body>
</html>
