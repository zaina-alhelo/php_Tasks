<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<h2>Edit Task </h2>
<form action="edit.php?id=<?php echo $id;?>" method="post">
    <label for="taskName">Task name:</label><br>
    <input type="text" name="taskName" value="<?php echo $row['title'];?>" required><br>
    <label for="Description">Description:</label><br>
    <textarea name="Description" required><?php echo $row['description'];?></textarea><br>
    <label for="due">Due Date:</label><br>
    <input type="date" name="date" value="<?php echo $row['due_date'];?>" required><br>
    <label for="status">Status:</label><br>
    <select name="status" required>
        <option value="TO DO" <?php if ($row['status'] == 'TO DO') echo 'selected'; ?>>TO DO</option>
        <option value="IN PROGRESS" <?php if ($row['status'] == 'IN PROGRESS') echo 'selected'; ?>>IN PROGRESS</option>
        <option value="DONE" <?php if ($row['status'] == 'DONE') echo 'selected'; ?>>DONE</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['taskName'];
    $Description = $_POST['Description'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $query = "UPDATE tasks SET `title`='$taskName', `description`='$Description', `due_date`='$date', `status`='$status' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
