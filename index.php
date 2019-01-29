<!DOCTYPE html>
<html>
<head>
	<title>Input Decimal</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation" class="active"><a href="index.php">Input Decimal</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-3 control-label">Decimal</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" id="inputEmail3" placeholder="Input Decimal" name="decimal" required/>
				    </div>
				</div>

				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-success" name="convert">Convert</button>
					</div>
  				</div>
			</form>

			<?php
				if(isset($_POST['convert'])){
					$decimal = $_POST['decimal'];
					$hexatri = base_convert($decimal, 10, 36);
					echo "<h3>Hexatridecimal: ".strtoupper($hexatri)."</h3>";
				}
			?>
			<br><br><br><br><br>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-3 control-label">Hexatridecimal</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="Input Hexatridecimal" name="hextri" required/>
				    </div>
				</div>

				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-success" name="convert2">Convert</button>
					</div>
  				</div>
			</form>

			<?php
				if(isset($_POST['convert2'])){
					$hextri = $_POST['hextri'];
					$deci = base_convert($hextri, 36, 10);
					echo "<h3>Decimal: ".strtoupper($deci)."</h3>";
				}
			?>

		</div>
	</div>
</body>
</html>