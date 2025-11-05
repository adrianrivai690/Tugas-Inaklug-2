<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLUG - @yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styling */
        .navbar-custom {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 50%, #5b8db8 100%);
            padding: 15px 0;
        }
        /* Navbar brand and logo tweaks to prevent overlapping text */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .navbar-logo {
            height: 120px; /* smaller logo to avoid pushing nav items */
            max-height: 56px;
            width: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        /* keep brand text on single line and readable */
        .navbar-brand-text {
            font-size: 1.25rem;
            font-weight: 700;
            color: white !important;
            white-space: nowrap;
            line-height: 1;
            letter-spacing: 1px;
        }

        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            margin: 0 20px;
            font-weight: 400;
            transition: all 0.3s;
            padding: 10px 0 !important;
            position: relative;
            border-bottom: 3px solid transparent;
        }

        /* Ensure nav items align center and avoid wrapping when there's space */
        .navbar-custom .navbar-nav {
            align-items: center;
        }
        .navbar-custom .navbar-collapse {
            justify-content: flex-end;
        }

        .navbar-custom .nav-link:hover {
            color: white !important;
            border-bottom-color: rgba(255, 255, 255, 0.5);
        }

        .navbar-custom .nav-link.active {
            color: white !important;
            border-bottom-color: white;
            font-weight: 500;
        }

        .navbar-custom .btn-daftar {
            background-color: #3d6a9e;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .navbar-custom .btn-daftar:hover {
            background-color: #2e5a8f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .search-box {
            background-color: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 8px 20px;
            color: white;
            width: 250px;
        }

        .search-box::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        .search-box:focus {
            outline: none;
            background-color: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 1000px;
            display: flex;
            align-items: flex-end;
            padding-bottom: 50px;
            background-size: cover;
            background-position: center;
            background-image: url('{{ asset("images/hero-background.jpg") }}');
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(74, 26, 92, 0.25) 0%, rgba(46, 90, 143, 0.2) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
        }

        .hero-box {
            background: linear-gradient(135deg, rgba(74, 26, 92, 0.92) 0%, rgba(46, 90, 143, 0.92) 100%);
            padding: 35px 40px;
            border-radius: 10px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-box-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .hero-box-content h2 {
            margin: 0;
            flex: 1;
            font-size: 1.4rem;
            font-weight: 600;
            line-height: 1.5;
        }

        .hero-box-content .btn-selengkapnya {
            flex-shrink: 0;
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .hero-box-content .btn-selengkapnya:hover {
            background-color: white;
            color: #4a1a5c;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* Article Section */
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin: 60px 0 40px;
            letter-spacing: 10px;
        }

        .section-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            color: #555;
            font-size: 1.5rem;  
            line-height: 1.8;
            margin-bottom: 60px;
        }

        /* Service Cards */
        .service-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 300px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-card-title {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0;
        }

        /* Partner Logos */
        .partner-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin: 60px 0;
        }

        .partner-logos {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 30px;
        }

        .partner-logo-box {
            width: 220px;
            height: 160px;
            background: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            border: 1px solid #e0e0e0;
        }

        .partner-logo-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border-color: #2e5a8f;
        }

        .partner-logo {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            opacity: 0.85;
            transition: all 0.3s;
        }

.partner-logo-box:hover .partner-logo {
    opacity: 1;
    transform: scale(1.08);
}
        /* Consultation Box */
        .consultation-box {
            background: linear-gradient(135deg, #4a1a5c 0%, #2e5a8f 100%);
            padding: 40px;
            border-radius: 10px;
            color: white;
            text-align: center;
            margin: 60px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .consultation-box h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .consultation-box p {
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .consultation-box .btn {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 35px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .consultation-box .btn:hover {
            background-color: white;
            color: #4a1a5c;
        }

        /* Article Grid */
        .article-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 60px;
        }

        .article-item {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }

        .article-item:hover {
            transform: translateY(-5px);
        }

        .article-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .article-title {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            line-height: 1.5;
            text-align: center;
        }

        .btn-artikel-lainnya {
            background-color: transparent;
            border: 2px solid #2e5a8f;
            color: #2e5a8f;
            padding: 10px 40px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            display: block;
            margin: 40px auto;
            width: fit-content;
        }

        .btn-artikel-lainnya:hover {
            background-color: #2e5a8f;
            color: white;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-title {
            font-size: 2rem;
            font-weight: 700;
            color: #4a1a5c;
            margin-bottom: 10px;
        }

        .contact-subtitle {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2e5a8f;
            margin-bottom: 30px;
        }

        .contact-info {
            font-size: 1rem;
            color: #555;
            line-height: 2;
        }

        .btn-contact {
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            margin: 10px;
            transition: all 0.3s;
        }

        .btn-lokasi {
            background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
            color: white;
            border: none;
        }

        .btn-lokasi:hover {
            background: linear-gradient(90deg, #3a0a4c 0%, #1e4a7f 100%);
            transform: translateY(-3px);
        }

        .btn-kirim {
            background-color: transparent;
            color: #2e5a8f;
            border: 2px solid #2e5a8f;
        }

        .btn-kirim:hover {
            background-color: #2e5a8f;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .article-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-box-content {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .hero-box-content h2 {
                font-size: 1.2rem;
            }
            
            .hero-box-content .btn-selengkapnya {
                margin-top: 15px;
                width: 100%;
            }
            
            .service-card {
                height: 250px;
            }

            .navbar-custom .nav-link {
                margin: 10px 0;
                border-bottom: none;
            }

            .search-box {
                width: 100%;
                margin: 15px 0;
            }
            /* reduce logo size on small screens so the brand doesn't overflow */
            .navbar-logo {
                height: 40px;
                max-height: 48px;
            }
            .navbar-brand-text {
                font-size: 1.05rem;
            }
        }
    </style>

    @yield('styles')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('/images/layanan kami/logo.png') }}" alt="INAKLUG Logo" class="navbar-logo">
                <span class="navbar-brand-text">Inaklug</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('layanan-kami') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('hubungi-kami') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a>
                    </li>
                    <li class="nav-item ms-3">
                        <input type="text" class="form-control search-box" placeholder="Ketik pencarian">
                    </li>
                    <li class="nav-item ms-2">
                        <button class="btn btn-daftar">DAFTAR ON-LINE</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>