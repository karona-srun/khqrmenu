<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KH QRMenu | {{ $store->name }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Update brand colors to match Foodpanda */
        :root {
            --foodpanda-pink: #d70f64;
            --foodpanda-gray: #333333;
        }

        body {
            background-color: #f8f9fa;
            overflow: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--foodpanda-pink) !important;
        }

        .nav-pills .nav-link.active {
            background-color: var(--foodpanda-pink);
            color: white;
        }

        .card-title {
            font-weight: bold;
            color: var(--foodpanda-gray);
        }

        /* Add rating styles */
        .store-rating {
            color: #ffc107;
            font-size: 0.9rem;
        }

        /* Add store info styles */
        .store-info {
            color: #666;
            font-size: 0.9rem;
        }

        /* Add this to your existing styles */
        .section-heading {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 1.5rem;
        }

        .section-heading::before,
        .section-heading::after {
            content: "";
            height: 1px;
            background-color: #dee2e6;
            width: 50px !important;
        }

        /* Add this style for hidden products */
        .product-card.hidden {
            display: none;
        }

        /* Add styles for the powered-by section */
        .powered-by {
            font-size: 0.85rem;
            color: #666;
            margin-top: 20px;
        }

        .powered-by a {
            color: var(--foodpanda-pink);
            text-decoration: none;
            font-size: 24px;
            font-weight: 600;
        }

        .powered-by a:hover {
            text-decoration: underline;
        }

        .img-fluid {
            width: 100% !important;
            height: auto !important;
            border-radius: 10px !important;
        }

        .img-logo {
            width: -webkit-fill-available;
            height: auto !important;
            border-radius: 10px !important;
            position: relative; 
        }

        .modal-header {
            border: none !important;
        }


        @media (min-width: 430px) {
            .col-sm-2 {
                flex: 0 0 auto !important;
                width: 50% !important;
            }
        }

        @media (min-width: 576px) {

            .col-sm-2 {
                flex: 0 0 auto !important;
                width: 16.66666667% !important;
            }
        }

        /* Add these new styles */
        .nav-pills-wrapper {
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* IE and Edge */
        }

        .nav-pills-wrapper::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }

        .nav-pills {
            flex-wrap: nowrap;
            padding: 5px;
        }

        .nav-pills .nav-link {
            white-space: nowrap;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- Add jQuery before other scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container pt-2"> 
    <!-- Navbar -->
    <div class="bg-white pb-4" style="background-image: url('{{ asset('assets/images/background.png') }}'); background-size: cover; background-position: center; border-radius: 10px;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- <a class="navbar-brand" href="#">
                    <img src="https://via.placeholder.com/30" alt="Logo" class="me-2"> KH QRMenu | {{ $store->name }}
                </a> -->
                <div class="dropdown ms-auto">
                    <button class="btn btn-light dropdown-toggle" type="button" id="addressDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-language me-1"></i> Languages
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="addressDropdown">
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('flags/kh.png') }}" width="24" alt="" srcset="" class="me-2"> Khmer</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('flags/en.png') }}" width="24" alt="" srcset="" class="me-2"> English</a></li>
                        <li><a class="dropdown-item" href="#"><img src="{{ asset('flags/zh.png') }}" width="24" alt="" srcset="" class="me-2"> Chinese</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row align-items-center menu-header px-2">
                <div class="col-sm-2">
                    <img src="{{ $store->logo ? asset('storage/'.$store->logo) : asset('assets/images/browser_file.png') }}" alt="Store Logo" class="img-logo">
                </div>
                <div class="col-sm-10" style="margin-left: 0px;">
                    <h3 class="mb-0">{{ $store->name }}</h3>
                    <!-- <div class="store-rating">
                    <i class="fas fa-star"></i> 
                    <span>{{ $store->rating ?? '5.0' }}</span>
                    <span>({{ $store->reviews_count ?? '500+' }} ratings)</span>
                </div> -->
                    <div class="store-info mt-0">
                        <!-- <i class="far fa-clock"></i> {{ $store->operating_hours ?? '09:00 - 20:30' }} -->
                        <br>
                        <i class="fas fa-map-marker-alt"></i> {{ $store->location ?? 'Location not specified' }}
                        <br>
                        <i class="fas fa-phone"></i> {{ $store->phone_number ?? 'Phone number not specified' }}
                    </div>
                    <span class="discount-text">{{ $store->description }}</span>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="nav-pills-wrapper">
                <ul class="nav nav-pills justify-content-start">
                    @foreach($categories as $cate)
                    <li class="nav-item me-2 m-1">
                        <a class="nav-link active" href="#{{$cate->name}}" id="#{{ $cate->name }}">{{ $cate->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="container mt-4 mb-4">
            <div class="input-box">
                <i class="uil uil-search"></i>
                <input type="text" id="searchInput" class="custom-input form-control-sm" placeholder="Search menus..." />
                <button class="button">Search</button>
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-4 mb-4">

        <div class="row">
            @foreach($categories as $category)
            <h4 class="section-heading mt-4 mb-4" id="{{ $category->name }}">{{ $category->name }}</h4>
            <div class="row">
            @foreach($category->products as $product)
            <div class="col-md-4 col-sm-2 product-card my-3" data-product-name="{{ strtolower($product->name) }}" data-product-description="{{ strtolower($product->description) }}" data-product-photo="{{ $product->photo ? asset('storage/'.$product->photo) : 'https://via.placeholder.com/300x200' }}">
                <div class="card" style="border: none; cursor: pointer;">
                    <img src="{{ $product->photo ?  asset('storage/'.$product->photo) : 'https://via.placeholder.com/300x200' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <span class="price">${{$product->cost_usd}}</span>
                        <span class="price">{{$product->cost_khr}}៛</span>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="powered-by">Powered by <br> <a href="https://www.khqrmenu.com">KhQRMenu</a> <br> <small>DIGITAL MENU</small></p>
                <p class="powered-by">© {{now()->year}} K2Digital. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                let searchTerm = $(this).val().toLowerCase();

                $('.product-card').each(function() {
                    let productName = $(this).data('product-name');
                    let productDescription = $(this).data('product-description');

                    if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
                        $(this).removeClass('hidden');
                    } else {
                        $(this).addClass('hidden');
                    }
                });
            });

            // Add click event to product cards
            $('.product-card').on('click', function() {
                let productPhoto = $(this).data('product-photo');
                $('#modalImage').attr('src', productPhoto);
                $('#imageModal').modal('show');
                $('#productName').text($(this).data('product-name'));
                $('#productDescription').text($(this).data('product-description'));
            });
        });
    </script>

    <!-- Modal Structure -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Product Image">
                    <p class="text-start">{{ $store->name }}</p>
                    <p class="text-start mt-1" id="productName"></p>
                    <p class="text-start" id="productDescription"></p>
                    <hr>
                    <div class="row justify-content-center mt-2">
                        <p class="col-sm-3 justify-content-center"> <a href="{{ $store->facebook_link }}" target="_blank"> <img src="{{ asset('assets/icons/facebook.png') }}" width="24" alt="" srcset="" class="me-2"> </a> </p>
                        <p class="col-sm-3 justify-content-center"> <a href="{{ $store->telegram_link }}" target="_blank"> <img src="{{ asset('assets/icons/telegram.png') }}" width="24" alt="" srcset="" class="me-2"> </a> </p>
                        <p class="col-sm-3"> <a href="{{ $store->instagram_link }}" target="_blank"> <img src="{{ asset('assets/icons/instagram.png') }}" width="24" alt="" srcset="" class="me-2"> </a> </p>
                        <p class="col-sm-3"> <a href="{{ $store->google_map_link }}" target="_blank"> <img src="{{ asset('assets/icons/googlemaps.png') }}" width="24" alt="" srcset="" class="me-2"> </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>