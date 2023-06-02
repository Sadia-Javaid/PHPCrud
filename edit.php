<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "Select * from crud";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = ['name'];
$email = ['email'];
$mobile = ['mobile'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    

$sql = "UPDATE crud
 SET name='$name',mobile='$mobile',email='$email'
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record update successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Crud Operation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        
        <div class="container">
            <h1>Edit Student record</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label><br>
                    <input type="text" class="form-control" placeholder = "Enter Your Name" name = "name" value = "<?php echo $row['name']?>">
                </div>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="text" class="form-control" placeholder = "Enter Your Email" name = "email" value = "<?php echo $row['email']?>">
                </div>
                <div class="form-group">
                    <label>Phone number</label><br>
                    <input type="number" class="form-control" placeholder = "Enter Your Phone Number" name = "mobile" value = "<?php echo $row['mobile']?>">
                </div>
                <button class="btn btn-primary" name="submit" type="submit">
                <a href="dashboard.php" class ="text-light">Update</a>    
                </button>
            </form>
        </div>
       
        
        <script src="" async defer></script>
    </body>
</html>