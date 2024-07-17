

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <a href="add_task.php">Add Task</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>
        <?php
        include "connection.php";
          $query = "SELECT * FROM tasks";
            $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>{$row['due_date']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
