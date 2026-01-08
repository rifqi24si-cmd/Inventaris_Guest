@extends('layouts.guest.app')

@section('content')
<div class="main-banner" style="min-height: 80vh; display: flex; align-items: center; background: linear-gradient(135deg, #0d0d0d 0%, #1a1a2e 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h6 style="color: #ff511a; font-size: 1.1rem; letter-spacing: 2px; margin-bottom: 15px;">WELCOME BACK TO LUGX</h6>
                    <h2 style="color: #fff; font-size: 3.5rem; font-weight: 700; margin-bottom: 20px;">LOGIN TO YOUR ACCOUNT</h2>
                    <p style="color: #aaa; font-size: 1.1rem; max-width: 600px; margin: 0 auto 40px;">
                        Access your gaming profile, track your orders, and join our community of passionate gamers.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="login-card" style="background: rgba(255, 255, 255, 0.05); 
                                               backdrop-filter: blur(10px); 
                                               border-radius: 20px; 
                                               padding: 40px; 
                                               border: 1px solid rgba(255, 81, 26, 0.2);
                                               box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email Input -->
                        <div class="mb-4">
                            <label for="email" class="form-label" style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Email Address</label>
                            <input type="email" class="form-control-login @error('email') is-invalid @enderror" 
                                   id="email" name="email" placeholder="Enter your email" 
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Password Input -->
                        <div class="mb-4">
                            <label for="password" class="form-label" style="color: #fff; font-weight: 500; margin-bottom: 8px; display: block;">Password</label>
                            <input type="password" class="form-control-login @error('password') is-invalid @enderror" 
                                   id="password" name="password" placeholder="Enter your password" 
                                   required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <!-- Remember Me & Forgot Password -->
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" 
                                       id="remember" {{ old('remember') ? 'checked' : '' }}
                                       style="background-color: transparent; border-color: #ff511a; cursor: pointer;">
                                <label class="form-check-label" for="remember" style="color: #aaa; cursor: pointer;">
                                    Remember Me
                                </label>
                            </div>
                            
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-none" 
                                   style="color: #ff511a; font-size: 0.9rem; font-weight: 500;">
                                    Forgot Password?
                                </a>
                            @endif
                        </div>
                        
                        <!-- Login Button -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn-login">
                                LOGIN NOW
                            </button>
                        </div>
                        
                        <!-- Social Login Divider -->
                        <div class="divider d-flex align-items-center my-4">
                            <div class="line" style="flex-grow: 1; height: 1px; background: rgba(255, 255, 255, 0.2);"></div>
                            <span class="mx-3" style="color: #aaa; font-size: 0.9rem;">Or continue with</span>
                            <div class="line" style="flex-grow: 1; height: 1px; background: rgba(255, 255, 255, 0.2);"></div>
                        </div>
                        
                        <!-- Social Login Buttons -->
                        <div class="row g-3">
                            <div class="col-12">
                                <button type="button" class="btn-facebook w-100">
                                    <i class="fab fa-facebook-f me-2"></i> Continue with Facebook
                                </button>
                            </div>
                        </div>
                        
                        <!-- Register Link -->
                        <div class="text-center mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                            <p style="color: #aaa; margin-bottom: 5px;">Don't have an account?</p>
                            <a href="{{ route('register') }}" class="register-link">
                                Sign Up Here
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
    
    /* Login Button Styling */
    .btn-login {
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
    
    .btn-login:hover {
        background: linear-gradient(135deg, #ff6b3d 0%, #ff511a 100%);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 81, 26, 0.4);
    }
    
    .btn-login:active {
        transform: translateY(0);
    }
    
    /* Facebook Button Styling */
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
    
    /* Register Link Styling */
    .register-link {
        color: #ff511a;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: inline-block;
        padding: 5px 0;
        position: relative;
    }
    
    .register-link:hover {
        color: #ff6b3d;
        transform: translateY(-2px);
    }
    
    .register-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: #ff511a;
        transition: width 0.3s ease;
    }
    
    .register-link:hover::after {
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
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .main-banner h2 {
            font-size: 2.5rem !important;
        }
        
        .login-card {
            padding: 30px 25px !important;
        }
    }
    
    @media (max-width: 576px) {
        .main-banner h2 {
            font-size: 2rem !important;
        }
        
        .main-banner h6 {
            font-size: 1rem !important;
        }
        
        .login-card {
            padding: 25px 20px !important;
        }
    }
</style>
@endsection