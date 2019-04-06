<?php
if ($_POST) {
	$matrix = array(array(), array(), array());
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$matrix[$i][$j] = $_POST["input-$i-$j"];
		}
		$transpose = transpose($matrix);
	}
}
function transpose($array)
{
	return array_map(null, ...$array);
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
				<h1>Matrix Transpose</h1>
				<hr>
			</div>
			<div class="col-sm-6">
				<p>Enter values for 3 x 3 matrix: </p>
				<form action="" class="form-inline" method="post">
					<div class="row">
						<?php
						for ($i = 0; $i < 3; $i++) {
							for ($j = 0; $j < 3; $j++) {
								echo "
								<div class='col-sm-4'>
									<input class='form-control' type='number' name='input-$i-$j' required>
								</div>
								";
							}
						}
						?>
						<div class="col-sm-12"><br></div>
						<div class="col-sm-8 offset-2">
							<button type="submit" class="btn btn-lg btn-block btn-primary" name="sbumit">Transpose</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<p>Transpose matrix: </p>
				<pre><?php printMatrix(@$transpose); ?></pre>
			</div>
		</div>
	</div>
	<script src="./js/bootstrap.min.js"></script>
</body>

</html>