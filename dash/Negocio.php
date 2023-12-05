<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/formulario.css">
  <title>Formulario de Compra</title>
</head>

<body>

  <header>
    <img id="logo" src="img/pointec.png" alt="Logo">
    <div class="search-bar">
      <input type="text" placeholder="Buscar...">
      <button type="submit" class="button">Buscar</button>
    </div>
    <div class="content">
      <img class="user" src="img/user.png" alt="Logo">
      <p class="p"> Ing Fran.Din</p>
    </div>
  </header>
  <main class="contenedor">
    <h2>Formulario de Compra</h2>


    <div class="menu">
      <a href="#">Registrar Negocio ></a>
      <a href="#">Registros ></a>
      <a href="#">Administrar ></a>
      <a href="#">Recargar Pagina ></a>
      <a href="#">Cerrar Sesion ></a>
    </div>
    </div>

      <div class="formulario">
        <form action="#" method="post">
          <label for="nombreNegocio">Nombre del Negocio:</label>
          <input type="text" id="nombreNegocio" name="nombreNegocio" required><br>

          <label for="nombreComprador">Nombre del Comprador:</label>
          <input type="text" id="nombreComprador" name="nombreComprador" required><br>

          <label for="fechaCompra">Fecha de Compra:</label>
          <input type="date" id="fechaCompra" name="fechaCompra" required><br>

          <label for="pago">Pago:</label>
          <select id="pago" name="pago" required>
            <option value="tarjeta">Tarjeta</option>
            <option value="efectivo">Efectivo</option>
          </select><br>

          <label for="vendedor">Vendedor:</label>
          <input type="text" id="vendedor" name="vendedor" required><br>

          <label for="tipoCompra">Tipo de Compra:</label>
          <select id="tipoCompra" name="tipoCompra" required>
            <option value="suscripcion">Suscripción</option>
            <option value="contrato">Contrato</option>
          </select><br>

          <label for="referencia">Referencia:</label>
          <input type="text" id="referencia" name="referencia" readonly>

          <input type="submit" value="Enviar">
        </form>
      </div>
    </main>
</body>

</html>