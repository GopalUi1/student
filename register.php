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
    margin : 40px 330px;
    font-weight: bold;
}
a {
    justify-content: left;
    margin : 60px 80px 10px 260px;
    color:black;
}
</style>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['firstname'])) {
       
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
      
       
        $query    = "INSERT into `users` (firstname,lastname,email,dob,education,locat,about)
                     VALUES ('$firstname','$lastname','$email','$dob','$education','$locat','$about')";
        $result   = mysqli_query($con, $query);
        if ($result) {
?>
            <script>
alert('Record inserted');
window.location.href='register.php';
</script>
  <?php          
        } else {?>
            <script>  
alert('Record cannot inserted');
window.location.href='register.php';
</script>
  <?php 
        }
    } else {
?>
  <a href="select.php">   
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-arrow-left"    viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
    <form class="form" action="" method="post">
        
   
      
        <div class="main-di">
        

        <div class="center-d">
           
            <table class="table table-borderless">
            <p class="logintitle">Add student detail</p>
                    <tr>
                        <td>Firstname</td>
                        <td> <input type="text" class="form-control" name="firstname" required /></td>
                        <td>Lastname</td>
                        <td> <input type="text" class="form-control" name="lastname" required /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>  <input type="text" class="form-control" name="email" required /></td>
                        <td>Date Of Birth</td>
                        <td>  <input type="date" class="form-control"  name="dob" required /></td>
                    </tr>
                     <tr>
                        <td>Education</td>
                        <td>   <input type="text" class="form-control" name="education" required /></td>
                        <td>Location</td>
                        <td>  <input type="text" class="form-control" name="locat" required /></td>
                    </tr>
                    <tr>
                        <td>About</td>
                        <td colspn="2"><textarea type="text" class="form-control" name="about" row="5"  required ></textarea>  </td>
               
                    </tr>
    </table>
    
    
        <input type="submit" name="submit" value="Register" class="button">
        </div>
    </div>
    </form>
<?php
    }
?>
</body>
</html>
