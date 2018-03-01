<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>INSERTAR USUARIO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php
  echo "
  <link rel='stylesheet' href= ' ".DIR."views/bower_components/bootstrap/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href= ' ".DIR."views/bower_components/font-awesome/css/font-awesome.min.css'>
  <link rel='stylesheet' href= ' ".DIR."views/bower_components/Ionicons/css/ionicons.min.css'>
  <link rel='stylesheet' href= ' ".DIR."views/dist/css/AdminLTE.min.css'>
  <link rel='stylesheet' href= ' ".DIR."views/plugins/iCheck/square/blue.css'>
  
  ";
  ?>

  <!-- Font Awesome -->
  
  <!-- Ionicons -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost:81/fiscalizacionx/views/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
</head>
<body>
    <form action="#" method = "post" name="formulario_registro">
    <label for="">USER</label>
        <input type="text" id="usuario" name="usuario"><br>
    <label for="">PASSWORD</label>
        <input type="password" id="password" name="password"><br>
    <label for="">TIPO</label>
        <input type="text" id="tipo" name="tipo"><br>
    <label for="">NOMBRES</label>
        <input type="text" id="nombres" name="nombres"><br>
    <label for="">APELLIDOS</label>
        <input type="text" id="apellidos" name="apellidos"><br>
    <label for="">DNI: </label>
        <input type="text" id="dni"><br>
    <button type="submit" id="btnRegistrar">REGISTRAR</button>    
    </form>
</body>
<?php
echo "
<script src='".DIR."views/bower_components/jquery/dist/jquery.min.js'></script>
<!-- Bootstrap 3.3.7 -->
<script src='".DIR."views/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
<!-- iCheck -->";

?>
<script>

    $(function(){
        $("#btnRegistrar").click(function(){
            var usuario = $('form[name=formulario_registro] input[name=usuario]')[0].value;
            var password = $('form[name=formulario_registro] input[name=password]')[0].value;
            var tipo = $('form[name=formulario_registro] input[name=tipo]')[0].value;
            var nombres = $('form[name=formulario_registro] input[name=nombres]')[0].value;
            var apellidos = $('form[name=formulario_registro] input[name=apellidos]')[0].value;
            var dni = $('form[name=formulario_registro] input[name=dni]')[0].value;
            if(usuario == "" || password == "" || tipo == "" || nombres = "" || apellidos == "" || apellidos==""){
               alert("INGRESE TODOS LOS ELEMENTOS");
                }
            else {        
                $.ajax({
                    type: "POST",
                    url:"http://localhost/modulo_fiscalizacion_administrativa/Usuario/registrarUsuario",
                    data:{usuario:usuario,password:password,tipo:tipo,nombres:nombres,apellidos:apellidos,dni:dni},
                    success: function(response){
                        if(response == 1){
                            alert("Ingreso correcto");
                            document.location = "<?php echo DIR; ?>Usuario/listarUsuarios";
                        }
                        else{
                            alert("ERROR");
                        }
                    }
                });
                return false;
            }
      });
</script>
</html>
