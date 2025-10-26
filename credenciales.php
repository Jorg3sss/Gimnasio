<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar sesión</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f3fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .login-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    width: 350px;
  }

  h1 {
    color: #4B0082;
    margin-bottom: 20px;
  }

  p {
    color: #333;
    margin-bottom: 25px;
  }

  p span {
    color: #4B0082;
    font-weight: bold;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 15px;
  }

  label {
    color: #333;
    font-weight: 600;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    transition: 0.3s;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #4B0082;
    outline: none;
  }

  .btn {
    background-color: #4B0082;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
    font-weight: 600;
  }

  .btn:hover {
    background-color: #35006b;
  }

  .volver {
    background: none;
    border: 1px solid #4B0082;
    color: #4B0082;
    padding: 8px 15px;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 20px;
    transition: 0.3s;
  }

  .volver:hover {
    background-color: #4B0082;
    color: #fff;
  }
</style>
</head>
<body>

  <div class="login-container">
    <h1>Iniciar sesión</h1>
    <button class="volver" onclick="window.history.back()">Volver</button>
    <p>Introduce tus credenciales para <span>comenzar</span></p>

    <form>
      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="text" id="correo" name="correo" required>
      </div>

      <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" required>
      </div>

      <button type="submit" class="btn">Confirmar</button>
    </form>
  </div>

</body>
</html>
