<?php
require_once("header.php");
?>
 <?php if(isset($_SESSION['uid'])): ?>
<div id="go-wrapper">
<div class="go-title-area">
	<div class="go-title default">Dashboard</div>
</div>
	<div class="showcase-1 go-flex center">
		<div class="showcase-1__item">
			<div class="inner box-1 hover-1">
				<div class="box-icon">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</div>

				<div class="box-title">
					Titulo
				</div>

				<div class="box-subtitle">
					Sub-Titulo
				</div>

				<div class="box-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</div>

				<div class="options hide">
					<button class="go-button small red">Botão</button>
				</div>
			</div>
		</div>

		<div class="showcase-1__item">
			<div class="inner box-1 hover-1">
				<div class="box-icon">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</div>

				<div class="box-title">
					Titulo
				</div>

				<div class="box-subtitle">
					Sub-Titulo
				</div>

				<div class="box-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
		</div>

		<div class="showcase-1__item">
			<div class="inner box-1 hover-1">
				<div class="box-icon">
					<i class="fa fa-steam" aria-hidden="true"></i>
				</div>

				<div class="box-title">
					Titulo
				</div>

				<div class="box-subtitle">
					Sub-Titulo
				</div>

				<div class="box-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>
		</div>
	</div>
	
	<div class="showcase-2 go-flex center">
	<div class="showcase-2__item">
		<div class="inner box-2 hover-1">
			<div class="box-left">
				<div class="box-thumb">
					<img src="images/gorila-images/profile.png">
				</div>
			</div>

			<div class="box-right">
				<div class="box-title">Titulo</div>
				<div class="box-subtitle">Sub-Titulo</div>
				<div class="box-options">
					<button class="go-button red small">Ver</button>
					<button class="go-button green small">Enviar</button>
					<button class="go-button purple small">Responder</button>
				</div>
				<div class="box-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis debitis vero iste eos aperiam est doloribus totam ratione praesentium excepturi porro omnis, ab dolorum quo, eum architecto explicabo ipsam assumenda.doloribus totam ratione praesentium excepturi porro omnis, ab dolorum quo, eum architecto explicabo ipsam assumenda.doloribus totam ratione praesentium excepturi porro omnis, ab dolorum quo, eum architecto explicabo ipsam assumenda.doloribus totam ratione praesentium excepturi porro omnis, ab dolorum quo, eum architecto explicabo ipsam assumenda.
				</div>
			</div>
		</div>
	</div>

	<div class="showcase-2__item">
		<div class="inner box-2 hover-1">
			<div class="box-left">
				<div class="box-thumb">
					<img src="images/gorila-images/profile.png">
					</div>
				</div>
		
			<div class="box-right">
				<div class="box-title">Titulo</div>
				<div class="box-subtitle">Sub-Titulo</div>
				<div class="box-options">
					<button class="go-button red small">Ver</button>
					<button class="go-button green small">Enviar</button>
					<button class="go-button purple small">Responder</button>
				</div>
				<div class="box-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<?php else: ?>
<center>
<a href="signin.php" class="go-button">Entrar</a>
<a href="register.php" class="go-button">Registrar</a>
</center>
<?php endif; ?>
