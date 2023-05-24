<?php
 require('db.php');
    
    

 $ids= $_GET['id']; 


$query="DELETE  FROM `users` WHERE id='$ids'";
$data=mysqli_query($con,$query);
?>
<script>
alert('Data Deleted');
window.location.href='select.php';
</script>


