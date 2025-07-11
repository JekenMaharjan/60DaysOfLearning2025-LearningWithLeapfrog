<!-- TO DO LIST  -->

<?php
// File to store tasks
$file = 'tasks.txt';

// Add a task
if (isset($_POST['task']) && $_POST['task'] !== '') {
    $task = trim($_POST['task']);
    file_put_contents($file, $task . PHP_EOL, FILE_APPEND);
}

// Delete a task
if (isset($_GET['delete'])) {
    $tasks = file($file, FILE_IGNORE_NEW_LINES);
    unset($tasks[$_GET['delete']]);
    file_put_contents($file, implode(PHP_EOL, $tasks));
}

// Read tasks
$tasks = file($file, FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple To-Do List</title>
    <style>
        body { font-family: Arial; padding: 30px; background: #f7f7f7; }
        h2 { color: #444; }
        form input[type="text"] { padding: 8px; width: 250px; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 8px 0; }
        a { color: red; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>

    <h2>📝 Simple PHP To-Do List</h2>

    <form method="post">
        <input type="text" name="task" placeholder="Enter a task..." required />
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php foreach ($tasks as $index => $task): ?>
            <li>
                <?= htmlspecialchars($task) ?>
                <a href="?delete=<?= $index ?>" onclick="return confirm('Delete this task?')">❌</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
