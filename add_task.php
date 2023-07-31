<?php
include "db_connect.php";

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
          max-width: 600px;
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

        input:hover {
            /* background: #eee; */
        }
        
        .btn-container {
          text-align: right;
        }
        
        .btn {
          display: inline-block;
          padding: 10px 20px;
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
        <h1>Add Task</h1>
       </div>
       <div class="nav_button">
        <a href="index.php">Home</a>
        <a href="all_tasks.php">Back</a>
       </div>
</section>

<section class="">
    <div  class="container" >
        <form action="#" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="fullname" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label for="task">Task:</label>
            <input type="text" name="task" placeholder="Enter task" required>
          </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" id="inputGroupSelect01" name="status">
            <option selected>Choose</option>
                <option value="completed">Completed</option>
                <option value="in process">In Process</option>
                <option value="pending">Pending</option>
            </select>
          </div>
          <div class="btn-container">
            <button type="submit" name="submit" class="btn">Add</button>
            <a href="all_tasks.php" class="btn cancel">Cancel</a>
          </div>
        </form>
      </div>
</section>
</main>

<script src="script.js"></script>

</body>

</html>