<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
        colspan

            <td>displat table</td>
            <tr>
            <th>names</th>
            <th>email</th>
            <th>department</th>
            <th>salary</th>
            <th>edit</th>
            <th>delete</th>

           <?php
            $conn=mysqli_connect("localhost","root","","students");
            $ql="SELECT * FROM employees";

            $exe=mysqli_query($conn,$ql);
            ?>
</body>
</html>