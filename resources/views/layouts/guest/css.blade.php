<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/templatemo-lugx-gaming.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}" />

<style>
    /* Login Form Styles */
    .login-form .form-control {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        padding: 15px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .login-form .form-control:focus {
        background-color: rgba(255, 255, 255, 0.15);
        border-color: #ff511a;
        color: #fff;
        box-shadow: 0 0 0 0.25rem rgba(255, 81, 26, 0.25);
    }

    .login-form .form-control::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .login-form .btn-outline-secondary {
        border-color: rgba(255, 255, 255, 0.3);
        color: rgba(255, 255, 255, 0.8);
        padding: 10px;
    }

    .login-form .btn-outline-secondary:hover {
        background-color: #ff511a;
        border-color: #ff511a;
        color: #fff;
    }

    .login-benefits li {
        padding-left: 10px;
        color: rgba(255, 255, 255, 0.9);
    }

    .divider {
        color: rgba(255, 255, 255, 0.5);
    }

    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    .divider::before {
        margin-right: .25em;
    }

    .divider::after {
        margin-left: .25em;
    }

    /* Validation Styles */
    .invalid-feedback {
        display: block;
        margin-top: 5px;
        font-size: 0.875em;
        color: #ff6b6b;
    }

    .is-invalid {
        border-color: #ff6b6b !important;
    }

    .is-invalid:focus {
        box-shadow: 0 0 0 0.25rem rgba(255, 107, 107, 0.25) !important;
    }

    /* Tambahan agar card terlihat seragam */
    .trending .item {
        margin-bottom: 30px;
        transition: transform 0.3s;
    }

    .trending .item:hover {
        transform: translateY(-10px);
    }

    .trending .item .down-content h4 {
        font-size: 18px;
        margin-bottom: 5px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .trending .item .price {
        background-color: #ee626b !important;
        font-size: 12px !important;
        padding: 5px 10px !important;
    }

    btn-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: none;
        color: white !important;
        text-decoration: none;
    }

    .btn-detail {
        background-color: #00bcd4;
        /* Cyan */
        flex-grow: 1;
        /* Membuat tombol detail sedikit lebih lebar */
    }

    .btn-detail:hover {
        background-color: #008c9e;
        transform: translateY(-3px);
    }

    .btn-edit {
        background-color: #f39c12;
        /* Orange/Yellow */
    }

    .btn-edit:hover {
        background-color: #d3830e;
        transform: translateY(-3px);
    }

    .btn-delete {
        background-color: #ee626b;
        /* Red/Pink Lugx */
    }

    .btn-delete:hover {
        background-color: #d1454f;
        transform: translateY(-3px);
    }

    /* Agar nama panjang tidak merusak tata letak card */
    .down-content h4 {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .action-buttons-wrapper {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        gap: 10px !important;
        /* Jarak antar tombol */
    }

    /* Ukuran tombol bulat agar presisi */
    .btn-round {
        width: 35px !important;
        height: 35px !important;
        line-height: 35px !important;
        /* Menjaga icon di tengah */
        text-align: center;
        display: inline-block;
        border-radius: 50% !important;
        color: white !important;
        border: none !important;
        padding: 0 !important;
        transition: 0.3s;
    }

    .btn-view {
        background-color: #00bcd4 !important;
    }

    .btn-edit {
        background-color: #f39c12 !important;
    }

    .btn-delete {
        background-color: #ee626b !important;
    }

    .btn-round:hover {
        transform: translateY(-3px);
        opacity: 0.9;
    }

    .btn-round i {
        font-size: 14px;
        vertical-align: middle;
    }

    /* Styling tombol agar bulat sempurna dan sejajar */
    .btn-round {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff !important;
        transition: 0.3s;
        border: none;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-detail {
        background-color: #00bcd4;
    }

    .btn-edit {
        background-color: #f39c12;
    }

    .btn-delete {
        background-color: #ee626b;
    }

    .btn-round:hover {
        transform: scale(1.1);
        opacity: 0.9;
    }

    .btn-round i {
        font-size: 14px;
    }

    .social-btn {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        color: #444;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
        border: 1px solid #eee;
    }

    .social-btn:hover {
        background: #0d6efd;
        color: #fff;
        transform: translateY(-3px);
    }

    /* CSS Khusus untuk Layout Modern */
    .social-icon-modern {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.15);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-icon-modern:hover {
        background: white;
        color: #0d6efd;
        transform: scale(1.1);
    }

    .info-grid-modern {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .info-item-modern {
        background: #fcfcfc;
        border: 1px solid #f0f0f0;
        padding: 20px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .info-item-modern:hover {
        border-color: #0d6efd;
        background: #fff;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }

    .info-item-modern.full-width {
        grid-column: span 2;
    }

    .info-item-modern .icon-wrap {
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0d6efd;
        font-size: 1.2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        margin-right: 15px;
    }

    .info-item-modern .text-wrap small {
        display: block;
        color: #adb5bd;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .info-item-modern .text-wrap strong {
        color: #2d3436;
        font-size: 1.1rem;
    }

    @media (max-width: 991px) {

        .info-item-modern.full-width,
        .info-grid-modern {
            grid-template-columns: 1fr;
        }

        .info-item-modern.full-width {
            grid-column: span 1;
        }
    }
</style>