
<?php
include 'connect.php';
      $sql = "select * from crud";
      $result = $conn->query($sql);
      ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <div class="container">
        <button class="btn">
            <a href="add_new.php" class="text-light">Add student</a>
        </button>
       <table class="table">
        <thead class="table-head">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
            
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td class = "edit">
                 <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
            </tr>
            <?php
            }
        }
          ?>
        </tbody>
       </table>
    </div>
        
        <script src="" async defer></script>
    </body>
</html>