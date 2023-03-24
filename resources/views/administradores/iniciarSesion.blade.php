<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/inicio.css">
    <title>Iniciar sesión</title>
</head>

<body>
    <main>
      <form>
        <fieldset>
          <div class="login">
            <section class="header-login">
              <img src="/assets/icons/logo.png" alt="logo">
              <h1>CineClub</h1>
              <h2>HOLA!</h2>
              <p>Recuerda que el registro solo es para administradores, ellos se encargan de programar las funciones que se transmiten en CineClub</p>
            </section>
            <form class="login-container">
              <p class="email"><input type="email" required>Correo electronico</p>
              <p class="password"><input type="password" required>Contraseña</p>
              
            </form>
          </div>
        </fieldset>
        <a class="inicio" href= "{{route('inicio')}}"><input type="submit" value="Iniciar sesión"></a>
      </form>
    </main>
</body> 
</html>