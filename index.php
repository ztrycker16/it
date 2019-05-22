<?php
	require_once("template/head.php");
?>
<div id="root"></div>
<body class="bg-white">

  <div class="container">
    <div class="row" style="padding-top: 1em">
      <div class="col-md-12">
        <div id="logos" class="group">
          <figure id="logo_dgest_tec">
            <a href="http://tecnm.mx/" target="_black">
              <img src="http://www.iztapalapa.tecnm.mx/wp-content/themes/Tecnologico/images/logodgest.png">
            </a>
          </figure> 
        </div>
      </div>
    </div>
    <div class="row" style="padding-top: 1em">
      <div class="col-md-12">
        <div id="logos" class="group">              
          <figure id="logo_itiz">
            <a href="http://www.iztapalapa.tecnm.mx/">
                <img src="http://www.iztapalapa.tecnm.mx/wp-content/themes/Tecnologico/images/escudo_ITIZ_original.png">
            </a>
          </figure>
        </div>
      </div>
    </div>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">SISCCO</div>
      <div class="card-body">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
              <label for="inputEmail"><i class="fas fa-user-alt"></i> Usuario</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" required="required">
              <label for="inputPassword"><i class="fas fa-lock"></i> Contraseña</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="<?php echo $itiz->admin?>/index.php"><i class="fas fa-sign-in-alt"></i> Acceder</a>
        </form>
        <div class="text-center">
          <a class="d-block small" data-toggle="modal" href="#registro">Registrar su Cuenta</a>
          <a class="d-block small" data-toggle="modal" href="#recuperar">Olvido su Contraseña?</a>
        </div>
      </div>
    </div>
  </div>
<?php
    require_once("modals/regUser.php");
	require_once("template/footer.php");
?>

