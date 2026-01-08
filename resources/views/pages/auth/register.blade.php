@extends('layouts.guest.app')

@section('content')
    <div class="main-banner"
        style="min-height: 80vh; display: flex; align-items: center; background: linear-gradient(135deg, #0d0d0d 0%, #1a1a2e 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h6 style="color: #ee626b; font-size: 1.1rem; letter-spacing: 2px; margin-bottom: 15px;">GABUNG
                            ASSET-TRACK</h6>
                        <h2 style="color: #fff; font-size: 3.5rem; font-weight: 700; margin-bottom: 20px;">BUAT AKUN BARU
                        </h2>
                        <p style="color: #aaa; font-size: 1.1rem; max-width: 600px; margin: 0 auto 40px;">
                            Mulai kelola inventaris Anda secara profesional. Daftarkan akun untuk memantau pergerakan,
                            pemeliharaan, dan status aset secara real-time.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="register-card" style="background: rgba(255, 255, 255, 0.05); 
                                                     backdrop-filter: blur(10px); 
                                                     border-radius: 20px; 
                                                     padding: 40px; 
                                                     border: 1px solid rgba(238, 98, 107, 0.2);
                                                     box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="name" class="form-label"
                                        style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Nama
                                        Lengkap</label>
                                    <input type="text" class="form-control-login @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Masukkan nama lengkap Anda"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        style="background: rgba(255,255,255,0.1); border: 1px solid #444; color: #fff; border-radius: 10px; padding: 12px; width: 100%;">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert" style="color: #ee626b; font-size: 0.8rem;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="email" class="form-label"
                                        style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Alamat
                                        Email</label>
                                    <input type="email" class="form-control-login @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Masukkan email aktif"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        style="background: rgba(255,255,255,0.1); border: 1px solid #444; color: #fff; border-radius: 10px; padding: 12px; width: 100%;">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert" style="color: #ee626b; font-size: 0.8rem;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="password" class="form-label"
                                        style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Kata
                                        Sandi</label>
                                    <input type="password"
                                        class="form-control-login @error('password') is-invalid @enderror" id="password"
                                        name="password" placeholder="Buat kata sandi" required autocomplete="new-password"
                                        style="background: rgba(255,255,255,0.1); border: 1px solid #444; color: #fff; border-radius: 10px; padding: 12px; width: 100%;">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert" style="color: #ee626b; font-size: 0.8rem;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="password-confirm" class="form-label"
                                        style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Konfirmasi
                                        Sandi</label>
                                    <input type="password" class="form-control-login" id="password-confirm"
                                        name="password_confirmation" placeholder="Ulangi kata sandi" required
                                        autocomplete="new-password"
                                        style="background: rgba(255,255,255,0.1); border: 1px solid #444; color: #fff; border-radius: 10px; padding: 12px; width: 100%;">
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required
                                            style="background-color: transparent; border-color: #ee626b; cursor: pointer;">
                                        <label class="form-check-label" for="terms"
                                            style="color: #aaa; cursor: pointer; margin-left: 5px;">
                                            Saya setuju dengan <a href="#"
                                                style="color: #ee626b; text-decoration: none;">Syarat & Ketentuan</a>
                                            serta <a href="#" style="color: #ee626b; text-decoration: none;">Kebijakan
                                                Privasi</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn-register"
                                    style="background: #ee626b; color: #fff; border: none; padding: 12px; border-radius: 25px; font-weight: 700; cursor: pointer;">
                                    DAFTAR SEKARANG
                                </button>
                            </div>

                            <div class="divider d-flex align-items-center my-4">
                                <div class="line" style="flex-grow: 1; height: 1px; background: rgba(255, 255, 255, 0.2);">
                                </div>
                                <span class="mx-3" style="color: #aaa; font-size: 0.9rem;">Atau daftar dengan</span>
                                <div class="line" style="flex-grow: 1; height: 1px; background: rgba(255, 255, 255, 0.2);">
                                </div>
                            </div>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <button type="button" class="btn-facebook w-100"
                                        style="background: #3b5998; color: #fff; border: none; padding: 10px; border-radius: 10px;">
                                        <i class="fab fa-facebook-f me-2"></i> Facebook
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn-google w-100"
                                        style="background: #fff; color: #444; border: none; padding: 10px; border-radius: 10px;">
                                        <i class="fab fa-google me-2"></i> Google
                                    </button>
                                </div>
                            </div>

                            <div class="text-center mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                                <p style="color: #aaa; margin-bottom: 5px;">Sudah punya akun?</p>
                                <a href="{{ route('login') }}" class="login-link"
                                    style="color: #ee626b; font-weight: 700; text-decoration: none;">
                                    Masuk Di Sini
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Form Control Styling */
        .form-control-login {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control-login:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ff511a;
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 81, 26, 0.1);
        }

        .form-control-login::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        /* Register Button Styling */
        .btn-register {
            background: linear-gradient(135deg, #ff511a 0%, #ff6b3d 100%);
            border: none;
            color: white;
            padding: 16px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-register:hover {
            background: linear-gradient(135deg, #ff6b3d 0%, #ff511a 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 81, 26, 0.4);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        /* Social Button Styling */
        .btn-facebook {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 14px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-facebook:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .btn-facebook i {
            color: #1877F2;
            font-size: 1.2rem;
        }

        .btn-google {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 14px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-google:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .btn-google i {
            color: #DB4437;
            font-size: 1.2rem;
        }

        /* Login Link Styling */
        .login-link {
            color: #ff511a;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-block;
            padding: 5px 0;
            position: relative;
        }

        .login-link:hover {
            color: #ff6b3d;
            transform: translateY(-2px);
        }

        .login-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #ff511a;
            transition: width 0.3s ease;
        }

        .login-link:hover::after {
            width: 100%;
        }

        /* Checkbox Custom Styling */
        .form-check-input:checked {
            background-color: #ff511a;
            border-color: #ff511a;
        }

        .form-check-input:focus {
            border-color: #ff511a;
            box-shadow: 0 0 0 0.25rem rgba(255, 81, 26, 0.25);
        }

        /* Invalid Feedback Styling */
        .invalid-feedback {
            color: #ff6b6b;
            font-size: 0.9rem;
            margin-top: 5px;
            display: block;
        }

        .is-invalid {
            border-color: #ff6b6b !important;
        }

        /* Benefit Items */
        .benefit-item {
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .benefit-item:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        /* Password Strength Indicator */
        .password-strength {
            margin-top: 5px;
            font-size: 0.85rem;
        }

        .strength-weak {
            color: #ff6b6b;
        }

        .strength-medium {
            color: #ffa726;
        }

        .strength-strong {
            color: #4caf50;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-banner h2 {
                font-size: 2.5rem !important;
            }

            .register-card {
                padding: 30px 25px !important;
            }

            .benefits-section {
                padding: 25px 20px !important;
            }
        }

        @media (max-width: 576px) {
            .main-banner h2 {
                font-size: 2rem !important;
            }

            .main-banner h6 {
                font-size: 1rem !important;
            }

            .register-card {
                padding: 25px 20px !important;
            }

            .row {
                margin-left: -10px;
                margin-right: -10px;
            }

            .col-md-6,
            .col-md-12 {
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Password strength indicator
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password-confirm');

            if (passwordInput) {
                const strengthIndicator = document.createElement('div');
                strengthIndicator.className = 'password-strength';
                passwordInput.parentNode.appendChild(strengthIndicator);

                passwordInput.addEventListener('input', function () {
                    const password = this.value;
                    let strength = 'weak';
                    let text = 'Weak password';

                    if (password.length >= 8) {
                        if (/[A-Z]/.test(password) && /[0-9]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
                            strength = 'strong';
                            text = 'Strong password';
                        } else if (password.length >= 8 && (/[A-Z]/.test(password) || /[0-9]/.test(password))) {
                            strength = 'medium';
                            text = 'Medium strength password';
                        }
                    }

                    strengthIndicator.textContent = text;
                    strengthIndicator.className = 'password-strength strength-' + strength;
                });
            }

            // Password confirmation check
            if (passwordInput && confirmPasswordInput) {
                const confirmIndicator = document.createElement('div');
                confirmIndicator.className = 'password-confirm';
                confirmPasswordInput.parentNode.appendChild(confirmIndicator);

                function checkPasswords() {
                    if (passwordInput.value && confirmPasswordInput.value) {
                        if (passwordInput.value === confirmPasswordInput.value) {
                            confirmIndicator.textContent = '✓ Passwords match';
                            confirmIndicator.style.color = '#4caf50';
                            confirmPasswordInput.style.borderColor = '#4caf50';
                        } else {
                            confirmIndicator.textContent = '✗ Passwords do not match';
                            confirmIndicator.style.color = '#ff6b6b';
                            confirmPasswordInput.style.borderColor = '#ff6b6b';
                        }
                    } else {
                        confirmIndicator.textContent = '';
                        confirmPasswordInput.style.borderColor = '';
                    }
                }

                passwordInput.addEventListener('input', checkPasswords);
                confirmPasswordInput.addEventListener('input', checkPasswords);
            }

            // Form validation
            const form = document.querySelector('form');
            form.addEventListener('submit', function (e) {
                const terms = document.getElementById('terms');
                if (!terms.checked) {
                    e.preventDefault();
                    alert('Please agree to the Terms & Conditions and Privacy Policy');
                    terms.focus();
                }
            });
        });
    </script>
@endsection