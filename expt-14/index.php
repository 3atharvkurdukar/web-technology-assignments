<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php
    function factorial($number) {
        $fact = 1;
        for ($i=2; $i <= $number; $i++) { 
            $fact *= $i;
        }
        return $fact;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Show factorial of given number</h1>
                <hr>
                <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="number">Number: </label>
                        &nbsp;&nbsp;
                        <input type="number" name="number" id="number" class="form-control">
                    </div>
                    &nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Show</button>
                </form>
                <br>
                <h4>
                <?php
                if (isset($_GET['number'])) {
                    $number = (int) $_GET['number'];
                    echo 'Factorial = ' . factorial($number);
                }
                ?>
                </h4>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>