<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add new task</h2>
    <form action="add_task.php" method="post">
        <label for="taskName">Task name:</label><br>
        <input type="text" name="taskName" required><br>
        <label for="Description">Description:</label><br>
        <textarea name="Description" required></textarea><br>
        <label for="due">Due Date:</label><br>
        <input type="date" name="date" required><br>
        <label for="status">Status:</label><br>
        <select name="status" required>
            <option value="TO DO">TO DO</option>
            <option value="IN PROGRESS">IN PROGRESS</option>
            <option value="DONE">DONE</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taskName = $_POST['taskName'];
        $Description = $_POST['Description'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        $query = "INSERT INTO tasks (`title`, `description`, `due_date`, `status`) VALUES ('$taskName', '$Description', '$date', '$status')";
        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    ?>
</body>
</html>
