<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KH QRMenu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ff2b85 !important;
        }
        .discount-text {
            color: red;
            font-size: 0.9rem;
            margin-left: 10px;
        }
        .menu-header img {
            border-radius: 10px;
        }
        .nav-pills .nav-link {
            color: #333;
            border-radius: 20px;
            margin: 5px;
        }
        .nav-pills .nav-link.active {
            background-color: #ff2b85;
            color: white;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: box-shadow 0.3s;
        }
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 150px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
            color: #ff2b85;
        }
        .price {
            font-size: 1.1rem;
            font-weight: bold;
        }
        body {
        background-color: #f8f9fa;
        overflow: auto; /* Hide scrollbars */
        -ms-overflow-style: none; /* Internet Explorer 10+ */
        scrollbar-width: none; /* Firefox */
        }
        body::-webkit-scrollbar {
            display: none; /* WebKit browsers */
        }

        /* Other styles remain the same */
        .navbar-brand {
            font-weight: bold;
            color: #ff2b85 !important;
        }

        .hero {
            background-color: #f8f9fa;
        }
        
        .features {
            background-color: #dc3545;
        }
        
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        
        .text-danger {
            color: #dc3545 !important;
        }
        
        /* Add Bootstrap Icons */
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css");
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://placehold.co/50x50" alt="KHQRMenu" class="me-2" height="30"/> KHQRMenu
            </a>
        </div>
    </nav>

    <section class="hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">A better experience with QR menu</h1>
                    <p class="lead mb-4">KHQRMenu is designed to enhance your customers' dining experience and streamline your operations. With our user-friendly interface, you can easily update and customize your menu in real-time, ensuring that your offerings are always accurate and up-to-date.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-danger px-4">Contact Us</a>
                        <a href="#demo" class="btn btn-outline-dark px-4">Live Demo</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <img src="https://placehold.co/50x50" alt="App Preview" class="img-fluid"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features bg-danger text-white py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why using QR code as menu?</h2>
            <p class="text-center mb-5">Using QR codes as menus offers several advantages. Firstly, it eliminates the need for physical menus, reducing the risk of spreading germs or viruses through contact. Additionally, QR codes allow for easy and quick access to menu options, providing a seamless and convenient dining experience for customers.</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-phone fs-1 mb-3"></i>
                        <h3>Mobile Friendly</h3>
                        <p>With just a scan, customers can easily access the menu on their smartphones without the need for physical menus or waiting for a server.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-lightning fs-1 mb-3"></i>
                        <h3>Faster Speed</h3>
                        <p>Ability to provide a fast and efficient dining experience with just a quick scan of the QR code.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-gear fs-1 mb-3"></i>
                        <h3>Easy to Maintain</h3>
                        <p>Can be updated quickly and effortlessly, ensuring that the information provided to customers is always accurate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Control Section -->
    <section class="admin-control py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h5 class="text-danger mb-3">Managing faster</h5>
                    <h2 class="mb-4">A better admin control</h2>
                    <p class="mb-4">Having a better admin control over the QR code menu system provides restaurant owners with greater flexibility and convenience. You can easily update and modify their menus in real-time</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-check-circle text-danger me-2"></i>Manage restaurant information</li>
                        <li class="mb-3"><i class="bi bi-check-circle text-danger me-2"></i>Manage products categories</li>
                        <li class="mb-3"><i class="bi bi-check-circle text-danger me-2"></i>Manage products</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <!-- <img src="/images/admin-dashboard.png" alt="Admin Dashboard" class="img-fluid rounded shadow"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Simple no-tricks pricing</h2>
            <p class="mb-5">We offer transparent and affordable pricing options for our digital menu, without any hidden fees or complicated contracts. Our goal is to provide a straightforward and cost-effective solution that meets the needs of your business.</p>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>