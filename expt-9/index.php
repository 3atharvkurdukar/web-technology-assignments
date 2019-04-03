<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL User Info</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '');
    if ($conn->connect_error)
        die('<h1 class="text-danger"> Couldn\'t Connect Server!!</h1>');
    $conn->select_db('mysql') or die('<h1 class="text-danger"> Couldn\'t Connect Database!!</h1>');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">MySQL Users</h1>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Host</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $res = $conn->query('SELECT `User`, `Host`, `Password` FROM `user`');
                    while($row=$res->fetch_assoc())
                    {
                        $user = $row['User'];
                        $host = $row['Host'];
                		$password = $row['Password'];
                    ?>
                        <tr>
                            <td scope="row"><?php echo $user; ?></td>
                            <td><?php echo $host; ?></td>
                            <td><?php echo $password; ?></td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>