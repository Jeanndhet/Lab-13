<html>

<head>
    <title>Login usuario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<h1 class="animate__animated animate__backInDown" id=title>PELÍCULAS CINÉPOLIS</h1>
<!-- Menu login -->
    <form class="" action="condicion.php" method="post" align="center">
    <h1 class="animate__animated animate__backInDown" id="titlemenu">Sistema de login</h1>
    <table align="center">
        <tr id="ert">
            <td colspan="2" id="erti" align="center"
                <?PHP if ($_GET["errorusuario"]?? ""=="si") {?>
            bgcolor=red><span style="color;ffffff"><b>Datos incorrectos</b></span>
                <?PHP } else {?>
                <b>INTRODUCE TUS DATOS</b>
            <?PHP }?></td>
        </tr><br>
        <tr>
            <td class="block">Usuario:</td>
            <td><input type="text" name="usuario" placeholder="Ingrese su usuario asignado"></td>
        </tr><br>
        <tr>
            <td class="block">Contraseña:</td>
            <td><input type="password" name="contrasena" placeholder="Ingrese su contraseña"></td>
        </tr><br>
        <tr>
            <td><input type="submit" value="Entrar"></td>
        </tr>
    </table>
    </form>
    <div class="content">
        <ul class="slider">
            <li class="img1"></li>
            <li class="img2"></li>
            <li class="img3"></li>
        </ul>
    </div>

</body>
</html>