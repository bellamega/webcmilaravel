<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI Web Laravel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Opsional: Jika Anda punya CSS kustom sendiri di luar Bootstrap, gunakan Vite --}}
    {{-- Aktifkan baris di bawah jika Anda ingin menambahkan CSS kustom di resources/css/app.css --}}
    {{-- @vite('resources/css/app.css') --}} 

    {{-- Gaya kustom yang diperlukan untuk gradien dan hover --}}
    <style>
        .font-sans {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        /* Gradien HIJAU ke MERAH BATA yang lebih BOLD */
        .bg-gradient-light {
            background: linear-gradient(to left, #7DCE13, #E84D2F); 
            /* Penjelasan warna: */
            /* #7DCE13 (Hijau terang/lime yang kuat) - Awal gradien */
            /* #E84D2F (Merah bata/terracotta yang kuat) - Akhir gradien */
            /* Menggunakan 'to right' agar gradien horizontal dari kiri ke kanan */
        }
        .transform-hover {
            transition: transform 0.3s ease-in-out;
        }
        .transform-hover:hover {
            transform: translateY(-5px); /* Sedikit naik saat hover */
        }

        /* Gaya kustom untuk tombol gradien merah - TETAP KUAT */
        .btn-gradient-primary {
            background: linear-gradient(to right, #FF4500, #FF6347); /* Orange-red ke Tomato */
            color: #fff; /* Teks putih */
            border: none;
            transition: background 0.3s ease-in-out;
        }
        .btn-gradient-primary:hover {
            background: linear-gradient(to right,rgb(173, 204, 0), #E05A3E); 
            color: #fff;
        }

        /* Gaya kustom untuk tombol outline gradien merah - TETAP KUAT */
        .btn-outline-gradient-primary {
            background: none;
            border: 2px solidrgb(231, 72, 72); /* Border merah yang kuat */
            color:rgb(245, 240, 240); /* Teks merah yang kuat */
            transition: all 0.3s ease-in-out;
        }
        .btn-outline-gradient-primary:hover {
            background: linear-gradient(to right,rgb(255, 166, 0), #FF6347); 
            color: #fff;
            border-color: transparent; /* Hilangkan border saat terisi gradien */
        }

        /* Gaya untuk logo di navbar */
        .navbar-logo {
            height: 40px; /* Atur tinggi logo sesuai kebutuhan Anda */
            width: auto; /* Lebar otomatis agar proporsional */
        }

        /* Gaya untuk highlight teks di judul (warna-warni) */
        .text-highlight-blue {
            color: #007bff; /* Biru Bootstrap */
            font-weight: bold;
        }
        /* Tambahkan kelas baru ini */
        .text-highlight-orange-v2 {
            color: #ff6347; /* Contoh warna oranye (Tomato), bisa diganti */
            font-weight: bold;
        }
        /* Jika Anda memiliki kelas .text-highlight-green-v2 atau .text-highlight-orange dari sebelumnya dan tidak digunakan, bisa dihapus atau disesuaikan */
        /* .text-highlight-green-v2 {
            color: #28a745; 
            font-weight: bold;
        }
        .text-highlight-orange {
            color: #fd7e14;
            font-weight: bold;
        }
        .text-highlight-purple {
            color: #6f42c1;
            font-weight: bold;
        } */

        .text-gradient-hero {
        /* Menerapkan gradien yang sama dengan background hero section Anda */
        background: linear-gradient(to left, #7DCE13, #E84D2F); /* Hijau terang ke Merah Bata */
        -webkit-background-clip: text; /* Untuk memotong background agar hanya terlihat di teks */
        background-clip: text;
        color: transparent; /* Membuat teks transparan agar background terlihat */
        /* Menambahkan sedikit shadow agar teks lebih menonjol */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); /* Shadow hitam dengan sedikit transparansi */
    }

    .text-shadow-hero {
        /* Menambahkan shadow pada teks paragraf */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Shadow hitam lebih kecil */
    }

    </style>
</head>
<body class="font-sans antialiased bg-light"> {{-- 'bg-light' adalah kelas Bootstrap --}}
    
    <header class="bg-white shadow-sm py-3">
        <div class="container d-flex justify-content-between align-items-center">
            {{-- Mengganti teks 'INNESINA' dengan gambar logo --}}
            <a href="#" class="navbar-brand">
                {{-- PASTIKAN NAMA FILE LOGO DAN EKSTENSINYA SESUAI DENGAN YANG ANDA SIMPAN DI public/images/ --}}
                <img src="{{ asset('images/cmi-logo2.png') }}" alt="INNESINA Logo" class="navbar-logo">
            </a>
            
            <nav class="d-none d-md-block"> {{-- Sembunyikan di mobile, tampilkan di desktop --}}
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Contribution</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Our Mission</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Projects</a></li>
                    <li class="nav-item"><a class="btn btn-gradient-primary rounded-pill px-4" href="#">Contact Us</a></li>
                </ul>
            </nav>
            {{-- Anda mungkin ingin menambahkan tombol hamburger menu untuk mobile di sini --}}
        </div>
    </header>

    <main>
        @yield('content')
    </main>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- Opsional: Jika Anda punya JavaScript kustom sendiri, gunakan Vite --}}
    {{-- Aktifkan baris di bawah jika Anda ingin menambahkan JavaScript kustom di resources/js/app.js --}}
    {{-- @vite('resources/js/app.js') --}}
</body>
</html>