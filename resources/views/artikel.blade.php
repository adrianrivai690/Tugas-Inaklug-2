@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
<!-- Hero Section with Featured Article -->
<section class="hero-artikel-section">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-lg-8">
                <div class="hero-artikel-content">
                    <span class="hero-artikel-badge">TIPS</span>
                    <h1 class="hero-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- Featured Article 1 -->
            <div class="col-md-6">
                <a href="#" class="featured-artikel-card">
                    <div class="featured-artikel-image">
                        <img src="images/layanan kami/korona.png" alt="Artikel">
                    </div>
                    <div class="featured-artikel-text">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </a>
            </div>

            <!-- Featured Article 2 -->
            <div class="col-md-6">
                <a href="#" class="featured-artikel-card">
                    <div class="featured-artikel-image featured-artikel-image-logo">
                        <img src="{{ asset('images/layanan kami/htw.png') }}" alt="HTW Berlin">
                    </div>
                    <div class="featured-artikel-text">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Mitra Kami Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mitra-section-title">Mitra Kami</h2>
        
        <div class="mitra-artikel-list">
            <!-- Mitra Item 1 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel4.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 2 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel3.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 3 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel2.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 4 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel1.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 5 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel3.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 6 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel2.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 7 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel1.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>

            <!-- Mitra Item 8 -->
            <a href="#" class="mitra-artikel-item">
                <div class="mitra-artikel-image">
                    <img src="images/layanan kami/artikel4.png" alt="Artikel">
                </div>
                <div class="mitra-artikel-content">
                    <h4 class="mitra-artikel-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h4>
                    <p class="mitra-artikel-date">Selasa, 18 Feb 2020 12:01 WIB</p>
                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="artikel-pagination">
            <a href="#" class="pagination-arrow">&larr;</a>
            <a href="?page=1" class="pagination-number active">1</a>
            <a href="?page=2" class="pagination-number">2</a>
            <a href="?page=3" class="pagination-number">3</a>
            <a href="?page=4" class="pagination-number">4</a>
            <a href="?page=5" class="pagination-number">5</a>
            <a href="#" class="pagination-arrow">&rarr;</a>
        </div>
    </div>
</section>

<!-- Hubungi Kami Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title-bottom">Hubungi Kami</h2>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-bottom-card">
                    <h3 class="contact-bottom-title">Kantor Pusat</h3>
                    <p class="contact-bottom-text">
                        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
                        Phone: 085286754052
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* Hero Section with Background Image */
    .hero-artikel-section {
        position: relative;
        min-height: 500px;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, rgba(74, 26, 92, 0.7) 0%, rgba(46, 90, 143, 0.7) 100%), 
                    url('{{ asset("images/layanan kami/artiker.png") }}');
        background-size: cover;
        background-position: center;
    }

    .hero-artikel-content {
        position: relative;
        z-index: 2;
    }

    .hero-artikel-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.3);
        color: white;
        padding: 8px 20px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .hero-artikel-title {
        color: white;
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1.3;
        margin: 0;
    }

    /* Featured Articles Cards */
    .featured-artikel-card {
        display: block;
        text-decoration: none;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }

    .featured-artikel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    /* Featured Image - Default untuk Foto */
    .featured-artikel-image {
        width: 100%;
        height: 280px;
        overflow: hidden;
        background: #f8f9fa;
    }

    .featured-artikel-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    /* Featured Image - Khusus untuk Logo */
    .featured-artikel-image-logo {
        background: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1px;
        border-bottom: 1px solid #f0f0f0;
    }

    .featured-artikel-image-logo img {
        width: auto;
        height: auto;
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .featured-artikel-card:hover .featured-artikel-image img {
        transform: scale(1.05);
    }

    .featured-artikel-card:hover .featured-artikel-image-logo img {
        transform: scale(1.08);
    }

    .featured-artikel-text {
        padding: 20px;
        background: white;
    }

    .featured-artikel-text h3 {
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        line-height: 1.5;
        margin: 0;
    }

    /* Mitra Kami Section */
    .mitra-section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 40px;
        letter-spacing: 0.5px;
    }

    .mitra-artikel-list {
        display: flex;
        flex-direction: column;
        gap: 25px;
        margin-bottom: 50px;
    }

    .mitra-artikel-item {
        display: flex;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        text-decoration: none;
    }

    .mitra-artikel-item:hover {
        transform: translateX(8px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .mitra-artikel-image {
        width: 280px;
        height: 200px;
        flex-shrink: 0;
        overflow: hidden;
    }

    .mitra-artikel-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .mitra-artikel-item:hover .mitra-artikel-image img {
        transform: scale(1.1);
    }

    .mitra-artikel-content {
        padding: 25px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mitra-artikel-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin: 0 0 12px 0;
        line-height: 1.5;
    }

    .mitra-artikel-date {
        font-size: 0.9rem;
        color: #999;
        margin: 0;
    }

    /* Pagination */
    .artikel-pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        margin-top: 50px;
    }

    .pagination-number,
    .pagination-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: white;
        color: #666;
        text-decoration: none;
        border: 1px solid #ddd;
        transition: all 0.3s;
        font-weight: 500;
        font-size: 1rem;
    }

    .pagination-number:hover,
    .pagination-arrow:hover {
        background: #f0f0f0;
        color: #333;
        border-color: #ccc;
    }

    .pagination-number.active {
        background: linear-gradient(135deg, #4a1a5c 0%, #2e5a8f 100%);
        color: white;
        border-color: transparent;
    }

    .pagination-arrow {
        font-size: 1.2rem;
    }

    /* Contact Bottom Section */
    .section-title-bottom {
        font-size: 1.8rem;
        font-weight: 700;
        color: #333;
        text-align: center;
        margin-bottom: 40px;
        letter-spacing: 0.5px;
    }

    .contact-bottom-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        text-align: center;
    }

    .contact-bottom-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2e5a8f;
        margin-bottom: 20px;
    }

    .contact-bottom-text {
        font-size: 1rem;
        color: #555;
        line-height: 1.8;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-artikel-title {
            font-size: 1.8rem;
        }

        .mitra-artikel-item {
            flex-direction: column;
        }

        .mitra-artikel-image {
            width: 100%;
            height: 220px;
        }

        .pagination-number,
        .pagination-arrow {
            width: 40px;
            height: 40px;
            font-size: 0.9rem;
        }

        .featured-artikel-image,
        .featured-artikel-image-logo {
            height: 250px;
        }

        .featured-artikel-image-logo {
            padding: 25px;
        }
    }
</style>
@endsection