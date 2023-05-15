<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$text = $_POST['text'];
$newText = str_replace($text, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dati compilati</title>
</head>

<body>
  <div>
    <h1>Utente:</h1>
    <ul>
      <li>Nome: <?php echo $name ?></li>
      <li>Cognome: <?php echo $lastname ?></li>
      <li>Email: <?php echo $email ?></li>
      <li>Lunghezza del tuo messaggio: <?php echo strlen($text) ?></li>
    </ul>
  </div>


  <div>
    <h1>Utente:</h1>
    <ul>
      <li>Nome: <?php echo $name ?></li>
      <li>Cognome: <?php echo $lastname ?></li>
      <li>Email: <?php echo $email ?></li>
      <li>Messaggio censurato: <?php echo ($newText) ?></li>
    </ul>
  </div>
</body>

</html>