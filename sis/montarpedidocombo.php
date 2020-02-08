<?php
include "index.php";
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
		
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img src="../img/unnamed.jpg" alt="LOGO" width="60px" weight="300px">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Cheese Burger</strong>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
							<input type="number" id="valorcombo1" class="form-control" size="1" value="27.50">Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multcombo1" class="form-control" size="1"/>qtd
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
							<input type="number" id="valorcombo2" class="form-control" size="5" value="30.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multcombo2" class="form-control" size="5"/>qtd
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
							<input type="number" id="valorcombo3" class="form-control" size="5" value="30.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multcombo3" class="form-control" size="5"/>qtd
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
							<input type="number" id="valorcombo4" class="form-control" size="5" value="32.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multcombo4" class="form-control" size="5"/>qtd
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
							<input type="number" id="valorchess" class="form-control" size="5" value="14.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multchess" class="form-control" size="5"/>qtd
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
							<input type="number" id="valorgreen" class="form-control" size="5" value="17.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multgreen" class="form-control input-sm" size="5"/>qtd
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
							<input type="number" id="valorlemon" class="form-control" size="5" value="17.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multlemon" class="form-control input-sm" size="5"/>qtd
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
							<input type="number" id="valorcheddar" class="form-control" size="5" value="19.50"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multcheddar" class="form-control input-sm" size="5"/>qtd
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
							<input type="number" id="valorbebida" class="form-control" size="5" value="5.00"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multbebida" class="form-control input-sm" size="5"/>qtd
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
							<input type="number" id="valorbatata" class="form-control" size="5" value="5.00"/>Valor
							</div>
							<div class="col-xs-4">
							<input type="number" id="multbatata" class="form-control input-sm" size="5"/>qtd
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
							<h4 id="res" class="text-right">Total</h4>
						</div>
						<div class="col-xs-3">
							<input type="button" id="calcular" name="calcularbnt" value="calcular" class="btn btn-success btn-block" onclick="somar()">
							</button><br>
							<button type="button" id="apagar" class="btn btn-link btn-xs" onclick="apagar()">apagar
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="calcular.js"></script>
</body>
</html>
			
				
