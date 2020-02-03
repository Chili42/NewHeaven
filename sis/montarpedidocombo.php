<?php
include "index.php";
?>

<?php

$valorcombo1 = $_POST['valorcombo1'];
$multcombo1 = $_POST['multcombo1'];
$valorcombo2 = $_POST['valorcombo2'];
$multcombo2 = $_POST['multcombo2'];
$valorcombo3 = $_POST['valorcombo3'];
$multcombo3 = $_POST['multcombo3'];
$valorcombo4 = $_POST['valorcombo4'];
$multcombo4 = $_POST['multcombo4'];
$valorchess = $_POST['valorchess'];
$multchess = $_POST['multchess'];
$valorgreen = $_POST['valorgreen'];
$multgreen = $_POST['multgreen'];
$valorlemon = $_POST['valorlemon'];
$multlemon = $_POST['multlemon'];
$valorcheddar = $_POST['valorcheddar'];
$valorbebida = $_POST['valorbebida'];
$multbebida = $_POST['multbebida'];
$valorbatata = $_POST['valorbatata'];
$multbatata = $_POST['multbatata'];

$resultado = ($valorcombo1 * $multcombo1) + ($valorcombo2 * $multcombo2) + ($valorcombo3 * $multcombo3) + ($valorcombo4 * $multcombo4) + ($valorchess * $multchess) + ($valorgreen * $multgreen) + ($valorlemon * $multlemon) + ($valorbebida * $multbebida) + ($valorbatata * $multbatata);
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
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Monte o pedido</h5>
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
							<input type="text" name="valorcombo1" class="text-muted" size="5" value="27.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multcombo1" class="form-control input-sm" size="5"/>
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
							<input type="text" name="valorcombo2" class="text-muted" size="5" value="30.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multcombo2" class="form-control input-sm" size="5"/>
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
							<input type="text" name="valorcombo3" class="text-muted" size="5" value="30.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multcombo3" class="form-control input-sm" size="5"/>
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
							<input type="text" name="valorcombo4" class="text-muted" size="5" value="32.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multcombo4" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/burger.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Cheese Burger</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorchess" class="text-muted" size="5" value="14.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multchess" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/burger.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Green Mayo</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorgreen" class="text-muted" size="5" value="17.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multgreen" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/burger.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Bacon Lemon Pepper</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorlemon" class="text-muted" size="5" value="17.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multlemon" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img src="../img/burger.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Cheddar</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorcheddar" class="text-muted" size="5" value="19.50"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multcheddar" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
                    <div class="row">
						<div class="col-xs-2"><img src="../img/sucorefri.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Bebida</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorbebida" class="text-muted" size="5" value="5.00"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multbebida" class="form-control input-sm" size="5"/>
							</div>
						</div>
					</div>
					<hr>
                    <div class="row">
						<div class="col-xs-2"><img src="../img/batata.jpg" alt="LOGO" width="60px" weight="500px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Batata Frita</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="text" name="valorbatata" class="text-muted" size="5" value="5.00"/>  x
							</div>
							<div class="col-xs-4">
							<input type="text" name="multbatata" class="form-control input-sm" size="5"/>
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
			
				
