<?php include ("header.php"); ?>

<?php if (isset($_SESSION['uid'])): ?>

<div id="go-wrapper">
<div class="go-row">

<div class="go-title-area">
  <div class="go-title default">Cadastrar Novo Cartão</div>
</div>

<form class="<?php if ($sql){echo "hide";} ?>" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do Cartão</label>
    <input class="form-control" type="text" name="card_name">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Valor Mensal do Cartão</label>
    <input  type="number" step="0.01" class="form-control" name="card_value">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Saldo Disponivel</label>
     <small id="fileHelp" class="form-text text-muted">Caso já tenha utilizado neste mês</small>
    <input type="number" step="0.01" class="form-control" name="card_value_left">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Data da Renovação do Saldo</label>
    <input type="date" class="form-control" name="card_renew">
  </div>
  
  <!-- <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <input type="hidden" value="<?php echo $user['id'] ?>" name="user_id">
  <button type="submit" class="go-button red" name="cadastrar">Cadastrar Cartão</button>
</form>



<?php
if (isset($_POST['cadastrar'])) {
	$card_name = $_POST['card_name'];
	$card_value = $_POST['card_value'];
	$card_value_left = $_POST["card_value_left"];
  $card_renew = $_POST["card_renew"];
  $user_id = $_POST["user_id"];
	
			 $sql = mysql_query("UPDATE user SET card_name = '$card_name', card_value = '$card_value', card_value_left = '$card_value_left', card_renew = '$card_renew' WHERE id = '$user_id'");
			if ($sql){
        echo "<center><a class=\"go-button orange\" href=\"index.php\"> Seu Cartão foi cadastrado, Clique aqui para voltar </a></center>";
			}
	}
endif;
?>
</div>
</div>