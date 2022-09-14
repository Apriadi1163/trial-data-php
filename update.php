<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result); 
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" placeholder="enter your name" name="name" class="form-control" autocomplate="off" value=<?php echo $name; ?> >
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" placeholder="enter your email" name="email" class="form-control" autocomplate="off" value=<?php echo $email; ?>>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="text" placeholder="enter your mobile number" name="mobile" class="form-control" autocomplate="off" value=<?php echo $mobile; ?>>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" placeholder="enter your password" name="password" class="form-control" autocomplate="off" value=<?php echo $password; ?>>
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>

    
  </body>
</html>