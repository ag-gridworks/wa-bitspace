<?php
require_once("header.php");
?>
<?php if(isset($_SESSION['uid'])): ?>
<div id="go-wrapper">
	<?php if($user['card_name'] != "not_set"): ?>
	<div class="go-title-area">
		<div class="go-title default">Dashboard</div>
	</div>
	
	<div class="showcase-3 go-row">
	<div class="showcase-3__item">
		<div class="inner box-3 hover-1">
			<div class="box-left">
				<div class="box-thumb">
					<img src="images/gorila-images/profile.png">
					</div>
				</div>
		
			<div class="box-right">
				<div class="box-title"><?php echo $user['card_name']; ?></div>
				<div class="box-subtitle">Valor Mensal: <?php echo $user['card_value']; ?></div>
				<div class="box-subtitle"><?php echo $user['card_renew']; ?></div>
				<div class="box-options">
					<button class="go-button purple small"><i class="fa fa-history" aria-hidden="true"></i> Histórico de Gastos</button>
					<button class="go-button red small"><i style="padding-right: 5px"class="fa fa-cart-plus" aria-hidden="true"></i>Registrar Novo Gasto</button>
					<button class="go-button orange small"><i style="padding-right: 5px"class="fa fa-refresh" aria-hidden="true"></i>Renovar Saldo</button>
				</div>
				<div class="box-content hide">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut
				</div>
			</div>
		</div>
	</div>
</div>

<div class="showcase-1 center go-flex go-row">
	<div class="showcase-1__item">
		<div class="inner box-1 hover-1">
			<div class="box-icon">
				<i class="fa fa-dollar" aria-hidden="true"></i>
			</div>

			<div class="box-title">
				Saldo Disponivel
			</div>

			<div class="box-subtitle">
				Renova em: <?php echo $user['card_renew']; ?>
			</div>

			<div class="box-content">
				<h3><?php echo $user['card_value']; ?></h3>
			</div>

			<div class="options hide">
				<button class="go-button small red">Botão</button>
			</div>
		</div>
	</div>

	<div class="showcase-1__item">
		<div class="inner box-1 hover-1">
			<div class="box-icon">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
			</div>

			<div class="box-title">
				Gasto Recomendado
			</div>

			<div class="box-subtitle">
				Valor diário
			</div>

			<div class="box-content">
				<h3>R$18,09</h3>
			</div>

			<div class="options hide">
				<button class="go-button small red">Botão</button>
			</div>
		</div>
	</div>

	<div class="showcase-1__item">
		<div class="inner box-1 hover-1">
			<div class="box-icon">
				<i class="fa fa-compass" aria-hidden="true"></i>
			</div>

			<div class="box-title">
				Média de Gastos
			</div>

			<div class="box-subtitle">
				Valor Diário
			</div>

			<div class="box-content">
				<h3>R$24,45</h3>
			</div>

			<div class="options hide">
				<button class="go-button small red">Botão</button>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
<div class="go-title-area">
		<div class="go-title default">Sem cartões</div>
	</div>
<center>
<a href="cadastrar-cartao.php" class="go-button red">Você não possui nenhum cartão, clique aqui para registrar</a>
</center>
<?php endif; ?>

</div>
<?php else: ?>
<center>
<a href="signin.php" class="go-button">Entrar</a>
<a href="register.php" class="go-button">Registrar</a>
</center>
<?php endif; ?>
