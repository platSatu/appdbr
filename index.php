<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI Danau Bogor Raya</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        /* Screen Lock Container - Fullscreen */
        .lock-screen {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            padding: 12vh 2vw;
            position: relative;
            
          
            background: url('asset/cover.jpeg') no-repeat center center fixed; 
            background-size: cover;
        }

        /* --- Animasi --- */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 50px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

       
        @keyframes swayRight {
            0% { transform: translateX(0) rotate(0deg); }
            25% { transform: translateX(10px) rotate(10deg); }
            50% { transform: translateX(0) rotate(0deg); }
            75% { transform: translateX(10px) rotate(10deg); }
            100% { transform: translateX(0) rotate(0deg); }
        }

       
        .enter-btn {
            font-size: 3.5vw; 
            font-weight: 700;
            padding: 2.5vh 10vw; 
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.3vw;
            
            /* Warna Tombol */
            background: #f69c73;
            color: #ffffff;
            border: 4px solid #ffffff;
            cursor: pointer;
            
            /* Animasi Masuk */
            opacity: 0;
            animation: fadeInUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards;
            
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            
        }

        .enter-btn:hover {
            background: #ffffff;
            color: #f69c73;
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(0,0,0,0.6);
            animation: pulse 2s infinite;
        }

        .enter-btn:active {
            transform: scale(0.95);
        }

       
        .enter-btn i {
            font-size: 2.5vw;
            margin-left: 1vw;
            display: inline-block;
            
           
            animation: swayRight 1s ease-in-out infinite;
        }

    </style>
</head>

<body>

    <!-- Screen Lock -->
    <div class="lock-screen">
        
        <!-- Tombol ENTER (Teks Welcome sudah dihapus) -->
        <button class="enter-btn" onclick="enterDashboard()">
            ENTER <i class="bi bi-arrow-right"></i>
        </button>

    </div>

    <script>
        function enterDashboard() {
            window.location.href = 'dashboard.php';
        }
        
        var idleTime = 60000; // 1 menit (60000 milidetik)
        var idleTimer;

        function resetTimer() {
            clearTimeout(idleTimer);
            idleTimer = setTimeout(function() {
                window.location.href = 'index.php';
            }, idleTime);
        }

        document.onmousemove = resetTimer;
        document.onkeypress = resetTimer;
        document.onclick = resetTimer;
        document.onscroll = resetTimer;

        resetTimer();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>