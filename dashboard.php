<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danau Bogor Raya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --bg-main: #292929;
            --text-main: #ffffff;
            --color-persembahan: #98d8aa;
            --color-home: #A5c6e9;
            --color-sunday: #f7d68c;
            --color-info: #efefee;
            --color-social: #9ca5f7;
            --color-about: #f69c73;
            --color-cool: #f7d68c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            background-color: var(--bg-main);
            color: var(--text-main);
            overflow: hidden;
            font-size: 16px;
        }

        .main-container {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            padding: 2vh 2vw;
            gap: 1vh;
        }

        .main-content {
            display: flex;
            gap: 2vw;
            height: calc(100vh - 4vh - 3vh); /* Kurangi footer height */
        }

        .menu-section {
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding-top: 1vh;
        }

        .nav-pills .nav-link {
            font-size: 1.8vw;
            font-weight: 700;
            padding: 1.5vh 1.5vw;
            border-radius: 1.2vw;
            text-transform: uppercase;
            letter-spacing: 0.3vw;
            transition: all 0.3s ease;
            border: none;
            text-align: left;
            cursor: pointer;
            margin-bottom: 1.2vh;
        }

        .nav-pills .nav-link:last-child {
            margin-bottom: 0;
        }

        .nav-pills .nav-link:hover {
            transform: scale(1.02);
            box-shadow: 0 0.5vh 1.5vw rgba(0,0,0,0.4);
        }

        .nav-pills .nav-link.active {
            transform: scale(1.02);
            box-shadow: 0 0.5vh 1.5vw rgba(0,0,0,0.5);
        }

        .menu-home {
            background-color: var(--color-home);
            color: #000000;
        }

        .menu-sunday {
            background-color: var(--color-sunday);
            color: #000000;
        }

        .menu-info {
            background-color: var(--color-info);
            color: #000000;
        }

        .menu-social {
            background-color: var(--color-social);
            color: #000000;
        }

        .menu-about {
            background-color: var(--color-about);
            color: #000000;
        }

        .menu-cool {
            background-color: var(--color-cool);
            color: #000000;
        }
        
        .menu-persembahan {
            background-color: var(--color-persembahan);
            color: #000000;
        }

        .content-section {
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tab-pane {
            width: 100%;
        }

        .tab-pane.fade {
            transition: opacity 0.3s ease;
        }

        .tab-pane.show.active {
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(2vh); }
            to { opacity: 1; transform: translateY(0); }
        }

        .content-card {
            background: #3a3a3a;
            border-radius: 2vw;
            padding: 4vh 3vw;
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .content-card h2 {
            font-size: 4vw;
            font-weight: 800;
            margin-bottom: 2vh;
            color: #ffffff;
        }

        .content-card p {
            font-size: 1.8vw;
            color: #bbbbbb;
            line-height: 1.5;
        }

        .content-icon {
            font-size: 12vw;
            margin-bottom: 3vh;
        }

        /* Footer Style */
        .main-footer {
            height: 3vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .footer-text {
            font-size: 2vw;
            color: #888888;
            font-weight: 500;
            letter-spacing: 0.2vw;
        }

    </style>
</head>

<body>

    <div class="main-container">
        
        <!-- Konten Utama -->
        <div class="main-content">
            
            <!-- Bagian Kiri - Menu -->
            <div class="menu-section">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    
                    <button class="nav-link active menu-home" id="menu-home-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-home" type="button" role="tab" aria-selected="true">
                        <i class="bi bi-cross"></i>&nbsp;&nbsp; Gembala Jemaat
                    </button>
                    
                    <button class="nav-link menu-sunday" id="menu-sunday-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-sunday" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-calendar-event me-2"></i> Sunday Service
                    </button>
                    
                    <button class="nav-link menu-persembahan" id="menu-persembahan-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-persembahan" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-envelope-paper-heart"></i>&nbsp; Giving
                    </button>
                    
                    <button class="nav-link menu-info" id="menu-info-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-info" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-info-circle me-2"></i> Information
                    </button>
                    
                    <button class="nav-link menu-social" id="menu-social-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-social" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-people me-2"></i> Social Media
                    </button>
                    
                     <button class="nav-link menu-cool" id="menu-cool-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-cool" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-heart-fill me-2"></i> COOL
                    </button>
                    
                    <button class="nav-link menu-about" id="menu-about-tab" data-bs-toggle="pill" 
                        data-bs-target="#content-about" type="button" role="tab" aria-selected="false">
                        <i class="bi bi-person-badge me-2"></i> About Us
                    </button>
                    
                   
                    
                </div>
            </div>

            <!-- Bagian Kanan - Konten -->
            <div class="content-section">
                <div class="tab-content" id="v-pills-tabContent">
                    
                    <!-- Home Content -->
                    <?php include 'partials/home.php'; ?>
                    
                    <!-- Sunday Service Content -->
                    <?php include 'partials/service.php'; ?>
                    
                    
                    <?php include 'partials/persembahan.php'; ?>
                    
                    <!-- Information Content -->
                    <?php include 'partials/information.php'; ?>
                    
                    <!-- Social Media Content -->
                    <?php include 'partials/sosmed.php'; ?>
                    
                    <!-- About Us Content -->
                    <?php include 'partials/about.php'; ?>
                    
                    <!-- COOL Content -->
                    <?php include 'partials/cool.php'; ?>
                    
                </div>
            </div>
            
        </div>
        
        <!-- Footer -->
        <div class="main-footer">
            <span class="footer-text">R7 PRODUCTION</span>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
        <script>
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
</body>

</html>