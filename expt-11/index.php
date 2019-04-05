<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Palindrome</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php
    // Function to check for Palindrome 
    function palindrome($string) {
        //remove all spaces
        $string = str_replace(' ', '', $string);

        //remove special characters
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        //change case to lower
        $string = strtolower($string);

        //reverse the string
        $reverse = strrev($string);

        if ($string == $reverse) {
            return 1;
        } 
        else {
            return 0;
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Check whether a string is palindrome or not</h1>
                <hr>
                <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="string">Enter string: </label>
                        &nbsp;&nbsp;
                        <input type="string" name="string" id="string" class="form-control" required>
                    </div>
                    &nbsp;&nbsp;
                    <button type="submit" name="submit" class="btn btn-primary">Check</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <br>
                <?php
                if (isset($_POST['submit'])) {
                    $string = $_POST['string'];
                    if (palindrome($string)){
                        echo '<h4 class="text-success">It is a palindrome! ✔</h4>';
                    }
                    else {
                        echo '<h4 class="text-danger">Not a palindrome! ❌</h4>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>