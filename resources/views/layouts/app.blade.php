<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ApexRate | Real-Time Currency Exchange Dashboard</title>
    
    <!-- Google Fonts: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom Modern Premium CSS -->
    <style>
        :root {
            --bg-gradient: linear-gradient(135deg, #09090e 0%, #111122 100%);
            --glass-bg: rgba(255, 255, 255, 0.04);
            --glass-border: rgba(255, 255, 255, 0.08);
            --glass-focus-border: rgba(139, 92, 246, 0.4);
            --accent-primary: #8b5cf6; /* Violet */
            --accent-secondary: #06b6d4; /* Cyan */
            --accent-gradient: linear-gradient(135deg, #8b5cf6 0%, #06b6d4 100%);
            --text-main: #f3f4f6;
            --text-muted: #9ca3af;
        }

        body {
            background: var(--bg-gradient);
            color: var(--text-main);
            font-family: 'Outfit', sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Abstract ambient background glows */
        .glow-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            z-index: 0;
            opacity: 0.15;
            pointer-events: none;
        }
        .glow-1 {
            width: 400px;
            height: 400px;
            background: var(--accent-primary);
            top: -10%;
            left: -10%;
        }
        .glow-2 {
            width: 500px;
            height: 500px;
            background: var(--accent-secondary);
            bottom: -15%;
            right: -10%;
        }

        .container {
            z-index: 1;
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Decorative background glow animations -->
    <div class="glow-circle glow-1"></div>
    <div class="glow-circle glow-2"></div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

