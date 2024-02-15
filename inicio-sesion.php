<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELOCITY - INICIO DE SESION</title>

    <link type="text/css" rel="stylesheet" href="style.css" />

</head>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Iniciar sesion</h2>
        <h2 class="inactive underlineHover">Crear cuenta</h2>

        <!-- Icon -->
        <div class="fadeIn first">
            <img src=id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="procesar-credenciales.php" method="POST">
            <p>
                <input type="text" name="nickname" placeholder="Usuario">
            </p>
            <p>
                <input type="text" name="password" placeholder="Contraseña">
            </p>
            <?php
                    if(isset($_GET['error'])){
                        $error= $_GET['error'];
                    if($error == "incorrecto"){
                        echo"<h2>El usuario o congtraseña no son correctos</h2>";

                        } 
                    if($error == "vacio"){
                        echo"<h2>Los datos envíados se encuentran vacios </h2>";
                    }
                    }
                ?>
            <input type="submit" class="fadeIn fourth" value="Iniciar sesion">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Olvidaste tu contraseña?</a>
        </div>

    </div>
</div>
</div>




</html>