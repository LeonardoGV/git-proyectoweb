<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Usuario</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<Body>

  <div class="login">
  <h1>Registrar Usuario</h1>
  <form action = "registrar.php" method="post">
  <input type="text" name="nombre" placeholder="Nombre de Usuario" required="required" />
    <input type="text" name="username" placeholder="Usuario" required="required" />
    <input type="password" name="password" placeholder="Contraseña" required="required" />
    <button type="submit" class="btn btn-primary btn-block btn-large">Registar</button>
  </form>
</div>
</body>


</html>