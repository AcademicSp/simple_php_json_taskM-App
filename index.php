<?php
$tasks = [];
if (file_exists('data/tasks.json')) {
    $json = file_get_contents('data/tasks.json');
    $tasks = json_decode($json, true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyToDo App - Task List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            color: #fff;
        }
        h1 {
            animation: fadeInDown 1s ease-in-out;
        }
        .card {
            animation: fadeInUp 1.5s ease-in-out;
        }
        .btn {
            transition: transform 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-50px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .home-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Your To-Do List</h1>

        <!-- Home Button -->
        <div class="home-btn">
            <a href="home.php" class="btn btn-light">
                <i class="bi bi-house-door"></i> Home
            </a>
        </div>

        <!-- Task List -->
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="h4">Task List</h2>
            </div>
            <div class="card-body bg-light text-dark">
                <?php if (!empty($tasks)) : ?>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $index => $task) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($task['title']); ?></td>
                                    <td><?= htmlspecialchars($task['description']); ?></td>
                                    <td>
                                        <a href="edit_task.php?id=<?= $index; ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="delete_task.php?id=<?= $index; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert alert-info text-center">No tasks found. Add a new task below!</div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="text-center mt-5">
            <a href="add_task.php" class="btn btn-success btn-lg shadow-lg">+ Add New Task</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons (optional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</body>
</html>
