<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
<table class="table">
  <thead>
    <tr>
    <th scope='col'>ID</th>
      <th scope='col'>FirstName</th>
      <th scope='col'>LastName</th>
      <th scope='col'>Email</th>
      <th scope='col'>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("dataBase.php");
    $sql = "SELECT  id,firstname,lastname, email FROM User";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
    
      echo  "<td scope='col'>$row[id]</td>
      <td scope='col'>$row[firstname]</td>
      <td scope='col'>$row[lastname]</td>
      <td scope='col'>$row[email]</td>
      <td>
      <a  class='btn btn-success btn-sm' href='Update.php?idUpdated=$row[id]'>edit</a>
      <a  class='btn btn-danger btn-sm' href='delete.php'>edit</a>
      </td>
      </tr>
      
      "
      
      ;
      
    }
    
    }
    
   
    ?>
  </tbody>
</table>
</div>
</body>
</html>