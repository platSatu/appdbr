<div class="tab-pane fade show active" id="content-home" role="tabpanel" aria-labelledby="menu-home-tab">
    
    <div class="profile-container">
        
        <!-- Foto Column -->
        <div class="profile-photo-col">
            
            <!-- Foto dengan Animasi - LEBIH BESAR -->
            <div class="photo-frame-wrapper">
                <div class="photo-frame">
                    <img src="asset/profile.png" alt="Foto Gembala">
                    
                    <!-- Nama OVERLAY - di depan foto -->
                    <div class="profile-name-overlay">
                        <div class="name-main">Pdt. Sutadi Rusli</div>
                        <div class="name-main">Pdp. Fanny Rusli</div>
                        <div class="name-subtitle">Gembala Jemaat<br> GBI Jemaat Induk Danau Bogor Raya</div>
                    </div>
                </div>
            </div>
            
            <!-- Spacer -->
            <div class="profile-spacer"></div>
        </div>

        <!-- Text di Kanan -->
        <div class="profile-text-col">
            
            <div class="welcome-text">
                <strong>Shalom</strong><br> Dengan penuh sukacita dan rasa syukur kepada Tuhan, saya mengucapkan Selamat Ulang Tahun ke-31 GBI Danau Bogor Raya.
            </div>
            
            <div class="welcome-text mt-text">
                Tiga puluh satu tahun adalah bukti nyata kasih karunia dan kesetiaan Tuhan yang senantiasa menyertai perjalanan gereja ini. Melalui berbagai musim kehidupan, Tuhan telah memimpin, memelihara, dan membawa kita bertumbuh menjadi gereja yang berdampak bagi banyak orang.
            </div>
            
            <div class="welcome-text mt-text">
                Melalui tema <strong>“SHIFTING”</strong>, kita diingatkan bahwa Tuhan sedang membawa gereja-Nya melangkah ke musim yang baru. Ini adalah waktu untuk bergerak maju, memperbarui visi, memperkuat iman, dan semakin berani menggenapi panggilan Tuhan.
            </div>
            <div class="welcome-text mt-text">
                Terima kasih kepada seluruh jemaat dan pengerja yang telah setia menjadi bagian dari karya Tuhan selama 31 tahun ini. Kiranya GBI Danau Bogor Raya terus bertumbuh, memenangkan jiwa, dan menjadi berkat bagi generasi-generasi yang akan datang.
            </div>
            
            <!--<div class="verse-ref">-->
            <!--   Selamat Ulang Tahun ke-31 GBI Danau Bogor Raya. Mari bersama mengalami <strong>“SHIFTING”</strong> menuju rencana Tuhan yang lebih besar dan lebih mulia.-->
            <!--</div>-->
            
            <!-- Closing Text with Quote -->
            <div class="closing-text">
                <div class="quote-box">
                    <div class="quote-mark-open">"</div>
                    <div class="quote-content verse-ref">
                          Selamat Ulang Tahun ke-31 GBI Danau Bogor Raya. Mari bersama mengalami <strong>“SHIFTING”</strong> menuju rencana Tuhan yang lebih besar dan lebih mulia.
                    </div>
                    <div class="quote-mark-close">"</div>
                </div>
                <div class="quote-signature">- <em>Tuhan Yesus memberkati</em></div>
            </div>

        </div>
        
    </div>

    <style>
        /* Container - Background Kuning Pastel */
        .profile-container {
            height: 90vh;
            background: #f7e784;
            border-radius: 2vw;
            display: flex;
            flex-direction: row;
            overflow: auto;
            padding: 1vh 2vw;
            gap: 2vw;
        }

        /* Foto Column - Kiri - LEBIH BESAR */
        .profile-photo-col {
            width: 42%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding-top: 1vh;
        }

        /* Foto Wrapper dengan Animasi */
        .photo-frame-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: gentleFloat 4s ease-in-out infinite;
        }

        .photo-frame {
            width: 100%;
            aspect-ratio: 2/4;
            border-radius: 2vw;
            overflow: hidden;
            position: relative;
            border: 1vw solid #f7e784;
            box-shadow: 
                1vw 1vw 3vw rgba(0,0,0,0.4),
                0 0 4vw rgba(0,0,0,0.3);
            
            transition: transform 0.3s ease;
        }

        /* Animasi gentle float */
        @keyframes gentleFloat {
            0%, 100% { 
                transform: translateY(0px); 
            }
            50% { 
                transform: translateY(-12px); 
            }
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
        }

        /* Nama OVERLAY - di depan foto (bottom) */
        .profile-name-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.95) 50%, rgba(0,0,0,0.8) 100%);
            padding: 1.5vh 2vw;
        }

        .name-main {
            font-size: 2.2vw;
            font-weight: 900;
            color: #ffffff;
            line-height: 1.1;
            text-shadow: 0.1vw 0.1vw 0.2vw rgba(0,0,0,0.5);
        }

        .name-title {
            font-size: 1.9vw;
            font-weight: 700;
            color: #f7d68c;
            margin-top: 0.4vh;
        }

        .name-subtitle {
            font-size: 1.4vw;
            font-weight: 500;
            color: #cccccc;
            margin-top: 0.4vh;
        }

        /* Spacer */
        .profile-spacer {
            height: 1vh;
        }

        /* Text Column - Kanan - Hitam */
        .profile-text-col {
            width: 58%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 0;
        }

        /* Welcome Text - Hitam */
        .welcome-text {
            font-size: 2.2vw;
            line-height: 1.5;
            color: #000000;
            text-align: justify;
            margin-top: 0;
        }

        .welcome-text strong {
            color: #000000;
        }

        .mt-text {
            margin-top: 1vh;
        }

        /* Verse Ref - Hitam */
        .verse-ref {
            font-size: 2vw;
            font-style: italic;
            color: #000000;
            margin-top: 1.5vh;
            line-height: 1.4;
        }

        /* Closing Text */
        .closing-text {
            margin-top: 2.5vh;
            padding-top: 1vh;
        }

        /* Quote Box */
        .quote-box {
            background: rgba(0, 0, 0, 0.1);
            border-left: 0.5vw solid #000000;
            border-radius: 0 1vw 1vw 0;
            padding: 1.5vh 1.5vw;
            position: relative;
            margin-bottom: 1vh;
        }

        .quote-mark-open,
        .quote-mark-close {
            font-size: 10vw;
            color: #000000;
            font-family: Georgia, serif;
            line-height: 1;
            position: absolute;
            opacity: 0.3;
        }

        .quote-mark-open {
            top: -0.5vh;
            left: 0.5vw;
        }

        .quote-mark-close {
            bottom: -1.5vh;
            right: 0.5vw;
        }

        .quote-content {
            padding: 0 3vw;
        }

        .quote-line {
            font-size: 2vw;
            line-height: 1.6;
            color: #000000;
            margin-bottom: 0.5vh;
        }

        .quote-line:last-child {
            margin-bottom: 0;
        }

        .quote-line strong {
            color: #000000;
            font-weight: 800;
        }

        .quote-signature {
            font-size: 2vw;
            color: #000000;
            text-align: right;
            margin-top: 0.5vh;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
                padding: 1vh 2vw;
            }
            .profile-photo-col,
            .profile-text-col {
                width: 100%;
            }
            .profile-photo-col {
                padding-top: 0;
                align-items: center;
            }
            .photo-frame {
                aspect-ratio: 1/1;
                max-height: 40vh;
            }
            .welcome-text { font-size: 2.5vw; }
            .quote-line { font-size: 2.2vw; }
            .closing-text { margin-top: 2vh; }
            .name-main { font-size: 3.5vw; }
            .name-title { font-size: 2.8vw; }
            .name-subtitle { font-size: 2vw; }
        }
    </style>

</div>