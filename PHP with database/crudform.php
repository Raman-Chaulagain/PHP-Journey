<?php
    error_reporting(0); // shows 0 warnings 
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = trim($_REQUEST['password']);
    $qualification =  $_REQUEST['qualification'];
    $gender = trim($_REQUEST['gender']);
    $language = $_REQUEST['language'];
    $address = $_REQUEST['address'];
    $lang = explode(",",$language);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

    <h2>Registration Form</h2>

     <form action = "crudAddData.php" method="POST" enctype="multipart/form-data">
    
   
   

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text"  name="name" placeholder="name" value = "<?php echo $name; ?>">
        <br><br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email"  name="email" placeholder="email" value="<?php echo $email; ?>">
        <br><br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>">
        <br><br>

        <!-- Qualification -->
        <label for="qualification">Qualification:</label>
        <select id="qualification" name="qualification">
            <option value="">Select Qualification</option>
            <option value="SEE" <?php if($qualification == "SEE"){ echo "selected";} ?>>SEE</option>
            <option value="+2" <?php if($qualification == "+2"){ echo "selected";} ?>>+2</option>
            <option value="bachelor" <?php if($qualification == "bachelor"){ echo "selected";} ?>>Bachelor's</option>
            <option value="master" <?php if($qualification == "master"){ echo "selected";} ?>>Master's</option>
        </select>
        <br><br>

        <!-- Gender -->
        <label>Gender:</label>

        <input type="radio" id="male" name="gender" value="male" <?php if($gender == "male") { echo "checked"; } ?>>
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female" <?php if($gender == "female") { echo "checked"; } ?>>
        <label for="female">Female</label>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <br><br>

        <!-- Skills -->
        <label>Skills:</label>
        <br>

        <input type="checkbox" id="java" name="language[]" value="java" <?php if(in_array("java",$lang)){ echo "checked"; } ?>>
        <label for="java">Java</label>

        <input type="checkbox" id="python" name="language[]" value="python" <?php if(in_array("python",$lang)){ echo "checked"; } ?>>
        <label for="python">Python</label>

        <input type="checkbox" id="php" name="language[]" value="php" <?php if(in_array("php",$lang)){ echo "checked"; }?>>
        <label for="php">PHP</label>

        <input type="checkbox" id="javascript" name="language[]" value="javascript" <?php if(in_array("javaScript",$lang)){ echo "checked"; }?>>
        <label for="javascript">JavaScript</label>

        <input type="checkbox" id="cpp" name="language[]" value="cpp" <?php if(in_array("cpp",$lang)){ echo "checked"; }?>>
        <label for="cpp">C++</label>

        <input type="file" id="cpp" name="Images" value="images">
        <label for="image"></label>
        <br><br>

        <!-- Address -->
        <label for="address">Address:</label>
        <br>

        <textarea  name="address" rows="4" cols="30"><?php echo $address; ?></textarea>

        <br><br>

        <!-- Submit -->
         <?php 
            if(!empty($id)){
            ?>    
            <input type="hidden" name = "id" value="<?php echo $id; ?>">
            <button type = "submit" class = "btn btn-primary" name = "update">Update</button>
            <?php }
            else{
              ?>  <button type="submit" class = "btn btn-success" value="Submit" name = "submit">Submit</button>
            <?php }?>
         
         
        



        <a href = "crudViewData.php" class = "btn btn-success mb-5">View Data</a>

    </form>

</body>
</html>