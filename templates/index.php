
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO App</title>
</head>

<body>
<h1>To Do List</h1>

<h2>Add Task</h2>
<form method="post" action="/saveTask">
    <label for="item">Task:</label>
    <input type="text" name="item" id="item">
    <button name="btnAddItem" type="submit">Add</button>
</form>
<br>

<h2>Tasks To Do</h2>
    <?php
    echo '<ol>';
    foreach($tasks as $task) {
//        echo '<li>' . $task["item"] . '</li>';
//        echo '<a href="/markAsComplete/' . $task["id"] . '">Completed</a>';
//show task in a list, with a link to Complete each task
        echo '<li>' . $task["item"] . ' &nbsp <a href="/markAsComplete/' . $task["id"] . '">Completed</a> </li>';
    }
    echo '</ol>';
    ?>

<br><br>
<h2><a href="/completedTasks">View Completed Tasks</a></h2>

</body>
</html>