<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
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
  margin: 10px 350px;
  cursor: pointer;
  float: center;
}
body {background-color: gray;}
.logintitle{
    margin : 40px 370px;
    font-weight: bold;
    
}
</style>
</head>
<body>
<?php


    
    require('db.php');
    
    

         $ids= $_GET['id']; 


    $query="SELECT * FROM `users` WHERE id='$ids'";
    $data=mysqli_query($con,$query);

    $result = mysqli_fetch_array($data);    
    if (isset($_REQUEST['submit'])) {

        $idss= $_GET['id'];

        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);

        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($con, $lastname);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $dob = stripslashes($_REQUEST['dob']);
        $dob = mysqli_real_escape_string($con, $dob);

        $education = stripslashes($_REQUEST['education']);
        $education = mysqli_real_escape_string($con, $education);

        $locat = stripslashes($_REQUEST['locat']);
        $locat = mysqli_real_escape_string($con, $locat);

        $about = stripslashes($_REQUEST['about']);
        $about = mysqli_real_escape_string($con, $about);
      
        require('db.php');
        $query ="UPDATE users set  firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "',email='" . $_POST['email'] . "',dob='" . $_POST['dob'] . "',education='" . $_POST['education'] . "',locat='" . $_POST['locat'] . "',about='" . $_POST['about'] . "' WHERE id='$idss'";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                        <script>
            alert('Data Updated Successfully');
            window.location.href='select.php';
            </script>
              <?php          
        } else {
            ?>
                        <script>
            alert('Data cannot updated');
            window.location.href='select.php';
            </script>
              <?php          
        }
    } else {
  
?>

    <form class="form" action="" method="post">

        <div class="main-di">
        <div class="center-d">
        <table class="table table-borderless">
            
        <p class="logintitle">Edit student detail</p>
            <table class="table table-borderless">
                        <tr>
                        <td>Firstname</td>
                        <td> <input type="text" class="form-control" name="firstname" value="<?php echo $result['firstname'];?>" required /></td>
                        <td>Lastname</td>
                        <td> <input type="text" class="form-control" name="lastname" value="<?php echo $result['lastname'];?>" required /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>  <input type="text" class="form-control" name="email" value="<?php echo $result['email'];?>" required /></td>
                        <td>Date Of Birth</td>
                        <td>  <input type="date" class="form-control" name="dob" value="<?php echo $result['dob'];?>" required /></td>
                    </tr>
                     <tr>
                        <td>Education</td>
                        <td>   <input type="text" class="form-control" name="education" value="<?php echo $result['education'];?>" required /></td>
                        <td>Location</td>
                        <td>  <input type="text" class="form-control" name="locat" value="<?php echo $result['locat'];?>" required /></td>
                    </tr>
                    <tr>
                        <td>About</td>
                        <td colspn="2"><textarea type="text" class="form-control" name="about" row="5" required ><?php echo $result['about'];?> </textarea>  </td>
               
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Edit" class="button"></td></tr> 
                    </table>
    
    
        
        </div>
    </div>
    </form>
<?php
    }
?>
</body>
</html>






























