<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $taskId = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Load existing tasks
    $tasks = [];
    if (file_exists('data/tasks.json')) {
        $json = file_get_contents('data/tasks.json');
        $tasks = json_decode($json, true);
    }

    // Update the task
    if (isset($tasks[$taskId])) {
        $tasks[$taskId]['title'] = $title;
        $tasks[$taskId]['description'] = $description;

        // Save the updated tasks back to the JSON file
        file_put_contents('data/tasks.json', json_encode($tasks));

        echo "Task updated successfully!";
        header('Location: index.php');
    } else {
        echo "Task not found!";
    }
}
?>
