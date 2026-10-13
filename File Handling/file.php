<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "#" method="POST" enctype="multipart/form-data" >
        <input type="file" name="myfile">
        <input type = "submit" name="Upload">

    </form>
</body>
</html>



<?php 

    if(isset($_POST['Upload'])){
         $filename = $_FILES['myfile']['name'];
        
        $tempname = $_FILES['myfile']['tmp_name'];
        $destination = "Upload/".$filename;

        if(move_uploaded_file($tempname,$destination)){
            echo "data uploaded successfully.";
        }

        else{
            echo "Unable to upload the data";
        }
    }
    
   
    
?>

