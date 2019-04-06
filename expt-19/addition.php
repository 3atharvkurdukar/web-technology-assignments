<?php
function add($matrixA, $matrixB)
{
	$ans = array(array(), array(), array());
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
            $ans[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
		}
	}
	return $ans;
}
function printMatrix($matrix)
{
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			echo "\t" . $matrix[$i][$j];
		}
		echo "\n";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Matrix Operations</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<style>
		pre {
			font-size: 1.6rem;
		}

		.form-inline .form-control {
			text-align: right;
			width: inherit !important;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-primary">Matrix Addition</h1>
				<hr>
			</div>
			<form action="" class="form-inline" method="post">
				<div class="col-sm-6">
					<p>Enter values for matrix A: </p>
					<div class="row">
						<?php
						for ($i = 0; $i < 3; $i++) {
							for ($j = 0; $j < 3; $j++) {
								echo "
								<div class='col-sm-4'>
									<input class='form-control' type='number' name='a-$i-$j' required>
								</div>
								";
							}
						}
						?>
					</div>
				</div>
				<div class="col-sm-6">
					<p>Enter values for matrix B: </p>
					<div class="row">
						<?php
						for ($i = 0; $i < 3; $i++) {
							for ($j = 0; $j < 3; $j++) {
								echo "
								<div class='col-sm-4'>
									<input class='form-control' type='number' name='b-$i-$j' required>
								</div>
								";
							}
						}
						?>
					</div>
				</div>
				<div class="col-sm-12"><br></div>
				<div class="col-sm-8 offset-2">
					<button type="submit" class="btn btn-lg btn-block btn-primary" name="sbumit">Add</button>
				</div>
			</form>
			<div class="col-sm-12"><br></div>
			<?php
			if ($_POST) {
				$matrixA = array(array(), array(), array());
				$matrixB = array(array(), array(), array());
				for ($i = 0; $i < 3; $i++) {
					for ($j = 0; $j < 3; $j++) {
						$matrixA[$i][$j] = $_POST["a-$i-$j"];
					}
				}
				for ($i = 0; $i < 3; $i++) {
					for ($j = 0; $j < 3; $j++) {
						$matrixB[$i][$j] = $_POST["b-$i-$j"];
					}
				}
				$ans = add($matrixA, $matrixB);
			?>
			<div class="col-sm-8 offset-2 text-center">
				<h4>A + B: </h4>
				<pre><?php printMatrix(@$ans); ?></pre>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<script src="./js/bootstrap.min.js"></script>
</body>

</html>