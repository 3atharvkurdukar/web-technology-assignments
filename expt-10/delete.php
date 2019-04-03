<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '') or die('<h1 class="text-danger"> Couldn\'t Connect Server!!</h1>');
    $conn->select_db('javadb') or die('<h1 class="text-danger"> Couldn\'t Connect Database!!</h1>');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $res = $conn->query("DELETE FROM `student` WHERE ID=$id;");
        if ($res) {
            echo '<h3 class="text-success">Item deleted!</h3>';
            header('Location: ./');
            exit();
        } else {
            echo '<h3 class="text-danger">Something went wrong!</h3>';
        }
    } 
    ?>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>
