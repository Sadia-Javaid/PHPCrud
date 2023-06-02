<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    

$sql = "insert into `crud`(id,name, email, mobile)
 VALUES (NULL,'$name','$email','$mobile')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
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
            <h1>Student Record</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label><br>
                    <input type="text" class="form-control" placeholder = "Enter Your Name" name = "name">
                </div>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="text" class="form-control" placeholder = "Enter Your Email" name = "email">
                </div>
                <div class="form-group">
                    <label>Phone number</label><br>
                    <input type="number" class="form-control" placeholder = "Enter Your Phone Number" name = "mobile">
                </div>
                <button class="btn" name="submit" type="submit">
                    <a href="dashboard.php" class="text-light">Submit</a>
                </button>

            </form>
        </div>
       
        
        <script src="" async defer></script>
    </body>
</html>