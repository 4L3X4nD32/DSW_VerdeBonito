<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/logo.png">
  <title>Únete a Verde Bonito</title>
  <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <style>
    body {
      background-color: #078a85;
      margin: 0;
      padding: 0;
    }

    header {
      text-align: center;
      padding: 20px;
      background-color: #68BAAB;
      color: white;
    }

    header img {
      width: 120px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    a {
      color: white;
      text-decoration: none;
    }

    form {
      max-width: 700px;
      margin: 40px auto;
      background-color: #68BAAB;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      color: white;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }

    textarea {
      resize: none;
    }

    .boton-enviar {
      display: block;
      width: 100%;
      margin-top: 25px;
      background-color: #4CAF50;
      color: white;
      font-size: 18px;
      border: none;
      padding: 15px;
      border-radius: 8px;
      cursor: pointer;
    }

    .boton-enviar:hover {
      background-color: #45a049;
    }

    .volver {
      margin: 20px;
    }
  </style>
</head>

<header>
    <img src="img/logo.png" alt="Logo Verde Bonito">
    <h1>Solicitud Enviada</h1>
  </header>

  <body>
  <section id="procesar-formulario" class="section">
    <p>Su Solicitud fue enviada con exito, Muchas gracias por su tiempo</p>
    <button><a href="index.php">Volver Atrás</a></button>
  </section>
</body>