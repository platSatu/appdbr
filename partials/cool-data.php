<?php
/**
 * ==== DATA DAFTAR COOL (dipakai oleh partials/cool.php) ====
 *
 * File ini isinya cuma DATA (bukan tampilan) -- supaya gampang diedit tanpa
 * perlu utak-atik kode HTML/CSS/JS di partials/cool.php.
 *
 * CARA TAMBAH / EDIT DATA:
 * - Setiap wilayah/grup isinya array dari beberapa COOL, satu baris = satu COOL.
 * - Field yang wajib diisi: name, location, gembala, phone, schedule.
 * - Field 'photo' opsional -- kalau belum ada fotonya, biarkan null (nanti
 *   otomatis tampil placeholder inisial). Kalau sudah ada foto, taruh
 *   file-nya di folder asset/cool/gembala/ lalu isi 'photo' dengan nama
 *   filenya saja, contoh: 'photo' => 'sri-bawono.jpg'.
 *
 * CARA TAMBAH WILAYAH BARU (khusus kategori 'umum'):
 * - Tinggal tambah key baru di dalam 'wilayah', contoh 'Wilayah 7' => [...].
 *
 * CARA TAMBAH KATEGORI BARU (selain Umum/Wanita/Mandiri/Profetik/Young & Pro):
 * - Tambah key baru sejajar dengan 'umum', 'wanita', dst di bawah, isi
 *   'label' (nama yang muncul di tag kartu) & 'wilayah'.
 * - Kalau kategori itu TIDAK punya pembagian wilayah/region (kayak Wanita,
 *   Mandiri, Profetik, Young & Pro), taruh semua datanya di satu key
 *   'Semua' saja -- tag di kartu otomatis cuma nampilin nama kategorinya
 *   tanpa embel-embel wilayah (lihat logic-nya di cool.php).
 * - Kalau memang kategori itu punya pembagian wilayah asli (kayak Umum),
 *   pakai key 'Wilayah 1', 'Wilayah 2', dst supaya tag-nya lengkap
 *   "Label • Wilayah X".
 */

return [
    'umum' => [
        'label' => 'Umum',
        'wilayah' => [
            'Wilayah 1' => [
                ['name' => 'COOL Villa Duta', 'location' => 'Villa Duta', 'gembala' => 'Sri Bawono', 'phone' => '0853-1987-9704', 'schedule' => 'Sabtu 17.00', 'photo' => 'CLU1-Sri-Bawono.png'],
                ['name' => 'COOL Harmony', 'location' => 'Cimahpar', 'gembala' => 'Adiputra Winarto', 'phone' => '0812-8029-8628', 'schedule' => 'Sabtu 16.00', 'photo' => 'CLU1-Adi-Putra-Winarto.png'],
                ['name' => 'COOL Koinonia', 'location' => 'Taman Yasmin', 'gembala' => 'Victor Pandiwidjaja', 'phone' => '0856-8339-833', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU1-Victor-Iman-Pandiwidjaja.png'],
            ],
            'Wilayah 2' => [
                ['name' => 'COOL Pulo Armin', 'location' => 'Pulo Armin', 'gembala' => 'Mintardja Handali', 'phone' => '0811-100-059', 'schedule' => 'Jumat 18.30', 'photo' => 'CLU2-Mintardja-Handali.png'],
                ['name' => 'COOL Hope', 'location' => 'Bogor Baru', 'gembala' => 'William Wijaya', 'phone' => '0812-9055-505', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU2-William-Wijaya.png'],
            ],
            'Wilayah 3' => [
                ['name' => 'COOL Bantar Kemang I', 'location' => 'Bantar Kemang', 'gembala' => 'Sahala Purba', 'phone' => '0813-8518-7567', 'schedule' => 'Sabtu 17.30', 'photo' => 'CLU3-Sahala-Purba.png'],
                ['name' => 'COOL Tefilah', 'location' => 'De Botanica Cimahpar', 'gembala' => 'Heryanto Sijabat', 'phone' => '0813-2631-4437', 'schedule' => 'Minggu 19.00', 'photo' => 'CLU3-Heryanto-Sijabat.png'],
                ['name' => 'COOL Tanah Baru', 'location' => 'Tanah Baru', 'gembala' => 'Erwin M Hutasoit', 'phone' => '0853-1901-3029', 'schedule' => 'Minggu 16.00', 'photo' => 'CLU3-Erwin-Martua-Hutasoit.png'],
                ['name' => 'COOL Bantar Kemang II', 'location' => 'Bantar Kemang', 'gembala' => 'William Ruslimin', 'phone' => '0812-1105-609', 'schedule' => 'Sabtu 17.00', 'photo' => 'CLU3-William-Ruslimin.png'],
            ],
            // CATATAN: Wilayah 4 & 5 sempat salah kelompok di versi sebelumnya
            // (COOL Metro/VBI kepasang di Wilayah 4, COOL VIP/Revival di
            // Wilayah 5) -- sudah dibetulkan sesuai screenshot terbaru yang
            // dikirim user.
            'Wilayah 4' => [
                ['name' => 'COOL Victory', 'location' => 'Taman Victoria Sentul City', 'gembala' => 'Frangki Sihombing', 'phone' => '0878-7452-3977', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU4-Ucok-Sabar-Frangki-Sihombing.png'],
                ['name' => 'COOL Griya Alam', 'location' => 'Griya Alam Sentul City', 'gembala' => 'Renaldin P', 'phone' => '0812-8343-0051', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU4-Renaldin-P.png'],
            ],
            'Wilayah 5' => [
                ['name' => 'COOL VIP', 'location' => 'Vila Indah Pajajaran', 'gembala' => 'Karunia Wijaya', 'phone' => '0812-1934-5123', 'schedule' => 'Sabtu 19.00', 'photo' => 'CLU5-Karunia-Wijaya.png'],
                ['name' => 'COOL Metro', 'location' => 'Metro Residence Sentul', 'gembala' => 'Diter', 'phone' => '0811-1112-889', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU4-Diter-Tan.png'],
                ['name' => 'COOL VBI', 'location' => 'Vila Bogor Indah', 'gembala' => 'Dastanta Ginting', 'phone' => '0811-1113-243', 'schedule' => 'Kamis 19.00', 'photo' => 'CLU4-Dastanta-Ginting.png'],
                ['name' => 'COOL Revival', 'location' => 'Kampung Cincau', 'gembala' => 'David Satriyo', 'phone' => '0856-9158-3741', 'schedule' => 'Sabtu 19.00', 'photo' => 'CLU5-David-Satriyo.png'],
            ],
            'Wilayah 6' => [
                ['name' => 'COOL MBR', 'location' => 'Mutiara Bogor Raya', 'gembala' => 'Mulyadi', 'phone' => '0811-1185-777', 'schedule' => 'Jumat 20.00', 'photo' => 'CLU5-Mulyadi.png'],
                ['name' => 'COOL Miara', 'location' => 'Taman Tampak Siring Raya Sentul City', 'gembala' => 'Paulus Krisdiyanto', 'phone' => '0858-1444-6444', 'schedule' => 'Jumat 19.00', 'photo' => 'CLU5-Paul-Krisdiyanto.png'],
            ],
        ],
    ],

    'wanita' => [
        'label' => 'Wanita',
        'wilayah' => [
            'Semua' => [
                ['name' => 'COOL Wanita Kemang Permata', 'location' => 'Kemang Permata', 'gembala' => 'Yenni Mariana', 'phone' => '0813-6762-3914', 'schedule' => 'Selasa 10.00', 'photo' => null],
                ['name' => 'COOL Wanita Gedung Lautan', 'location' => 'Gedung Lautan', 'gembala' => 'Winarsih', 'phone' => '0812-9389-162', 'schedule' => 'Selasa 10.00', 'photo' => 'CLW-Winarsih.png'],
                ['name' => 'COOL Wanita Katulampa', 'location' => 'Katulampa', 'gembala' => 'Lusy', 'phone' => '0819-7952-001', 'schedule' => 'Selasa 10.00', 'photo' => 'CLW-Lusy.png'],
                ['name' => 'COOL Wanita Good Mommy I', 'location' => 'Katulampa', 'gembala' => 'Sandry YY Mingkid', 'phone' => '0895-3200-90082', 'schedule' => 'Jumat 19.00', 'photo' => 'CLW-Sandry-YY-Mingkid.png'],
                ['name' => 'COOL Wanita Bantar Kemang', 'location' => 'Bantar Kemang', 'gembala' => 'S L Rani', 'phone' => '0878-7316-6002', 'schedule' => 'Sabtu 15.00', 'photo' => 'CLW-S-L-Rani.png'],
                ['name' => 'COOL Wanita Good Mommy II', 'location' => 'Tanah Baru', 'gembala' => 'Roma Sondang H S', 'phone' => '0878-0754-4662', 'schedule' => 'Rabu 16.00', 'photo' => 'CLW-Roma-Sondang-H-Situmorang.png'],
                ['name' => 'COOL Wanita Good Mommy III', 'location' => 'Griya Soka', 'gembala' => 'Yuniliana Herawati', 'phone' => '0856-8789-990', 'schedule' => 'Sabtu 10.00', 'photo' => 'CLW-Yuni-Liana.png'],
                ['name' => 'COOL Wanita Good Mommy IV', 'location' => 'Taman Pajajaran', 'gembala' => 'Tjoei Fong', 'phone' => '0821-1321-0956', 'schedule' => 'Sabtu 10.00', 'photo' => null],
                ['name' => 'COOL Wanita Good Mommy V', 'location' => 'Tajur', 'gembala' => 'Louise Dian Sitepu', 'phone' => '0821-1365-7870', 'schedule' => 'Sabtu 17.00', 'photo' => null],
                ['name' => 'COOL Wanita Kemang Permata II', 'location' => 'Gunung Batu', 'gembala' => 'Dewi F Sembiring', 'phone' => '0899-8895-529', 'schedule' => 'Rabu 10.00', 'photo' => null],
            ],
        ],
    ],

    'mandiri' => [
        'label' => 'Mandiri',
        'wilayah' => [
            'Semua' => [
                ['name' => 'COOL Mandiri Kemang Permata', 'location' => 'Kemang Permata', 'gembala' => 'Cik Ida Rianto', 'phone' => '0811-1170-163', 'schedule' => 'Selasa 10.00', 'photo' => 'CLW-Cik-Ida-Rianto.png'],
                ['name' => 'COOL Mandiri Sempur', 'location' => 'Sempur', 'gembala' => 'Hamelia Adriana Jans', 'phone' => '0821-2581-9516', 'schedule' => 'Rabu 10.00', 'photo' => null],
            ],
        ],
    ],

    'profetik' => [
        'label' => 'Profetik Pemuji-Penyembah',
        'wilayah' => [
            'Semua' => [
                ['name' => 'COOL Integrity', 'location' => 'Bogor Village Pamoyanan', 'gembala' => 'Piter', 'phone' => '0818-808-313', 'schedule' => 'Kamis 20.00', 'photo' => 'CLU1-Piter.png'],
                ['name' => 'COOL Warrior Bride', 'location' => 'Bogor Village Pamoyanan', 'gembala' => 'Win Diana', 'phone' => '0821-2460-9609', 'schedule' => 'Rabu 18.30', 'photo' => 'CLU1-Win-Diana.png'],
                ['name' => 'COOL Harvester', 'location' => 'Griya Cimanggu Indah', 'gembala' => 'Natanael Tamto', 'phone' => '0812-8680-0080', 'schedule' => 'Kamis 20.00', 'photo' => null],
                ['name' => 'COOL Avodah', 'location' => 'Ming Salon, L3, Jalan Pajajaran', 'gembala' => 'Yoan Anglika Sitompul', 'phone' => '0812-1102-002', 'schedule' => 'Kamis 20.00', 'photo' => null],
                ['name' => 'COOL Asaf', 'location' => 'Griya Persada Citeureup', 'gembala' => 'Budi Darmawan', 'phone' => '0877-7021-3871', 'schedule' => 'Jumat 19.00', 'photo' => null],
            ],
        ],
    ],

    'young_pro' => [
        'label' => 'Young & Pro',
        'wilayah' => [
            'Semua' => [
                ['name' => 'COOL Breakthrough', 'location' => 'Bukit Bogor Raya', 'gembala' => 'Ferry Gunawan', 'phone' => '0888-0211-9269', 'schedule' => 'Jumat 19.30', 'photo' => 'CLDM-Ferry-Gunawan.png'],
                ['name' => 'COOL Single Misi', 'location' => 'Kampung Cincau', 'gembala' => 'Priskila Nathania Sabtoe', 'phone' => '0877-7393-8311', 'schedule' => 'Sabtu 18.00', 'photo' => null],
                ['name' => 'COOL Keluarga Muda', 'location' => 'Ravenia Pakuan Hill', 'gembala' => 'Andy Sukanta', 'phone' => '0812-9375-6756', 'schedule' => 'Sabtu 17.00', 'photo' => 'CLDM-Andy-Sukanta.png'],
                ['name' => 'COOL Connecting Generation', 'location' => 'Vila Indah Pajajaran', 'gembala' => 'Ferdinand Maitimu', 'phone' => '0812-1045-8888', 'schedule' => 'Kamis 19.00', 'photo' => 'CLDM-Ferdinand-Maitimu.png'],
            ],
        ],
    ],
];
