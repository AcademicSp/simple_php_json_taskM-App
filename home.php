<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTodo App - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Background and styling */
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Animation for the entire section */
        .home-section {
            text-align: center;
            animation: fadeInUp 1s ease-in-out;
        }

        /* Styling the heading */
        .home-section h1 {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-in-out;
        }

        /* Styling the task buttons */
        .task-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            animation: bounceIn 1.5s ease-in-out;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1.2rem;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        /* Keyframe animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.9);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container home-section">
        <h1>Welcome to MyTodo App</h1>
        <div class="task-buttons">
            <a href="index.php" class="btn btn-info btn-lg">
                <i class="fas fa-tasks icon"></i> View Current Tasks
            </a>
            <a href="add_task.php" class="btn btn-success btn-lg">
                <i class="fas fa-plus-circle icon"></i> Add New Task
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome JS for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
