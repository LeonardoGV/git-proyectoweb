<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<Body>
<div class="login">
  <h1>Iniciar <img src="user.png" width="59" height="62">Sesión</h1>
  <form action = "login.php" method="post">
    <input type="text" name="username" placeholder="Usuario" required="required" />
    <input type="password" name="password" placeholder="Contraseña" required="required" />
    <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar</button>
    <p align="center"><a href="usuario.php"><em>Registrarse</em></a></p>
    
  </form>
</div>
</body>
</html>