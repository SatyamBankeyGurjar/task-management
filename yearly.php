<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylefortable.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .btn {
          display: inline-block;
          padding: 6px 10px;
          background-color: #333;
          color: #fff;
          border: none;
          border-radius: 4px;
          font-size: 14px;
          cursor: pointer;
        }
        .filter_list{
          padding: 5px;
          font-size: 16px;
          border: 1px solid rgb(169, 166, 166);
          border-radius: 4px;
          background: transparent; 
        }
    </style>
    <title>Task Management</title>
</head>

<body >

<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Get the current year
$currentYear = date('Y');

// Fetch data from the table for the current year
$sql = "SELECT * FROM `tasks` WHERE YEAR(`date`) = '$currentYear'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Filter functionality
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
if ($filter) {
    $sql .= " WHERE status = '$filter'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Close the database connection
mysqli_close($conn);
?>

    <main class="table">
    
<section class="table__nav">
       <div class="nav_button">
       <a href="index.php">Home</a>
       </div>
       <div class="nav_button">
        <!-- <a href="add_task.php">Add Task</a> -->
        <a href="index.php">Back</a>
       </div>
</section>
<section class="table__header">
            <h1>All Tasks</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="search.png" alt="Search">
            </div>
            <form method="GET" class="">
                <select name="filter" id="filter" class="filter_list">
                    <option value="">All</option>
                    <option value="completed" <?php if ($filter === 'completed') echo 'selected'; ?>>Completed</option>
                    <option value="pending" <?php if ($filter === 'pending') echo 'selected'; ?>>Pending</option>
                    <option value="in process" <?php if ($filter === 'inprocess') echo 'selected'; ?>>In Process</option>
                </select>
                <button type="submit" class="btn">Status</button>
            </form>
        </section>

<section class="table__body">
<table>
    <thead>
        <tr>
            <th scope="col" col-index=1 type="number"> S no. <span class="icon-arrow">&UpArrow;</span></th>
            <th scope="col" col-index=2 type="string"> Name <span class="icon-arrow">&UpArrow;</span></th>
            <th scope="col" col-index=3 type="string"> Task <span class="icon-arrow">&UpArrow;</span></th>
            <th scope="col" col-index=4> Date <span class="icon-arrow">&UpArrow;</span></th>
            <th scope="col" col-index=5 type="string"> Status <span class="icon-arrow">&UpArrow;</span></th>
            <th scope="col"> Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['task']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="icons">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="iconsdelete">
                                <i class="fa-solid fa-trash fs-7 ms-1"></i>
                            </a>
                        </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</section>
</main>

<script src="script.js"></script>

</body>

</html>