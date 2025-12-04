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

<body>
  <div class="volver">
    <button><a href="index.php">Volver Atrás</a></button>
  </div>

  <header>
    <img src="img/logo.png" alt="Logo Verde Bonito">
    <h1>Únete al equipo de Verde Bonito</h1>
    <p>Completa el formulario para ser voluntario o empleado.</p>
  </header>

  <form action="procesar_formulario.php" method="post">
    <h2>Datos Personales</h2>

    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" placeholder="+34 600 000 000" required>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion">

    <h2>Tipo de Participación</h2>

    <label for="tipo">¿Deseas ser?</label>
    <select id="tipo" name="tipo" required>
      <option value="">Selecciona una opción</option>
      <option value="voluntario">Voluntario</option>
      <option value="empleado">Empleado</option>
    </select>

    <label for="disponibilidad">Disponibilidad horaria:</label>
    <select id="disponibilidad" name="disponibilidad">
      <option value="">Selecciona una opción</option>
      <option value="mañana">Mañana</option>
      <option value="tarde">Tarde</option>
      <option value="fin_de_semana">Fin de semana</option>
      <option value="completa">Jornada completa</option>
    </select>

    <label for="experiencia">Experiencia o habilidades relevantes:</label>
    <textarea id="experiencia" name="experiencia" rows="4" placeholder="Cuéntanos sobre tu experiencia con animales o trabajos similares..."></textarea>

    <label for="motivo">¿Por qué quieres unirte a Verde Bonito?</label>
    <textarea id="motivo" name="motivo" rows="4" placeholder="Escribe tu motivación aquí..."></textarea>

    <button><a href="solicitud.php">Enviar Solicitud</button>
  </form>

</body>
</html>
