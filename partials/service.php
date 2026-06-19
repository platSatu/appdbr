<div class="tab-pane fade" id="content-sunday" role="tabpanel" aria-labelledby="menu-sunday-tab">
    
    <div class="sunday-container">
        
        <!-- Judul dengan Logo/Text -->
        <div class="sunday-title">
            <div class="title-main text-white">GBI DANAU BOGOR RAYA</div>
            <div class="title-sub text-white">Sunday Service Schedule</div>
        </div>
        
        <div class="sunday-grid">
            
            <!-- Row 1: Box 1-4 -->
            
            <div class="schedule-box box-blue">
                <div class="box-content">
                    <div class="box-number">Umum 1</div>
                    <div class="service-time">07.30</div>
                    <div class="service-place">Main Hall</div>
                    <div class="service-note">Disertai Ibadah Anak</div>
                </div>
            </div>
            
            <div class="photo-box box-blue-border">
                <img src="asset/ibdh1.jpg" alt="Ibadah Pagi">
            </div>
            
            <div class="schedule-box box-yellow">
                <div class="box-content">
                    <div class="box-number">Umum 2</div>
                    <div class="service-time">09.30</div>
                    <div class="service-place">Main Hall</div>
                    <div class="service-note">Disertai Ibadah Anak</div>
                </div>
            </div>
            
            <div class="photo-box box-yellow-border">
                <img src="asset/ibdh2.jpg" alt="Ibadah Raya">
            </div>
            
            <!-- Row 2: Box 5-8 -->
            
            <div class="schedule-box box-white">
                <div class="box-content">
                    <div class="box-number">Umum 3</div>
                    <div class="service-time">17.00</div>
                    <div class="service-place">Main Hall</div>
                    <div class="service-note">Disertai Ibadah Anak</div>
                </div>
            </div>
            
            <div class="photo-box box-white-border">
                <img src="asset/ibdh3.jpg" alt="Ibadah Sore">
            </div>
            
            <div class="schedule-box box-purple">
                <div class="box-content">
                    <div class="box-number">NGC Youth</div>
                    <div class="service-time">09.30</div>
                    <div class="service-place">Jeremiah 1 Room</div>
                    <div class="service-note">Lt. 3</div>
                </div>
            </div>
            
            <div class="photo-box box-purple-border">
                <img src="asset/foto2.png" alt="NGC Youth">
            </div>
            
        </div>
    </div>

    <style>
        /* Container */
        .sunday-container {
            height: 90vh;
            background: #3a3a3a;
            border-radius: 2vw;
            padding: 1.5vh 2vw;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        /* ===== JUDUL YANG DIPERBARUI ===== */
        .sunday-title {
            text-align: center;
            margin-bottom: 1vh;
            flex-shrink: 0;
        }

        .title-main {
            font-size: 2vw;           /* LEBIH BESAR */
            font-weight: 900;
            font-style: italic;       /* Miring */
            color: #f7d68c;
            letter-spacing: 0.2vw;
            line-height: 1.2;
        }

        .title-sub {
            font-size: 1.8vw;          /* Lebih besar */
            font-weight: 700;
            font-style: italic;       /* Miring */
            color: #ffffff;
            letter-spacing: 0.2vw;
            margin-top: 0.5vh;
        }

        /* Grid */
        .sunday-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 0.8vw;
            min-height: 0;
        }

        /* Box */
        .schedule-box,
        .photo-box {
            aspect-ratio: 1 / 1;
            width: 100%;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 1vw;
            box-sizing: border-box;
            overflow: hidden;
        }

        .box-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 0.5vw;
        }

        /* Font Box */
        .box-number {
            font-size: 1.3vw;
            font-weight: 900;
            color: #000000;
            opacity: 0.6;
            line-height: 1.2;
        }

        .service-time {
            font-size: 2.8vw;
            font-weight: 900;
            color: #000000;
            line-height: 1.1;
            margin: 0.3vh 0;
        }

        .service-place {
            font-size: 1.3vw;
            font-weight: 700;
            color: #000000;
        }

        .service-note {
            font-size: 1vw;
            font-weight: 500;
            color: #333333;
            margin-top: 0.3vh;
        }

        /* Warna */
        .box-blue { background: #A5c6e9; }
        .box-blue-border { background: #1a1a1a; border: 0.35vw solid #A5c6e9; }
        
        .box-yellow { background: #f7d68c; }
        .box-yellow-border { background: #1a1a1a; border: 0.35vw solid #f7d68c; }
        
        .box-white { background: #efefee; }
        .box-white-border { background: #1a1a1a; border: 0.35vw solid #efefee; }
        
        .box-purple { background: #9ca5f7; }
        .box-purple-border { background: #1a1a1a; border: 0.35vw solid #9ca5f7; }

        /* Photo */
        .photo-box {
            padding: 0;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sunday-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(4, 1fr);
            }
            
            .title-main { font-size: 4vw; }
            .title-sub { font-size: 2.5vw; }
            
            .box-number { font-size: 2vw; }
            .service-time { font-size: 4vw; }
            .service-place { font-size: 2vw; }
            .service-note { font-size: 1.5vw; }
        }
    </style>

</div>