<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum of integers</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Sum of integers between 0 and 30</h1>
                <hr>
                <?php
                $sum = 0;
                for ($i=0; $i < 30; $i++) { 
                    $sum += $i;
                }
                echo '<h3>Total = ' . $sum . '</h3>';
                ?>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>