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

        $res = $conn->query("SELECT * FROM `student` WHERE ID = $id;");
        if ($res) {
            while($row=$res->fetch_assoc())
            {
                $name = $row['Name'];
                   $rollno = $row['RollNo'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="post">
                    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="rollno">Roll No.</label>
                      <input type="number" class="form-control" name="rollno" id="rollno" value="<?php echo $rollno; ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $rollno = $_POST['rollno'];

                $res = $conn->query("UPDATE `student` SET Name = '$name', RollNo = $rollno WHERE ID = $id;");
                if ($res) {
                    echo '<h3 class="text-success">Changes Saved!</h3>';
                    header('Location: ./');
                    exit();
                } else {
                    echo '<h3 class="text-danger">Something went wrong!</h3>';
                }
            }
            ?>
        </div>
    </div>
    <?php 
            }
        }
    } 
    ?>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>