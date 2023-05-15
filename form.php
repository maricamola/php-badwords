<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
    integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
    crossorigin='anonymous' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

  body {
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>

<body>
  <div class="container mt-4">
    <h1>Compila i seguenti dati:</h1>


    <form action="pagina-atterraggio.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nome">
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Cognome</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp"
          placeholder="Cognome">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Motivo del reclamo:</label>
        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>



</body>

</html>