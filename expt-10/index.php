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
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Student Table</h1>
                <hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll No.</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $res = $conn->query('SELECT `ID`, `Name`, `RollNo` FROM `student`');
                    while($row=$res->fetch_assoc())
                    {
                        $id = $row['ID'];
                        $name = $row['Name'];
                		$rollNo = $row['RollNo'];
                    ?>
                        <tr>
                            <td scope="row"><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $rollNo; ?></td>
                            <td><a href="edit.php?id=<?php echo $id; ?>">🖊</a></td>
                            <td><a href="delete.php?id=<?php echo $id; ?>">🗑</a></td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-primary">Add User</h1>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="rollno">Roll No.</label>
                      <input type="text" class="form-control" name="rollno" id="rollno" pattern="[0-9]{8,9}" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $rollno = $_POST['rollno'];

                $res = $conn->query("INSERT INTO `student` (Name, RollNo) VALUES ('$name', $rollno);");
                if ($res) {
                    echo '<h3 class="text-success">New User Added!</h3>';
                } else {
                    echo '<h3 class="text-danger">Unable to add user</h3>';
                }
            }
            ?>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>