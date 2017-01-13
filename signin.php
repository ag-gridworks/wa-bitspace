	<?php

include("header.php");

	?>
<div class="formulario container center">
    <div class="row vertical-offset-100">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Fazer Login</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" action="login.php" method="post">
                    <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Usuário" name="username" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Senha" name="password" type="password" value="">
              </div>
              <input class="go-button blue full" type="submit" value="Entrar" name="login">
            </fieldset>
              </form>
              <input style="margin-top: 10px;" onclick="window.location='register.php'" class="go-button orange full" type="submit" value="Cadastrar" name="cadastrar">
          </div>
      </div>
    </div>
  </div>
</div>
