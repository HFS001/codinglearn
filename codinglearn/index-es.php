<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f0f0f0;
    }

    .top-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: salmon;
      z-index: 10;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.2);
      border-bottom: 2px solid black;
    }

    .brand {
      display: flex;
      align-items: center;
    }

    .logo {
      height: 40px;
      margin-right: 10px;
      border: 2px solid black;
      border-radius: 4px;
    }

    .brand-name {
      color: white;
      font-weight: 700;
      font-size: 22px;
      text-shadow: 1px 1px 2px black;
    }

    .language-switcher .flag {
      height: 25px;
      margin-left: 10px;
      cursor: pointer;
      border: 2px solid black;
      border-radius: 4px;
    }


    .split-left {
      height: 100%;
      width: 50%;
      position: fixed;
      left: 0;
      top: 60px;
      background: url('code.jpg') no-repeat center center;
      background-size: cover;
      border-right: 2px solid black;
    }

    .split-right {
      margin-left: 50%;
      height: calc(100% - 60px);
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fdfdfd;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
      border: 2px solid black;
      text-align: center;
    }

    .login-icon {
      font-size: 60px;
      margin-bottom: 20px;
      color: salmon;
      text-shadow: 1px 1px 2px black;
    }

    .form-control {
      background-color: #f9f9f9;
      border: 2px solid black;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      font-weight: 500;
    }

    .btn-salmon {
      background-color: salmon;
      border: 2px solid black;
      color: white;
      padding: 12px;
      border-radius: 8px;
      font-weight: bold;
      text-shadow: 1px 1px 2px black;
    }

    .btn-salmon:hover {
      background-color: salmon;
      transform: none;
    }

    .register-link {
      margin-top: 12px;
    }

    .register-link a {
      color: salmon;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .split-left {
        display: none;
      }

      .split-right {
        margin-left: 0;
        height: calc(100% - 60px);
      }
    }
  </style>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
  <div class="brand">
    <img src="logo.png" alt="Logo" class="logo">
    <span class="brand-name">CodingLearn</span>
  </div>
  <div class="language-switcher">
    <a href="index-es.php"><img src="es.png" alt="Espanhol" class="flag"></a>
    <a href="index.php"><img src="uk.jpg" alt="Inglês" class="flag"></a>
    <a href="index-pt.php"><img src="pt.webp" alt="Português" class="flag"></a>
  </div>
</div>

<!-- Left Panel -->
<div class="split-left"></div>

<!-- Right Panel: Login -->
<div class="split-right">
  <div class="login-container">
    <div class="login-icon">
      <span>&#128100;</span>
    </div>
    <form action="processalogin.php" method="POST">
      <input type="text" name="username" class="form-control" placeholder="Usuario" required>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
      <button type="submit" class="btn btn-salmon btn-block">Iniciar sesión</button>
    </form>
    <div class="register-link">
      ¿No tienes una cuenta? <a href="newuser.html">Regístrate</a>
    </div>
  </div>
</div>

</body>
</html>
