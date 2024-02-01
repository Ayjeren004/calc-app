<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Currency Converter</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rBSKmYDk99WvlA2QMgcA5q1AAvqayzEUEwFvAx15XRt89+UQzzLX+OC79Be5z/DK2" crossorigin="anonymous">
    <!-- Custom styles -->
    <style>
        body {
            background-image: url('your-background-image-url.jpg'); /* Replace with your background image URL */
            background-size: cover;
            color: #fff; /* Adjust text color for better visibility on the background */
            font-family: 'Arial', sans-serif;
            margin: 0; /* Remove default body margin */
            height: 100vh; /* Set the body height to 100% of the viewport height */
            overflow: hidden; /* Prevent horizontal scrollbar due to negative margins */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            width: 100%;
            max-width: 400px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background for the card */
            padding: 20px;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS and Popper.js scripts (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyW+k9Lh5Jl+CD4BXcL8dgOFkww1bA2AId" crossorigin="anonymous"></script>
</body>
</html>
