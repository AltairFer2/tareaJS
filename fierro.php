<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="metodo.js"></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"/>

    <!-- Google Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css" />
   
    </head>
  <body>
    <video autoplay muted loop id="player">
      <source src="video/video.mp4" type="video/mp4" />
    </video>

    <div id='ocultar-y-mostrar'>esto se puede ocultar</div>
    <button id='ocultar-mostrar'><i class="fas fa-bars"></i>ocultar/mostrar</button>
<form >
    <label for="user-email">Email: </label>
    <input type="email" id="user-email" name="userEmail" />
    <input type="submit" value="Validate" onclick="return validateEmail()" />
</form>
</body>

</html>