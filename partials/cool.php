<div class="tab-pane fade" id="content-cool" role="tabpanel" aria-labelledby="menu-cool-tab">

    <?php
        // Data daftar COOL (nama, lokasi, gembala, HP, jadwal, foto) diambil
        // dari partials/cool-data.php -- edit file itu untuk menambah/ubah
        // data, jangan edit di sini.
        $coolGroups = require __DIR__ . '/cool-data.php';

        // Ratakan semua entry (umum + wanita, semua wilayah) jadi satu daftar
        // linear untuk dijalankan di marquee, masing-masing tetap membawa
        // label kategori & wilayahnya sendiri untuk ditampilkan sebagai tag.
        $coolEntries = [];
        foreach ($coolGroups as $coolCategory) {
            if (empty($coolCategory['wilayah'])) {
                continue;
            }
            foreach ($coolCategory['wilayah'] as $coolWilayahName => $coolItems) {
                if (empty($coolItems)) {
                    continue;
                }
                foreach ($coolItems as $coolItem) {
                    // Kategori yang punya pembagian Wilayah asli (mis. "Umum")
                    // tampilkan tag "Label • Wilayah X". Kategori lain (Wanita,
                    // Mandiri, Profetik, Young & Pro, dst) tidak punya pembagian
                    // wilayah di sumber datanya -- cukup tampilkan nama
                    // kategorinya saja tanpa akhiran wilayah.
                    $coolItem['tag'] = str_starts_with($coolWilayahName, 'Wilayah')
                        ? $coolCategory['label'] . ' • ' . $coolWilayahName
                        : $coolCategory['label'];
                    $coolEntries[] = $coolItem;
                }
            }
        }

        $coolPhotoDir = __DIR__ . '/../asset/cool/gembala';

        // Kecepatan marquee menyesuaikan jumlah kartu supaya kecepatan
        // gerak per kartu terasa konsisten walau datanya nambah terus.
        $coolMarqueeDuration = max(24, count($coolEntries) * 5);
    ?>

    <div class="cool-container">

        <!-- Judul -->
        <div class="cool-title">
            <div class="title-main">COMMUNITY OF LOVE</div>
            <div class="title-sub">Bertumbuh bersama dalam iman!</div>
        </div>

        <!-- Semua Jadi Satu -->
        <div class="cool-content">
            <div class="content-box">
                <div class="content-text">
                    <strong>COOL (Community of Love)</strong> adalah komunitas kecil berisi <strong>3–15 orang</strong> yang rindu untuk bertumbuh bersama dalam iman dan hidup dalam gaya hidup Allah. 
                    Di dalam komunitas ini, kamu tidak hanya belajar firman Tuhan, tapi juga mengalami kasih, dukungan, dan pertumbuhan nyata seperti dalam sebuah keluarga.
                    <br><br>
                    Tertarik untuk bergabung dengan Community of Love kami? Kami dengan senang hati menyambut Anda! Hubungi gembala COOL terdekat di lokasi Anda untuk informasi lebih lanjut. 
                    Kami siap membantu Anda menemukan keluarga rohani yang penuh kasih. <strong>Tuhan memberkati!</strong>
                </div>
            </div>
        </div>

        <!-- Daftar COOL - Marquee jalan terus otomatis -->
        <div class="cool-directory-section">
            <div class="cool-directory-heading"><i class="bi bi-people-fill"></i>&nbsp; Daftar COOL Kami</div>

            <?php if (!empty($coolEntries)): ?>
                <div class="cool-marquee">
                    <div class="cool-marquee-track" style="animation-duration: <?= $coolMarqueeDuration ?>s;">
                        <?php
                            // Konten digandakan 2x supaya loop-nya nyambung mulus
                            // tanpa "patah" saat kembali ke awal.
                            for ($coolLoop = 0; $coolLoop < 2; $coolLoop++):
                                foreach ($coolEntries as $coolEntry):
                                    $coolPhotoFile = $coolEntry['photo'] ? $coolPhotoDir . '/' . $coolEntry['photo'] : null;
                                    $coolHasPhoto = $coolPhotoFile && is_file($coolPhotoFile);

                                    // Inisial dari nama gembala, buat placeholder kalau foto belum ada.
                                    $coolInitials = '';
                                    foreach (explode(' ', trim($coolEntry['gembala'])) as $coolWord) {
                                        if ($coolWord !== '' && strlen($coolInitials) < 2) {
                                            $coolInitials .= strtoupper($coolWord[0]);
                                        }
                                    }
                        ?>
                            <div class="cool-card">
                                <span class="cool-card-tag"><?= htmlspecialchars($coolEntry['tag']) ?></span>
                                <div class="cool-card-photo">
                                    <?php if ($coolHasPhoto): ?>
                                        <img src="asset/cool/gembala/<?= htmlspecialchars($coolEntry['photo']) ?>" alt="<?= htmlspecialchars($coolEntry['gembala']) ?>">
                                    <?php else: ?>
                                        <div class="cool-card-photo-placeholder"><span><?= htmlspecialchars($coolInitials ?: '?') ?></span></div>
                                    <?php endif; ?>
                                </div>
                                <div class="cool-card-caption">
                                    <div class="cool-card-name"><?= htmlspecialchars($coolEntry['name']) ?></div>
                                    <div class="cool-card-location"><?= htmlspecialchars($coolEntry['location']) ?></div>
                                    <div class="cool-card-role">Gembala COOL</div>
                                    <div class="cool-card-gembala"><?= htmlspecialchars($coolEntry['gembala']) ?></div>
                                    <div class="cool-card-meta"><i class="bi bi-telephone-fill"></i>&nbsp; <?= htmlspecialchars($coolEntry['phone']) ?></div>
                                    <div class="cool-card-meta cool-card-schedule"><i class="bi bi-calendar-check-fill"></i>&nbsp; <?= htmlspecialchars($coolEntry['schedule']) ?></div>
                                </div>
                            </div>
                        <?php
                                endforeach;
                            endfor;
                        ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="cool-directory-empty">
                    <i class="bi bi-people"></i>
                    <p>Data COOL akan segera hadir</p>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <style>
        /* Container - Background #f7e784 */
        .cool-container {
            height: 90vh;
            background: #f7e784;
            border-radius: 2vw;
            padding: 2vh 2vw;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            overflow-x: hidden;
            box-sizing: border-box;
        }

        /* Judul - Hitam */
        .cool-title {
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

        /* Content - Satu Kotak */
        .cool-content {
            display: flex;
            align-items: start;
            flex: 0 0 auto;
        }

        .content-box {
            width: 100%;
            background: rgba(255, 255, 255, 0.5);
            border-left: 0.6vw solid #000000;
            border-radius: 0 1.5vw 1.5vw 0;
            padding: 2vh 2vw;
        }

        /* Text - Hitam */
        .content-text {
            font-size: 2vw;
            color: #000000;
            line-height: 1.7;
            text-align: justify;
        }

        .content-text strong {
            color: #000000;
            font-weight: 800;
        }

        /* ==== Daftar COOL - Marquee ====
           FIX (14 September 2026) -- SEBELUMNYA pakai container-type:inline-size
           + satuan cqw supaya ukuran kartu ikut lebar kolom konten (bukan
           lebar layar penuh/vw). Container Queries (cqw) itu fitur CSS yang
           relatif baru (baru didukung browser modern, Chrome 105+/2022 ke
           atas) -- browser bawaan (WebView) di layar signage ternyata JAUH
           lebih lama dan TIDAK mengenali cqw, jadi seluruh clamp() yang
           memakainya jadi tidak valid & diabaikan browser, ukurannya balik
           ke default yang jauh lebih besar ("berantakan, besar-besar
           semua") -- persis laporan user, padahal di HP (browser modern)
           terlihat normal. Semua menu LAIN aman karena semuanya dari awal
           cuma pakai vw/vh biasa (satuan lama, didukung semua browser
           termasuk yang tua di signage).

           Diganti balik ke vw biasa (dihitung ulang proporsinya dari lebar
           kolom konten ".content-section" yang 70% lebar layar di
           dashboard.php, supaya ukuran visualnya tetap sama persis seperti
           sebelumnya) -- konsisten dengan pendekatan menu lain yang sudah
           terbukti jalan normal di signage tersebut, portrait maupun
           landscape. */
        .cool-directory-section {
            flex: 1;
            min-height: 0;
            display: flex;
            flex-direction: column;
            margin-top: 2.6vh;
            padding-top: 1.6vh;
            border-top: 2px dashed rgba(0, 0, 0, 0.15);
        }

        .cool-directory-heading {
            font-size: clamp(13px, 2.9vw, 22px);
            font-weight: 800;
            color: #000000;
            margin-bottom: 1vh;
            display: flex;
            align-items: center;
            flex: 0 0 auto;
        }

        .cool-marquee {
            flex: 1;
            min-height: 0;
            overflow: hidden;
            position: relative;
            -webkit-mask-image: linear-gradient(to right, transparent, #000 6%, #000 94%, transparent);
            mask-image: linear-gradient(to right, transparent, #000 6%, #000 94%, transparent);
        }

        .cool-marquee-track {
            display: flex;
            align-items: stretch;
            gap: 2.1vw;
            height: 100%;
            width: max-content;
            animation-name: coolMarqueeScroll;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @keyframes coolMarqueeScroll {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        .cool-card {
            position: relative;
            flex: 0 0 auto;
            width: clamp(148px, 23vw, 240px);
            height: 100%;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.55);
            border-radius: 12px;
            padding: 8px;
            box-sizing: border-box;
        }

        .cool-card-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 2;
            background: rgba(0, 0, 0, 0.65);
            color: #ffffff;
            font-size: clamp(9px, 2vw, 12px);
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 10px;
            letter-spacing: 0.02em;
            white-space: nowrap;
        }

        .cool-card-photo {
            position: relative;
            flex: 1 1 auto;
            min-height: 34px;
            max-height: 62%;
            border-radius: 9px;
            margin: 4px 4px 0 4px;
        }

        .cool-card-photo::before,
        .cool-card-photo::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.55);
            border-radius: inherit;
            z-index: -1;
        }

        .cool-card-photo::before { transform: rotate(-4deg) translateY(3%); }
        .cool-card-photo::after { transform: rotate(4deg) translateY(3%); opacity: 0.7; }

        .cool-card-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: inherit;
            display: block;
        }

        .cool-card-photo-placeholder {
            width: 100%;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(135deg, #3a3a3a, #000000);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cool-card-photo-placeholder span {
            color: #f7e784;
            font-size: clamp(16px, 4vw, 26px);
            font-weight: 800;
        }

        .cool-card-caption {
            flex: 0 0 auto;
            padding: 8px 4px 4px;
        }

        .cool-card-name {
            font-size: clamp(13px, 3.4vw, 19px);
            font-weight: 800;
            color: #000000;
            line-height: 1.25;
        }

        .cool-card-location {
            font-size: clamp(10.5px, 2.45vw, 14px);
            color: #3d3d3d;
            margin-bottom: 4px;
        }

        .cool-card-role {
            font-size: clamp(9.5px, 2.2vw, 12.5px);
            font-style: italic;
            color: #6a5a1f;
            margin-top: 3px;
        }

        .cool-card-gembala {
            font-size: clamp(11.5px, 2.8vw, 16px);
            font-weight: 700;
            color: #000000;
            margin-bottom: 4px;
        }

        .cool-card-meta {
            font-size: clamp(10px, 2.3vw, 13.5px);
            color: #2b2b2b;
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .cool-card-schedule {
            color: #1c6b3a;
            font-weight: 700;
        }

        .cool-directory-empty {
            flex: 1;
            min-height: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.8vh;
            border: 2px dashed rgba(0, 0, 0, 0.25);
            border-radius: 1.5vw;
            color: rgba(0, 0, 0, 0.45);
        }

        .cool-directory-empty i {
            font-size: 3vw;
        }

        .cool-directory-empty p {
            font-size: 1.4vw;
            font-weight: 600;
        }

        /* Responsive -- teks judul & deskripsi tetap ikut lebar layar (vw),
           kartu COOL sudah otomatis menyesuaikan sendiri lewat vw di atas
           (lihat FIX 14 September 2026 di .cool-directory-section) jadi
           tidak perlu override lagi di sini. */
        @media (max-width: 768px) {
            .title-main { font-size: 5vw; }
            .title-sub { font-size: 3vw; }
            .content-text { font-size: 2.5vw; }
        }
    </style>

</div>
