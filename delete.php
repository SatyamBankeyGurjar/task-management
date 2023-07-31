<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "db_connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM `tasks` WHERE id =$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: all_tasks.php?msg=Task Successfully Deleted");

}
else{
    echo "Failed to delete task: " . mysqli_error($conn);
}
?>
<script>
    window.alert("Data Deleted");
</script>
</body>
</html>

