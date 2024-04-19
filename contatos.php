<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Contatos</title>
</head>
<body>
  <h1>Gerenciador de contatos</h1>
  <form method="post">
    <fieldset>
      <legend>Novo contato</legend>
      <label>
        Nome:
        <input type="text" name="nome">
      </label>
      <br>
      <label>
        Email:
        <input type="email" name="email">
      </label>
      <br>
      <label>
        Whatsapp:
        <input type="text" name="whatsapp">
      </label>
      <br>
      <input type="submit" value="Gravar">
    </fieldset>
  </form>

  <?php
  session_start();
  $lista_contatos = [];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['whatsapp'])) {
      $contato = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'whatsapp' => $_POST['whatsapp']
      ];
      $_SESSION['lista_contatos'] [] = $contato;
    } else {
      echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
    }
  }

  if (array_key_exists('lista_contatos', $_SESSION)) {
    $lista_contatos = $_SESSION['lista_contatos'];
  } else {
    $lista_contatos = [];
  }
  ?>

  <h2>Lista de Contatos</h2>
  <table>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Whatsapp</th>
    </tr>

    <?php foreach ($lista_contatos as $contato) : ?>
      <tr>
        <td><?php echo $contato['nome']; ?></td>
        <td><?php echo $contato['email']; ?></td>
        <td><?php echo $contato['whatsapp']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>