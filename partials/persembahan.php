<!-- partials/persembahan.php -->
<div class="tab-pane fade" id="content-persembahan" role="tabpanel" aria-labelledby="menu-persembahan-tab">
    
    <div class="persembahan-container">
        
        <!-- Judul -->
        <div class="persembahan-title">
            <div class="title-main">GBI DANAU BOGOR RAYA</div>
            <div class="title-sub">Giving</div>
        </div>
        
        <!-- Gambar Persembahan -->
        <div class="persembahan-image">
            <div class="image-wrapper">
                <img src="asset/qr_umum.png" alt="Persembahan Umum">
            </div>
            <div class="image-wrapper">
                <img src="asset/qr_pembangunan.png" alt="Persembahan Pembangunan">
            </div>
        </div>
        
        <!-- Keterangan -->
        <div class="persembahan-desc">
            <p>Scan QR Code di atas untuk melakukan persembahan secara online.</p>
            
        </div>
        
    </div>

    <style>
        /* Container */
        .persembahan-container {
            height: 90vh;
            background: #ffffff;
            border-radius: 2vw;
            padding: 2vh 2vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            overflow-y: auto;
            overflow-x: hidden;
        }

        /* Judul */
        .persembahan-title {
            text-align: center;
            margin-bottom: 1vh;
        }

        .title-main {
            font-size: 3.5vw;
            font-weight: 900;
            font-style: italic;
            color: #000000;
        }

        .title-sub {
            font-size: 2.2vw;
            font-weight: 700;
            color: #000000;
        }

        /* Gambar - Responsive */
        .persembahan-image {
            display: flex;
            justify-content: center;
            align-items: start;
            width: 100%;
            flex: 1;
            gap: 2vw;
            flex-wrap: wrap;
            padding: 1vh 0;
        }

        .image-wrapper {
            flex: 1;
            min-width: 40%;
            max-width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1vh;
            box-sizing: border-box;
        }

        .persembahan-image img {
            width: 100%;
            height: auto;
            max-width: 100%;
            object-fit: contain;
            border-radius: 1vw;
            box-shadow: 0.4vw 0.4vw 0.8vw rgba(0,0,0,0.15);
        }

        /* Keterangan */
        .persembahan-desc {
            text-align: center;
            padding: 1vh 2vw;
            margin-top: auto;
        }

        .persembahan-desc p {
            font-size: 1.5vw;
            color: #333333;
            margin: 0.5vh 0;
            line-height: 1.4;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .title-main { 
                font-size: 4.5vw; 
            }
            .title-sub { 
                font-size: 3vw; 
            }
            
            .persembahan-image {
                flex-direction: column;
                gap: 3vh;
            }
            
            .image-wrapper {
                width: 100%;
                max-width: 80%;
                min-width: 60%;
            }
            
            .persembahan-desc p {
                font-size: 2vw;
            }
        }
    </style>

</div>