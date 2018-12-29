<?php
session_start();
//INCLUDES
include("librerias/configuracion.php");



if(!empty($_POST['entrar'])){
    
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];

    $conexion = mysqli_connect("$servidor_bd", "$usuario_bd", "$password_bd", $nombre_bd);

    $sql = "SELECT * FROM usuarios WHERE nombre='".$usuario."' AND password='".$pass."' ";
   
    $res = mysqli_query($conexion, $sql);
    if($res==false)
        echo ("error en la consulta E001");

    $num = mysqli_num_rows($res);

    if($num > 0)
    {
        $row = mysqli_fetch_array($res);
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['nombre_usuario'] = $row['nombre'];
        $_SESSION['rutaavatar_usuario'] = $row['rutaavatar'];

        //cerramos la conexion
        mysqli_close($conexion);

        //redireccionamos
        header('Location:sistema.php');
    }
    else
        header('Location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Ensilar plataforma web | Login</title>
    <meta charset="utf-8">
    <link href="css/login.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> 
    addEventListener("load", function(){ 
                                setTimeout(hideURLbar, 0); 
                            }, false); 
                            function hideURLbar(){ 
                                window.scrollTo(0,1); 
                            } 
    </script>
    <script async type='text/javascript' src='js/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'></script>
    
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="main">
        <div class="login-form">
            <h1>Acceso de usuarios</h1>
            <div class="head">
                <img src="img/user.png" alt=""/>
            </div>
            <form action = "index.php" method = "POST">
                <input type="text" class="text" name = "usuario" value="Usuario" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Usuario\';}" />
                <input type="password" name = "password" value="Password" onfocus="this.value = \'\';" onblur="if (this.value == \'\') {this.value = \'Password\';}" />
                <div class="submit">
                    <input type="submit" name="entrar" onclick="myFunction()" value="LOGIN" />
                </div>	
                <p><a href="#">Olvid&oacute; su contrase&ntilde;a?</a></p>
            </form>
        </div>
    </div> 		
    
</body>
</html>