<table class = "table"  style="border-spacing: 20px;">
    <tr class="bg -danger text-white table bordered">
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>qualification</th>
        <th>gender</th>
        <th>language</th>
        <th>address</th>
        <th colspan="2" class="text-center">action</th>
    </tr> 


<?php
    include "connection.php"; // establishes connection 

    $sql = "SELECT * FROM cruddata";
    $data = mysqli_query($con,$sql);
    if(mysqli_num_rows($data) > 0){
       while($result = mysqli_fetch_assoc($data)){
          ?>
          <tr>
            <td><?php echo $result['name'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['password'];?></td>
            <td><?php echo $result['qualification'];?></td>
            <td><?php echo $result['gender'];?></td>
            <td><?php echo $result['language'];?></td>
            <td><?php echo $result['address'];?></td>
            <td><img src = "Upload/<?php echo $result['Image'];?>" width="100" height="50"></td>
            <td><a href = "crudform.php?id=<?php echo $result['ID'];?>&name=<?php echo $result['name']; ?>&email=<?php echo $result['email']; ?>
            &password=<?php echo $result['password']; ?>&qualification=<?php echo $result['qualification']; ?>&gender=<?php echo $result['gender']; ?>
            &language=<?php echo $result['language']; ?>&address=<?php echo $result['address']; ?>"  class=""btn btn-success">update</a></td>
            <td><a href = "#" class="btn btn-danger">delete</a></td>
          </tr>


          <?php
        }
    }
    

?>

</table>


