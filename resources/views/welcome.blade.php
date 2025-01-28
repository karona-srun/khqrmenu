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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://placehold.co/50x50" class="me-2"> KHQRMenu
            </a>
            
            <span class="ms-auto">Select your address</span>
        </div>
    </nav>
    <!-- Menu Header -->
    <div class="container mt-4">
        <div class="row align-items-center menu-header">
            <div class="col-md-2">
                <img src="https://placehold.co/100x100" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>KHQRMenu</h1>
                <p>Scan QR Code to order food</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>