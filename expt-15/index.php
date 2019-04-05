<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Char Occurences</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php
    function char_count($string, $char) {
        $count = 0;
        // The easy way 😎
        // $count = substr_count($string, $char);

        // THe hard way 😵
        for ($i=0; $i < strlen($string); $i++) { 
            if (substr($string, $i, 1) == $char) {
                $count++;
            }
        }
        return $count;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Show the no. of character occurrences of a character in a string </h1>
                <hr>
                <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="string">String: </label>
                        &nbsp;&nbsp;
                        <input type="text" name="string" id="string" class="form-control" value="<?php echo @$_GET['string']; ?>" required>
                    </div>
                    &nbsp;&nbsp;
                    <div class="form-group">
                        <label for="char">Character: </label>
                        &nbsp;&nbsp;
                        <input type="text" name="char" id="char" class="form-control" maxlength="1" value="<?php echo @$_GET['char']; ?>" required>
                    </div>
                    &nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Show</button>
                </form>
                <br>
                <h4>
                <?php
                if (isset($_GET['string']) && isset($_GET['char'])) {
                    $string = $_GET['string'];
                    $char = $_GET['char'];
                    echo 'No. of occurrences = ' . char_count($string, $char);
                }
                ?>
                </h4>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>