@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<!-- Hero Section -->
<section class="hero-section-hubungi">
    <div class="container">
        <div class="row align-items-center" style="min-height: 400px;">
            <div class="col-lg-6">
                <h1 class="hero-title-hubungi">HUBUNGI KAMI</h1>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="form-section-title">KIRIM PESAN</h2>
                
                <!-- Alert Messages -->
                <div id="alertMessage" class="alert alert-dismissible fade" role="alert" style="display: none;">
                    <span id="alertText"></span>
                    <button type="button" class="btn-close" onclick="closeAlert()"></button>
                </div>

                <form id="contactForm" class="contact-form">
                    @csrf
                    <div class="row">
                        <!-- Nama -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control contact-input" id="name" name="name" placeholder="Nama lengkap Anda" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">E-Mail<span class="text-danger">*</span></label>
                            <input type="email" class="form-control contact-input" id="email" name="email" placeholder="Alamat E-mail Anda" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Perusahaan/Organisasi -->
                        <div class="col-md-6 mb-3">
                            <label for="company" class="form-label">Perusahaan / Organisasi</label>
                            <input type="text" class="form-control contact-input" id="company" name="company" placeholder="Nama Perusahaan / Organisasi">
                        </div>

                        <!-- Telepon -->
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Telepon<span class="text-danger">*</span></label>
                            <input type="tel" class="form-control contact-input" id="phone" name="phone" placeholder="Nomor telepon Anda" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Isi Pesan -->
                        <div class="col-12 mb-3">
                            <label for="message" class="form-label">Isi Pesan<span class="text-danger">*</span></label>
                            <textarea class="form-control contact-input" id="message" name="message" rows="6" placeholder="Isi pesan Anda" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- reCAPTCHA Badge will appear here automatically -->
                        
                        <!-- Submit Button -->
                        <div class="col-12 text-center">
                            <button type="submit" id="submitBtn" class="btn btn-submit-contact">
                                <span id="submitText">KIRIM PESAN</span>
                                <span id="submitLoader" class="spinner-border spinner-border-sm ms-2" style="display: none;"></span>
                            </button>
                        </div>

                        <div class="col-12 text-center mt-3">
                            <small class="text-muted">
                                This site is protected by reCAPTCHA and the Google
                                <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
                                <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Lokasi Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="lokasi-section-title">LOKASI KAMI</h2>
        
        <!-- Kantor Pusat -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="lokasi-card">
                    <h3 class="lokasi-card-title">KANTOR PUSAT</h3>
                    <div class="lokasi-card-content">
                        <p><strong>Alamat:</strong><br>
                        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                        
                        <p><strong>Phone:</strong> (+62 21) 398 38706<br>
                        <strong>Fax:</strong> (+62 21) 316 1701</p>
                        
                        <p><strong>Hotline:</strong><br>
                        +6281519040071 / +62811998167</p>
                    </div>
                </div>
            </div>

            <!-- Kantor Cabang -->
            <div class="col-lg-6 mb-4">
                <div class="lokasi-card">
                    <h3 class="lokasi-card-title">KANTOR CABANG</h3>
                    <div class="lokasi-card-content">
                        <p><strong>Alamat:</strong><br>
                        Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
                        
                        <p><strong>Phone:</strong> (+62 21) 398 38706<br>
                        <strong>Fax:</strong> (+62 21) 316 1701</p>
                        
                        <p><strong>Hotline:</strong><br>
                        +6281519040071 / +62811998167</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    /* Hero Section */
    .hero-section-hubungi {
        position: relative;
        min-height: 400px;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, rgba(74, 26, 92, 0.8) 0%, rgba(46, 90, 143, 0.8) 100%), 
                    url('images/layanan kami/becak.png');
        background-size: cover;
        background-position: center;
    }

    .hero-title-hubungi {
        color: white;
        font-size: 3rem;
        font-weight: 700;
        letter-spacing: 2px;
    }

    /* Form Section */
    .form-section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
        letter-spacing: 1px;
    }

    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .form-label {
        font-weight: 600;
        color: #555;
        margin-bottom: 8px;
        font-size: 0.95rem;
    }

    .contact-input {
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 12px 15px;
        transition: all 0.3s;
        font-size: 0.95rem;
    }

    .contact-input:focus {
        border-color: #2e5a8f;
        box-shadow: 0 0 0 0.2rem rgba(46, 90, 143, 0.15);
    }

    .contact-input.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        display: none;
        color: #dc3545;
        font-size: 0.85rem;
        margin-top: 5px;
    }

    .contact-input.is-invalid ~ .invalid-feedback {
        display: block;
    }

    .btn-submit-contact {
        background: linear-gradient(90deg, #4a1a5c 0%, #2e5a8f 100%);
        color: white;
        border: none;
        padding: 14px 60px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 1px;
        transition: all 0.3s;
        position: relative;
    }

    .btn-submit-contact:hover:not(:disabled) {
        background: linear-gradient(90deg, #3a0a4c 0%, #1e4a7f 100%);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(74, 26, 92, 0.3);
    }

    .btn-submit-contact:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    /* Alert Messages */
    .alert {
        border-radius: 10px;
        border: none;
        font-weight: 500;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
    }

    /* Lokasi Section */
    .lokasi-section-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 40px;
        text-align: center;
        letter-spacing: 1px;
    }

    .lokasi-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        height: 100%;
        transition: all 0.3s;
    }

    .lokasi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    }

    .lokasi-card-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2e5a8f;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }

    .lokasi-card-content p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .lokasi-card-content strong {
        color: #333;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-title-hubungi {
            font-size: 2rem;
        }

        .contact-form {
            padding: 25px;
        }

        .btn-submit-contact {
            width: 100%;
            padding: 14px 30px;
        }
    }
</style>
@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const submitLoader = document.getElementById('submitLoader');
    const alertMessage = document.getElementById('alertMessage');
    const alertText = document.getElementById('alertText');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Disable button
        submitBtn.disabled = true;
        submitText.textContent = 'MENGIRIM...';
        submitLoader.style.display = 'inline-block';

        // Clear previous errors
        clearErrors();

        try {
            // Get reCAPTCHA token
        let token = '';
        await new Promise(resolve => {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'contact'}).then(function(t) {
                    token = t;
                    resolve();
                });
            });
        });
                    
            // Prepare form data
            const formData = new FormData(form);
            formData.append('recaptcha_token', token);

            // Send request
            const response = await fetch('{{ route('contact.store') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                },
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                showAlert('success', data.message);
                form.reset();
            } else {
                if (data.errors) {
                    showValidationErrors(data.errors);
                } else {
                    showAlert('danger', data.message);
                }
            }

        } catch (error) {
            showAlert('danger', 'Terjadi kesalahan. Silakan coba lagi.');
            console.error('Error:', error);
        } finally {
            // Re-enable button
            submitBtn.disabled = false;
            submitText.textContent = 'KIRIM PESAN';
            submitLoader.style.display = 'none';
        }
    });

    function showAlert(type, message) {
        alertMessage.className = `alert alert-${type} alert-dismissible fade show`;
        alertMessage.style.display = 'block';
        alertText.textContent = message;
        
        // Auto hide after 5 seconds
        setTimeout(() => {
            closeAlert();
        }, 5000);

        // Scroll to alert
        alertMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function closeAlert() {
        alertMessage.style.display = 'none';
        alertMessage.className = 'alert alert-dismissible fade';
    }

    function showValidationErrors(errors) {
        for (const [field, messages] of Object.entries(errors)) {
            const input = document.getElementById(field);
            if (input) {
                input.classList.add('is-invalid');
                const feedback = input.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = messages[0];
                }
            }
        }
    }

    function clearErrors() {
        const inputs = form.querySelectorAll('.contact-input');
        inputs.forEach(input => {
            input.classList.remove('is-invalid');
        });
    }

    // Clear error on input
    form.querySelectorAll('.contact-input').forEach(input => {
        input.addEventListener('input', function() {
            this.classList.remove('is-invalid');
        });
    });
</script>
@endsection