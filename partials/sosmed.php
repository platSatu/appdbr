<div class="tab-pane fade" id="content-social" role="tabpanel" aria-labelledby="menu-social-tab">

    <div class="social-container">

        <!-- Judul -->
        <div class="social-title">
            <div class="title-main">GBI DANAU BOGOR RAYA</div>
            <div class="title-sub">Social Media</div>
        </div>

        <!-- Semua Jadi Satu -->
        <div class="social-content">
            <div class="content-box">
                <div class="content-text">
                    Selamat datang di media sosial gereja kami. Tempat untuk berbagi kasih Tuhan, mendapatkan information seputar ibadah dan kegiatan gereja, serta menemukan inspirasi rohani untuk kehidupan sehari-hari. Mari bertumbuh bersama dalam <strong>iman, pengharapan, dan kasih</strong>.
                </div>
                
                <!-- Daftar Media Sosial -->
                <div class="social-list">
                    <div class="social-item">
                        <span class="social-icon">🌐</span>
                        <span class="social-label">Website</span>
                        <span class="social-value img-fluid"><img src="asset/web.jpeg" width="150"/></span>
                    </div>
                    <div class="social-item">
                        <span class="social-icon">📷</span>
                        <span class="social-label">Instagram</span>
                        <span class="social-value"><img src="asset/instagram.jpeg" width="150"/></span>
                    </div>
                    <div class="social-item">
                        <span class="social-icon">▶️</span>
                        <span class="social-label">Youtube</span>
                        <span class="social-value"><img src="asset/youtube.jpeg" width="150"/></span>
                    </div>
                    <div class="social-item">
                        <span class="social-icon">💬</span>
                        <span class="social-label">WhatsApp</span>
                        <span class="social-value"><img src="asset/wahtsapp.jpeg" width="150"/></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        /* Container - Kuning Sama dengan Home */
        .social-container {
            height: 90vh;
            background: #f7d68c;
            border-radius: 2vw;
            padding: 2vh 2vw;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        /* Judul - Hitam */
        .social-title {
            text-align: center;
            margin-bottom: 1.5vh;
        }

        .title-main {
            font-size: 4vw;
            font-weight: 900;
            font-style: italic;
            color: #000000;
        }

        .title-sub {
            font-size: 2.5vw;
            font-weight: 700;
            color: #000000;
        }

        /* Content */
        .social-content {
            flex: 1;
            display: flex;
            align-items: start;
        }

        .content-box {
            width: 100%;
            background: rgba(0, 0, 0, 0.1);
            border-left: 0.6vw solid #000000;
            border-radius: 0 1.5vw 1.5vw 0;
            padding: 2vh 2vw;
        }

        /* Text - Hitam */
        .content-text {
            font-size: 1.8vw;
            color: #000000;
            line-height: 1.7;
            text-align: justify;
            margin-bottom: 1.5vh;
        }

        .content-text strong {
            color: #000000;
            font-weight: 800;
        }

        /* Social List */
        .social-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1vh;
        }

        .social-item {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 0.8vw;
            padding: 1vh 1.2vw;
            gap: 1vw;
        }

        .social-icon {
            font-size: 2vw;
        }

        .social-label {
            font-size: 1.4vw;
            font-weight: 600;
            color: #000000;
            width: 30%;
        }

        .social-value {
            font-size: 1.4vw;
            font-weight: 700;
            color: #000000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .title-main { font-size: 5vw; }
            .title-sub { font-size: 3vw; }
            .content-text { font-size: 2.2vw; }
            .social-list { grid-template-columns: 1fr; }
            .social-icon { font-size: 2.5vw; }
            .social-label { font-size: 1.8vw; }
            .social-value { font-size: 1.8vw; }
        }
    </style>

</div>