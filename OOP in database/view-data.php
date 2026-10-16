<?php

    include "database.php";

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

   <style>
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 5px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: lightblue;
        }
    </style>


<body>
    <table>
        <thead>
            <tr class="bg -danger text-white table bordered">
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>pass</th>
            <th colspan="3">action</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($fetch_data as $arr){ ?>
                <tr>
                    <td><?php echo $arr['userid']; ?></td>
                    <td><?php echo $arr['username']; ?></td>
                    <td><?php echo $arr['useremail']; ?></td>
                    <td><?php echo $arr['userpass']; ?></td>
                    <td><a href="form.php?id=<?php echo $arr['userid']; ?>">Edit</a><td>
                    <a href="">Delete</a>
                </tr>
            <?php } ?>
        </tbody>
        
    </table>
</body>
</html>