<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMINISTRADOR | Log in</title>
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
  
  "
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="view/index.php"><b>ADMINISTRADOR</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa para acceder a tu sesión</p>

    <form action="#"  method="POST" name="session">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="usuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recuérdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" onclick="userLogin()" class="btn btn-primary btn-block btn-flat" >Ingresar</button>
            <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="userLogin2()">Ingresar 2</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    <!-- /.social-auth-links -->

    <a href="#">Olvidé mi contraseña</a><br>
    <a href="register.html" class="text-center">Registrar un nuevo usuario</a>
      

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<?php
echo "
<script src='".DIR."views/bower_components/jquery/dist/jquery.min.js'></script>
<!-- Bootstrap 3.3.7 -->
<script src='".DIR."views/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
<!-- iCheck -->";

?>
<script>
 

  
  function userLogin(){
    var usuario = $('form[name=session] input[name=usuario]')[0].value;
    var password = $('form[name=session] input[name=password]')[0].value;
    if(usuario=="" || password==""){
      
    }
    else{
    $.ajax({
      type:"POST",
      url:"http://localhost/fiscalizacion/Usuario/userlogin",
      data:{usuario:usuario,password:password}
    } 
    ).done(function(response){
      //alert(response); para ver nada más
      if(response==1){
        document.location = "http://localhost/fiscalizacion/Principal/principal";
      }
      else{

        alert("Email o Contraseña incorrectos");
      }
    })
    }
    
  }
</script>
</body>
</html>
