<html>
   <head>
      <title>Selecting MySQL Database</title>
   </head>
   <body>
  
   </body>
</html>
<html>
    <head>
    <link rel="stylesheet" href="style.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
.button {
   
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px 100px 0px 0px;
  cursor: pointer;
  float: right;
}
body {background-color: gray;}
</style>
</head>
<body>
<a href="register.php" class="button">Add</a>
    <div class="main-div">
    
        <div class="center-div">
        
            <table>
           
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>email</th>
                        <th>DOB</th>
                        <th>education</th>
                        <th>loaction</th>
                        <th>about</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
     
     require('db.php');

     
     $query="SELECT * FROM users";
     $data=mysqli_query($con,$query);
 
     $total = mysqli_num_rows($data);
     
 
    
    while($result = mysqli_fetch_array($data))
     {
 
    ?>
                    <tr>
                        <td><?php echo $result['id'];?></td>
                        <td><?php echo $result['firstname'];?></td>
                        <td><?php echo $result['lastname'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['dob'];?></td>
                        <td><?php echo $result['education'];?></td>
                        <td><?php echo $result['locat'];?></td>
                        <td><?php echo $result['about'];?></td>
                        <td><a href="update.php?id=<?php echo $result['id'];?> " data-toggle="tooltip" data-placement="top" title="Update!"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="delete.php?id=<?php echo $result['id'];?> " data-toggle="tooltip" data-placement="top" title="Delete!"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                    </tr>
                    <?php } ?>    
                </tbody>
            </table>
</div>
</div>
</body>

</html>