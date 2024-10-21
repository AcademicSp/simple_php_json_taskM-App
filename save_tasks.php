<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $tasks = [];
    if (file_exists('data/tasks.json')) {
        $json = file_get_contents('data/tasks.json');
        $tasks = json_decode($json, true);
    }

    $tasks[] = ['title' => $title, 'description' => $description];

    file_put_contents('data/tasks.json', json_encode($tasks));

    header('Location: index.php');
    exit();
}
