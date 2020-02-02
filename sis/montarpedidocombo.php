<?php
include "index.php";
?>

<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
$valor5 = $_POST['valor5'];
$valor6 = $_POST['valor6'];
$valor7 = $_POST['valor7'];
$valor8 = $_POST['valor8'];

$resultado = ($valor1 * $valor2) + ($valor3 * $valor4) + ($valor5 * $valor6) + ($valor7 * $valor8);
$resultado = number_format($resultado,'2');
?>

<div class="container" style="padding-left: 200px; !important">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Montar combo</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue montando o pedido
								</button>
							</div>
						</div>
					</div>
				</div>
				<form method="post" action="#" target=”_self”>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img src="../img/unnamed.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Cheese Burger</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valor1" class="text-muted" size="5" value="27.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="valor2" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/unnamed.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Green Mayo</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valor3" class="text-muted" size="5" value="30.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="valor4" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/unnamed.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Bacon Lemon Pepper</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valor5" class="text-muted" size="5" value="30.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="valor6" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/unnamed.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Cheddar</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valor7" class="text-muted" size="5" value="32.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="valor8" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Observações
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>R$ <?php echo ("$resultado"); ?></strong></h4>
						</div>
						<div class="col-xs-3">
						<input type="submit" name="calcularbnt" value="calcular" class="btn btn-success btn-block">
							</button><br>
							<button type="submit"  class="btn btn-link btn-xs">apagar
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript">

</script>
</body>
</html>
