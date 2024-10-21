<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTodo App - Get Started</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for additional icons (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS for styling and animations -->
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .starter-section {
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Image bounce animation */
        .starter-section img {
            width: 200px;
            border-radius: 50%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Fade-in animation for the section */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Button styling */
        .btn-primary {
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 123, 255, 0.4);
        }

        .starter-section h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-top: 20px;
            color: #fff;
        }

        .starter-section p {
            font-size: 1.5rem;
            color: #fff;
        }

    </style>
</head>
<body>
    <div class="starter-section">
        <div>
            <img src="./img/StockCake-Holding pink clipboard_1729508132.jpg" alt="MyTodo App Logo">
            <h1 class="mt-4">Welcome to MyTodo App</h1>
            <p class="lead">Manage your tasks effortlessly!</p>
            <a href="home.php" class="btn btn-primary btn-lg mt-3">
                <i class="fas fa-arrow-right"></i> Get Started
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
