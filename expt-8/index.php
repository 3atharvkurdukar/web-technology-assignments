<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Info</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-primary">User Information</h1>
                <hr>
                <pre>
                    <?php
                    # The Windows Way 😎
                    $user = '3atha';
                    $command = 'net user ' . $user;
                    $output = NULL;
                    exec($command, $output);
                    if ($output == NULL) {
                        echo '<h5 class="text-danger">Something went wrong!</h5>';
                    }
                    for ($i = 0 ; $i < count($output)-2 ; $i++) { 
                        echo '<br />' . $output[$i];
                    }
                    ?>
                </pre>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>