<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a Task</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f3f4f6, #e2e2e2);
      animation: fadeIn 1s ease-in;
      overflow: hidden; /* Hide overflow for animation */
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .card {
      border-radius: 15px;
      overflow: hidden; /* Round corners */
    }
    .tick {
      display: none;
      margin-top: 20px;
      font-size: 50px;
      color: #28a745; /* Success color */
      animation: scaleUp 0.5s forwards;
    }
    @keyframes scaleUp {
      0% { transform: scale(0); }
      100% { transform: scale(1); }
    }
    .success-message {
      display: none;
      text-align: center;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white text-center">
            <h2>Add a Task</h2>
          </div>
          <div class="card-body">
            <!-- Add Task Form -->
            <form id="taskForm" action="save_tasks.php" method="post">
              <div class="mb-3">
                <label for="title" class="form-label">Task Title:</label>
                <input type="text" name="title" id="title" class="form-control" required placeholder="Enter task title">
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Task Description:</label>
                <textarea name="description" id="description" class="form-control" required placeholder="Enter task description"></textarea>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success btn-lg">Add Task</button>
              </div>
            </form>
            <div class="success-message">
              <span class="tick">✓</span>
              <h4>Task Added Successfully!</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    document.getElementById('taskForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission
      
      // Show success message with tick animation
      const successMessage = document.querySelector('.success-message');
      const tick = document.querySelector('.tick');
      tick.style.display = 'block'; // Show tick
      successMessage.style.display = 'block'; // Show success message

      // After a delay, redirect to index.php
      setTimeout(() => {
        this.submit(); // Submit the form after the animation
      }, 1500); // Adjust delay as needed
    });
  </script>
</body>
</html>
