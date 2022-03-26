<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TTP - Criação</title>
  </head>

  <body>
      <form class="formulario" action="insert.inc.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Descrição: <input type="text" name="descricao"><br>
        Data: <input type="date" name="data"><br>
        Classe:
        <input id="c1" type="radio" name="classe" value="tarefa">
        <label for="c1">Tarefa</label>

        <input id="c2" type="radio" name="classe" value="trabalho">
        <label for="c2">Trabalho</label>

        <input id="c3" type="radio" name="classe" value="prova">
        <label for="c3">Prova</label>
        <br>
        <input type="submit" name="Enviar" value="Enviar">
      </form>
  </body>

</html>
