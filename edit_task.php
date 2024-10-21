<?php
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    // Load tasks from the JSON file
    $tasks = [];
    if (file_exists('data/tasks.json')) {
        $json = file_get_contents('data/tasks.json');
        $tasks = json_decode($json, true);
    }

    // Check if the task exists
    if (isset($tasks[$taskId])) {
        $task = $tasks[$taskId];
    } else {
        echo "<script>alert('Task not found!'); window.location.href='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('No task ID provided!'); window.location.href='index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e2e2e2, #ffffff);
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Edit Task</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="update_task.php">
                            <input type="hidden" name="id" value="<?php echo $taskId; ?>">

                            <div class="mb-3">
                                <label for="title" class="form-label">Task Title:</label>
                                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($task['title']); ?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Task Description:</label>
                                <textarea id="description" name="description" class="form-control" rows="4" required><?php echo htmlspecialchars($task['description']); ?></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Update Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
