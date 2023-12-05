<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
      background-color: purple;
      color: white;
      padding: 10px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header img {
      height: 90px;
      margin-right: 5px;
      border-radius: 25%;
    }

    h1 {
      margin: 0;
    }

    nav {
      display: flex;
      flex-direction: column;
      background-color: grey;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      width: 25%;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px;
      margin: 0 10px;
      border-radius: 10px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #777;
    }

    main {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      width: 80%;
      margin: 20px;
    }

    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 60%;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input {
      width: calc(100% - 16px);
      padding: 10px;
      margin-bottom: 20px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    button {
      background-color: purple;
      color: white;
      padding: 10px 25px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: plum;
    }

    .search-bar {
      flex-grow: 1.0;
      margin: 0 10px; 
    }

    input[type="search"] {
      width: 30%; 
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <header>
    <img src="img/Pointec.png" alt="Logo">
    <div class="search-bar">
      <input type="search" placeholder="Buscar...">
    </div>
  </header>

  <main>
    <nav>
      <a href="#">Registro del Negocio ></a>
      <a href="#">Registro de Sucursal ></a>
      <a href="#">Registros ></a>
      <a href="#">Administrar ></a>
      <a href="#">Recargar Página ></a>
      <a href="#">Cerrar Sesión ></a>
    </nav>

    <form>
      <h2>Registro de Sucursal</h2>
      <label for="nombreNegocio">Nombre del Negocio:</label>
      <input type="text" id="nombreNegocio" name="nombreNegocio" required>

      <label for="sucursal">Sucursal:</label>
      <input type="text" id="sucursal" name="sucursal" required>

      <label for="fechaRegistro">Fecha de Registro:</label>
      <input type="date" id="fechaRegistro" name="fechaRegistro" required>

      <label for="encargadoSucursal">Encargado de Sucursal:</label>
      <input type="text" id="encargadoSucursal" name="encargadoSucursal" required>

      <label for="claveEncargado">Clave de Encargado:</label>
      <input type="password" id="claveEncargado" name="claveEncargado" required>

      <button type="button">Guardar</button>
      <button type="button">Cancelar</button>
    </form>
  </main>

</body>

</html>
