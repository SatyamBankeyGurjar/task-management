<?php
include "db_connect.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
  $name = $_POST['fullname'];
  $task = $_POST['task'];
  $date = $_POST['date'];
  $status = $_POST['status'];

  $sql = "INSERT INTO `tasks` (`id`,`name`, `task`, `date`, `status`)
  VALUES(NULL,'$name','$task','$date','$status')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: all_tasks.php?msg=New task created successfully");
  } else {
    echo "Failed:..." . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylefortable.css" />
    <title>Task Management</title>

    <style>

        .container {
          max-width: 500px;
          margin: 20px auto;
          padding: 20px;
        }
        
        .form-group {
          margin-bottom: 20px;
          margin-right: 20px;
        }
        
        label {
          display: block;
          margin-bottom: px;
        }
        
        input[type="text"],
        select,
        input[type="date"] {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          border: 1px solid rgb(169, 166, 166);
          border-radius: 4px;
          background: transparent;
          
        }
        
        .btn-container {
          text-align: right;
        }
        
        .btn {
          display: inline-block;
          padding: 10px 12px;
          background-color: #333;
          color: #fff;
          border: none;
          border-radius: 4px;
          font-size: 14px;
          cursor: pointer;
        }
        
        .btn.cancel {
          background-color: #333;
          margin-right: 10px;
          text-decoration: none;
          padding: 10px 12px;
        }
      </style>
</head>

<body >

    <main class="table">
    
<section class="table__nav">
       <div class="nav_button">
        <h1>Update Task</h1>
       </div>
       <div class="nav_button">
        <a href="index.php">Home</a>
        <a href="index.php">Back</a>
       </div>
</section>

<section class="">

<?php
    $sql = "SELECT * FROM `tasks` WHERE id= $id limit 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>  

    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control w-100" name="fullname" value="<?php echo $row['name'] ?> ">
        </div>
          <div class="form-group">
            <label for="task">Task:</label>
            <input type="text" class="form-control" name="task" value="<?php echo $row['task'] ?>">
        </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
        </div>
          <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-select" id="inputGroupSelect01" name="status" value="<?php echo $row['status'] ?>">
                <option selected name="status">Choose</option>
                <option value="Completed" name="status" id="Completed" <?php echo($row['status']=='Completed')?"checked":""; ?>>Completed</option>
                <option value="In Process" id="In Process" name="status" <?php echo($row['status']=='In Process')?"checked":""; ?>>In Process</option>
                <option value="Pending" id="Pending" name="status" <?php echo($row['status']=='Pending')?"checked":""; ?>>Pending</option>
            </select>
          </div>
          <div class="btn-container">
            <button type="submit" name="submit" class="btn">Update</button>
            <a href="all_tasks.php" class="btn cancel">Cancel</a>
          </div>
        </form>
      </div>
</section>
</main>

<script src="script.js"></script>

</body>

</html>