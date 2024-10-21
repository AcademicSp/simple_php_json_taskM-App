<?php
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    // Load existing tasks
    $tasks = [];
    if (file_exists('data/tasks.json')) {
        $json = file_get_contents('data/tasks.json');
        $tasks = json_decode($json, true);
    }

    // Delete the task if confirmed
    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] === 'yes') {
        if (isset($tasks[$taskId])) {
            unset($tasks[$taskId]);

            // Save the updated tasks back to the JSON file
            file_put_contents('data/tasks.json', json_encode(array_values($tasks))); // Re-index the array

            $message = "Your task has been successfully deleted.";
            $status = "success";
        } else {
            $message = "Task not found!";
            $status = "error";
        }
    } else {
        // Show the confirmation message
        $message = "Are you sure you want to delete this task?";
        $status = "warning";
        $showConfirmation = true; // Flag to show the confirmation form
    }
} else {
    $message = "No task ID provided!";
    $status = "error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Deletion</title>
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
        .notification {
            display: none;
            margin-top: 100px;
            animation: slideIn 0.5s forwards;
        }
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .dustbin {
            width: 60px; /* Set the width of the dustbin */
            height: 60px; /* Set the height of the dustbin */
            position: relative;
            margin: 0 auto;
            display: none; /* Initially hidden */
            background-image: url('./img//bin.jpg'); /* External image source */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            animation: none; /* Initial state */
        }
        @keyframes throwInDustbin {
            0% { transform: translateY(0); opacity: 1; }
            50% { transform: translateY(-30px); opacity: 0.5; }
            100% { transform: translateY(20px); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="notification alert alert-<?php echo $status === 'success' ? 'success' : ($status === 'error' ? 'danger' : 'warning'); ?> text-center" role="alert">
                    <h4 class="alert-heading"><?php echo $status === 'success' ? 'Task Deleted!' : ucfirst($status) . '!'; ?></h4>
                    <p><?php echo $message; ?></p>
                    <hr>
                    <?php if ($status === 'success' || $status === 'error'): ?>
                        <a href="index.php" class="btn btn-primary">Go back to Task List</a>
                    <?php else: ?>
                        <form method="post" action="">
                            <input type="hidden" name="confirm_delete" value="yes">
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Confirm Delete</button>
                        </form>
                    <?php endif; ?>
                </div>
                <div class="dustbin" id="dustbin"></div> <!-- Dustbin animation -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Show the notification with animation
        document.addEventListener("DOMContentLoaded", function() {
            const notification = document.querySelector('.notification');
            notification.style.display = 'block'; // Show the notification

            // Handle delete confirmation animation
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            const dustbin = document.getElementById('dustbin');

            confirmDeleteBtn.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent form submission
                dustbin.style.display = 'block'; // Show the dustbin
                dustbin.style.animation = 'throwInDustbin 0.5s forwards'; // Add animation

                setTimeout(() => {
                    document.querySelector('form').submit(); // Submit the form after the animation
                }, 500); // Adjust timeout to match animation duration
            });
        });
    </script>
</body>
</html>
