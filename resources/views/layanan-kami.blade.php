@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<!-- Hero Section -->
<section class="page-hero-layanan">
    <div class="hero-overlay-layanan">
        <div class="container">
            <h1 class="hero-title-layanan">LAYANAN KAMI</h1>
        </div>
    </div>
</section>

<!-- Layanan Cards Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Studi S1 - Bachelor -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/studi-s1.png" alt="Studi S1 - Bachelor">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S1 - Bachelor</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Studi S2 - Master -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/s2.png" alt="Studi S2 - Master">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S2 - Master</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kursus Bahasa Asing -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/kursus-bahasa.png" alt="Kursus Bahasa Asing">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Kursus Bahasa Asing</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Studi S3 - Ph.D -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/phd.png" alt="Studi S3 - Ph.D">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Studi S3 - Ph.D</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Study Tour -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/study-tour.png" alt="Study Tour">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Study Tour</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ausbildung -->
            <div class="col-md-4">
                <div class="layanan-card-box">
                    <div class="layanan-image-container">
                        <img src="/images/layanan kami/aus.png" alt="Ausbildung">
                        <div class="layanan-image-overlay">
                            <h3 class="layanan-image-title">Ausbildung</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hubungi Kami Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title-contact text-center mb-5">HUBUNGI KAMI</h2>
        <h3 class="text-center mb-4 contact-subtitle">KANTOR PUSAT</h3>
        
        <div class="contact-info text-center">
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p>Hotline: +6281519040071 / +62811998167</p>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-lokasi-contact">LOKASI KAMI</button>
            <button class="btn btn-kirim-contact">KIRIM PESAN</button>
        </div>
    </div>
</section>

<style>
/* Hero Section */
.page-hero-layanan {
    background: url('/images/layanan kami/layanan.png');
    background-size: cover;
    background-position: center;
    height: 550px;
    display: flex;
    align-items: center;
    position: relative;
}

.hero-overlay-layanan {
    width: 100%;
}

.hero-title-layanan {
    color: white;
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 2px;
    margin: 0;
}

/* Layanan Cards */
.layanan-card-box {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    height: 280px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.layanan-card-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.25);
}

.layanan-image-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.layanan-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.layanan-card-box:hover .layanan-image-container img {
    transform: scale(1.1);
}

/* Gradient Overlay - Purple to Blue */
.layanan-image-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, 
        rgba(138, 43, 226, 0.5) 0%, 
        rgba(74, 26, 92, 0.6) 40%, 
        rgba(46, 90, 143, 0.5) 100%);
    z-index: 1;
}

.layanan-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: flex-end;
    padding: 25px;
    z-index: 2;
}

.layanan-image-title {
    color: white;
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    text-align: left;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

/* Contact Section */
.section-title-contact {
    color: #2e5a8f;
    font-size: 36px;
    font-weight: 700;
    letter-spacing: 1px;
}

.contact-subtitle {
    color: #2e5a8f;
    font-weight: 600;
    font-size: 20px;
}

.contact-info {
    color: #555;
    line-height: 2;
    font-size: 15px;
}

.contact-info p {
    margin-bottom: 8px;
}

/* Buttons */
.btn-lokasi-contact {
    background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
    color: white;
    border: none;
    padding: 14px 45px;
    border-radius: 30px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-lokasi-contact:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(74, 26, 92, 0.4);
}

.btn-kirim-contact {
    background-color: transparent;
    color: #2e5a8f;
    border: 2px solid #2e5a8f;
    padding: 14px 45px;
    border-radius: 30px;
    margin: 10px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-kirim-contact:hover {
    background: #2e5a8f;
    color: white;
    transform: translateY(-2px);
}

/* Background Section */
.bg-light {
    background-color: #f8f9fa !important;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title-layanan {
        font-size: 36px;
    }
    
    .page-hero-layanan {
        height: 300px;
    }
    
    .layanan-card-box {
        height: 240px;
        margin-bottom: 20px;
    }
    
    .layanan-image-title {
        font-size: 18px;
    }
    
    .btn-lokasi-contact,
    .btn-kirim-contact {
        display: block;
        width: 100%;
        max-width: 320px;
        margin: 10px auto;
    }
    
    .section-title-contact {
        font-size: 28px;
    }
}

@media (max-width: 576px) {
    .hero-title-layanan {
        font-size: 28px;
    }
    
    .layanan-card-box {
        height: 220px;
    }
    
    .contact-info {
        font-size: 14px;
    }
}
</style>
@endsection