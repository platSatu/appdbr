<div class="tab-pane fade" id="content-info" role="tabpanel" aria-labelledby="menu-info-tab">
    
    <div class="info-container">
        
        <!-- Judul -->
        <div class="info-title">
            <div class="title-main">GBI DANAU BOGOR RAYA</div>
            <div class="title-sub">Information</div>
        </div>
        
        <!-- Deskripsi -->
        <div class="info-desc">
            Langkah imanmu dimulai di sini. <br>
Jangan tunda lagi, ambil bagian dan jadilah bagian dari keluarga besar Tuhan! Ingin mendaftar Kartu Tanda Jemaat (KTJ), 
ikut Baptisan, persiapan Pernikahan, atau menyerahkan anakmu kepada Tuhan melalui Penyerahan Anak? Scan QR Code di bawah ini dan isi formulir pendaftannya secara online. 
Praktis, cepat, dan bisa dilakukan kapan saja!
        </div>
        
        <!-- Grid 3 QR - Turun Kebawah -->
        <div class="info-grid">
            
            <!-- QR KTJ -->
            <div class="qr-box">
                <div class="qr-frame">
                    <div class="qr-image">
                        <img src="asset/qr_ktj.png" alt="QR KTJ">
                    </div>
                </div>
                <div class="qr-info">
                    <div class="qr-title">Kartu Tanda Jemaat</div>
                    <div class="qr-link">gbidbr.id/org/DBR:KTJ</div>
                </div>
            </div>
            
            <!-- QR Penyerahan Anak -->
            <div class="qr-box">
                <div class="qr-frame">
                    <div class="qr-image">
                        <img src="asset/qr_penyerahan_anak.png" alt="QR Penyerahan Anak">
                    </div>
                </div>
                <div class="qr-info">
                    <div class="qr-title">Penyerahan Anak</div>
                    <div class="qr-link">s.id/r7cis-peljem-pa</div>
                </div>
            </div>
            
            <!-- QR Baptisan -->
            <div class="qr-box">
                <div class="qr-frame">
                    <div class="qr-image">
                        <img src="asset/qr_baptisan.png" alt="QR Baptisan">
                    </div>
                </div>
                <div class="qr-info">
                    <div class="qr-title">Baptisan</div>
                    <div class="qr-link">gbidbr.id/org/DBR:Form_Baptisan</div>
                </div>
            </div>
            
        </div>
        
        <!-- Hotline + Keterangan -->
        <div class="info-hotline">
            <div class="hotline-left">
                <div class="hotline-icon"><i class="bi bi-headset"></i></div>
                <div class="hotline-text">
                    <div class="hotline-title">HOTLINE</div>
                    <div class="hotline-number">0811-1875-001</div>
                </div>
            </div>
            <div class="hotline-desc">
                Untuk informasi seputar pelayanan jemaat lainnya, seperti pernikahan atau kebutuhan pastoral lainnya,
                silakan langsung menghubungi pelayan jemaat atau kontak kami melalui WhatsApp.

            </div>
        </div>
        
    </div>

    <style>
        /* Container */
        .info-container {
            height: 90vh;
            background: #E7ADAD;
            border-radius: 2vw;
            padding: 2vh 2vw;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        /* Judul */
        .info-title {
            text-align: center;
            margin-bottom: 0.8vh;
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

        /* Deskripsi */
        .info-desc {
            font-size: 1.5vw;
            text-align: center;
            color: #1a1a1a;
            margin-bottom: 1vh;
            line-height: 1.4;
        }

        /* Grid - Turun Kebawah */
        .info-grid {
            display: flex;
            flex-direction: column;
            gap: 1vw;
            flex: 1;
        }

        /* QR Box */
        .qr-box {
            flex: 1;
            background: #ffffff;
            border-radius: 1.2vw 0 0 1.2vw;
            display: flex;
            align-items: center;
            padding: 0.8vh 1.5vw;
            gap: 1.5vw;
        }

        /* QR Frame - Border + Efek 3D */
        .qr-frame {
            width: 32%;
            aspect-ratio: 1 / 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #e0e0e0 0%, #ffffff 50%, #e0e0e0 100%);
            border-radius: 1vw;
            padding: 0.5vw;
            /* Efek 3D */
            box-shadow: 
                0.4vw 0.4vw 0.8vw rgba(0,0,0,0.3),
                inset 0 0 0.2vw rgba(0,0,0,0.1);
            border: 0.3vw solid #E7ADAD;
        }

        /* QR Image */
        .qr-image {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .qr-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* QR Info */
        .qr-info {
            width: 68%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* QR Title */
        .qr-title {
            font-size: 2.8vw;
            font-weight: 900;
            color: #000000;
            margin-bottom: 0.3vh;
        }

        /* QR Link */
        .qr-link {
            font-size: 2vw;
            font-weight: 700;
            color: #333333;
        }

        /* Hotline */
        .info-hotline {
            display: flex;
            align-items: center;
            background: #000000;
            border-radius: 1.2vw;
            padding: 1vh 1.5vw;
            margin-top: 1vh;
            gap: 2vw;
        }

        .hotline-left {
            display: flex;
            align-items: center;
            gap: 1vw;
            flex-shrink: 0;
        }

        .hotline-icon {
            font-size: 3vw;
            color: #E7ADAD;
        }

        .hotline-text {
            text-align: left;
        }

        .hotline-title {
            font-size: 1vw;
            font-weight: 600;
            color: #E7ADAD;
        }

        .hotline-number {
            font-size: 2.5vw;
            font-weight: 900;
            color: #ffffff;
        }

        .hotline-desc {
            font-size: 1.4vw;
            font-weight: 500;
            color: #ffffff;
            line-height: 1.4;
            border-left: 0.3vw solid #E7ADAD;
            padding-left: 1vw;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .qr-box {
                flex-direction: column;
                text-align: center;
            }
            
            .qr-frame {
                width: 45%;
            }
            
            .qr-info {
                width: 100%;
            }
            
            .title-main { font-size: 4.5vw; }
            .title-sub { font-size: 3vw; }
            .info-desc { font-size: 2vw; }
            .qr-title { font-size: 3.5vw; }
            .qr-link { font-size: 2.5vw; }
        }
    </style>

</div>