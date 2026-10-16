<?php 
    include "database.php";
        if(isset($_GET['id'])){
            $updatedData =  $obj->showdataupdate($_GET['id']) ;
        }
        else{
            $updatedData = '';
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

    <h2>User Registration Form</h2>
    <a href="view-data.php">View Data</a>
    <form action="database.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php if(!empty( $updatedData['username'])){echo $updatedData['username'];} ?>" placeholder="Enter your name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php if(!empty( $updatedData['useremail'])){echo $updatedData['useremail'];} ?>" placeholder="Enter your email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php if(!empty( $updatedData['userpass'])){echo $updatedData['userpass'];} ?>" placeholder="Enter your password" required>
        <br><br>

        <?php if(isset($_GET['id'])){ ?>
            <button type="submit" name = "submit">Update</button>
        <?php } else {?>
            <button type="submit" name = "submit">Submit</button>
        <?php } ?>
        <button type="reset">Clear</button>
    </form>

</body>
</html>
