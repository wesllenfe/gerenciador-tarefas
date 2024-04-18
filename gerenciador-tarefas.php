<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Tarefas</title>
</head>
<body>
  <h1>Gerenciador de tarefas</h1>
  <form action="">
    <fieldset>
      <legend>Nova tarefa</legend>
      <label>
        Tarefa:
        <input type="text" name="nome">
      </label>
      <input type="submit" value="Gravar">
    </fieldset>
 
    <?php
    if(array_key_exists('nome', $_GET))
    {
      echo "Nome tarefa informada: " . $_GET['nome'];
    }


    ?>

  </form>
</body>
</html>