<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/aos/dist/aos.css') }}">
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.min.css?v=4.0.0') }}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css?v=4.0.0') }}">
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/customizer.css') }}">
      
      <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.min.css') }}">
      
      

</head>
<!-- <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> -->
<body class="  ">
    <!-- loader Start -->
    {{-- <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div> --}}
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{url('/home')}}" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">KHQRMenu</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/home')}}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu" role="button" aria-expanded="false" aria-controls="horizontal-menu">
                            <i class="icon">
                                
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                    <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                    <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Menu</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="horizontal-menu" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('category')}}">
                                  <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> H </i>
                                  <span class="item-name">Menu Categories </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('products')}}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> D </i>
                                    <span class="item-name">Menus</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_id == 1)
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Settings</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                                <svg class="icon-20"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Store</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('setup-store') }}">
                                  <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                  <i class="sidenav-mini-icon"> B </i>
                                  <span class="item-name">SetUp Store</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                    <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                    <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Users</span>
                            <i class="right-icon">
                                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('users') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('users/create') }}">
                                    <i class="icon">
                                        <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> A </i>
                                    <span class="item-name">Add User</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    @endif
                </ul>
                <!-- Sidebar Menu End -->        </div>
        </div>
    </aside>    <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar navs-transparent">
          <div class="container-fluid navbar-inner">
            <a href="{{ url('/') }}" class="navbar-brand">
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
            <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown">
                    <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/images/Flag/flag001.png') }}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                    <span class="bg-primary"></span>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <div class="m-0 border-0 shadow-none card">
                            <div class="p-0 ">
                                <ul class="p-0 list-group list-group-flush">
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/images/Flag/flag-03.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/images/Flag/flag-04.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/images/Flag/flag-02.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/images/Flag/flag-05.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" href="#"><img src="{{ asset('assets/images/Flag/flag-06.png') }}" alt="img-flaf" class="img-fluid me-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                      <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                      </svg>
                      <span class="bg-danger dots"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Notifications</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="{{ asset('assets/images/shapes/01.png') }}" alt="">
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Emma Watson Bni</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">95 MB</p>
                                        <small class="float-end font-size-12">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
                      <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
                    </svg>
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                      <div class="m-0 shadow-none card">
                        <div class="py-3 card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                              <h5 class="mb-0 text-white">All Message</h5>
                            </div>
                        </div>
                        <div class="p-0 card-body ">
                            
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="{{ asset('assets/images/shapes/05.png') }}" alt="">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                    <small class="float-start font-size-12">5 Dec</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/avatars/01.png') }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/images/avatars/avtar_1.png') }}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/images/avatars/avtar_2.png') }}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/images/avatars/avtar_4.png') }}" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/images/avatars/avtar_5.png') }}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                    <img src="{{ asset('assets/images/avatars/avtar_3.png') }}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">Austin Robertson</h6>
                        <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/">Profile</a></li>
                    <li><a class="dropdown-item" href="/">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"       
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>          <!-- Nav Header Component Start -->
          <div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Hello Devs!</h1>
                                  <p>We are on a mission to help developers like you build successful projects for FREE.</p>
                              </div>
                              <div>
                                  <a href="" class="btn btn-link btn-soft-light">
                                      <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                          <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                                      </svg>
                                      Announcements
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="{{ asset('assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/images/dashboard/top-header1.png') }}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/images/dashboard/top-header2.png') }}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/images/dashboard/top-header3.png') }}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/images/dashboard/top-header4.png') }}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{ asset('assets/images/dashboard/top-header5.png') }}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0 mb-5">
        @yield('content')
    </div>
</div>
      </div>

        </main>
    <!-- <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <svg width="24" viewBox="0 0 24 24" class="animated-rotate icon-24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      </svg>
    </a> -->
    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <div class="d-flex align-items-center">
          <h3 class="offcanvas-title me-3" id="offcanvasExampleLabel">Settings</h3>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
        <div class="row">
          <div class="col-lg-12">
             <h5 class="mb-3">Scheme</h5>
            <div class="d-grid gap-3 grid-cols-3 mb-4">
              <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                  </svg>
                <span class="ms-2 "> Auto </span>
              </div>
    
               <div class="btn btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                  </svg>
                <span class="ms-2 "> Dark  </span>
              </div>
               <div class="btn btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                  <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
                <span class="ms-2 "> Light</span>
              </div>
            </div>
            <hr class="hr-horizontal"> 
            <div class="d-flex align-items-center justify-content-between">
            <h5 class="mt-4 mb-3">Color Customizer</h5>
            <button class="btn btn-transparent p-0 border-0" data-value="theme-color-default" data-info="#079aa2" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Default">
              <svg class="icon-18" width="18"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"/>
                <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"/>
              </svg>
            </button>
            </div>
            <div class="grid-cols-5 mb-4 d-grid gap-x-2">
              <div class="btn btn-border bg-transparent"  data-value="theme-color-blue"   data-info="#573BFF" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-1">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#00C3F9" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF" /></svg>
              </div>
              <div class="btn btn-border bg-transparent" data-value="theme-color-gray" data-info="#FD8D00" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-2">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#91969E" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-red" data-info="#366AF0" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-3">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#DB5363" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-yellow" data-info="#6410F1" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-4">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#EA6A12" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#6410F1" /></svg>
              </div>
              <div class="btn btn-border bg-transparent"  data-value="theme-color-pink" data-info="#25C799" data-setting="color-mode1" data-name="color" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Theme-5">
              <svg  class="customizer-btn icon-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" > <circle cx="12" cy="12" r="10" fill="#E586B3" /> <path d="M2,12 a1,1 1 1,0 20,0" fill="#25C799" /></svg>
              </div>
              
            </div>
            <hr class="hr-horizontal">
            <h5 class="mb-3 mt-4">Scheme Direction</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/01.png" alt="ltr" class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <img src="../assets/images/settings/light/01.png" alt="ltr" class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <span class=" mt-2"> LTR </span>
              </div>
               <div class="text-center">
                 <img src="../assets/images/settings/dark/02.png" alt="" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <img src="../assets/images/settings/light/02.png" alt="" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <span class="mt-2 "> RTL  </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Color</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-white">
                <span class=""> Default </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-dark">
                <span class=""> Dark </span>
              </div>
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-color">
                <span class=""> Color </span>
              </div>
              
              <div class="btn btn-border d-block" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-transparent">
                <span class=""> Transparent </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Types</h5>
            <div class="d-grid gap-3 grid-cols-3 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/03.png" alt="mini" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <img src="../assets/images/settings/light/03.png" alt="mini" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <span class="mt-2">Mini</span>
              </div>
              <div class="text-center">
               <img src="../assets/images/settings/dark/04.png" alt="hover" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
               <img src="../assets/images/settings/light/04.png" alt="hover" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                <span class="mt-2">Hover</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/05.png" alt="boxed" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                 <img src="../assets/images/settings/light/05.png" alt="boxed" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                <span class="mt-2">Boxed</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Sidebar Active Style</h5>
            <div class="d-grid gap-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="../assets/images/settings/dark/06.png" alt="rounded-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <img src="../assets/images/settings/light/06.png" alt="rounded-one-side" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <span class="mt-2">Rounded One Side</span>
              </div>
              <div class="text-center">
                <img src="../assets/images/settings/dark/07.png" alt="rounded-all" class="mode dark-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <img src="../assets/images/settings/light/07.png" alt="rounded-all" class="mode light-img img-fluid btn-border p-0 flex-column active mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <span class="mt-2">Rounded All</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/08.png" alt="pill-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                 <img src="../assets/images/settings/light/09.png" alt="pill-one-side" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                <span class="mt-2">Pill One Side</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/09.png" alt="pill-all" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                 <img src="../assets/images/settings/light/08.png" alt="pill-all" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                <span class="mt-2">Pill All</span>
              </div>
            </div>
            <hr class="hr-horizontal">
             <h5 class="mt-4 mb-3">Navbar Style</h5>
            <div class="d-grid gap-3 grid-cols-2 ">
              <div class=" text-center">
                <img src="../assets/images/settings/dark/11.png" alt="image" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <img src="../assets/images/settings/light/10.png" alt="image" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <span class="mt-2">Glass</span>
              </div>
              <div class="text-center">
                 <img src="../assets/images/settings/dark/10.png" alt="color" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                 <img src="../assets/images/settings/light/11.png" alt="color" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                <span class="mt-2">Color</span>
              </div>
              <div class=" text-center">
                 <img src="../assets/images/settings/dark/12.png" alt="sticky" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                 <img src="../assets/images/settings/light/12.png" alt="sticky" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                <span class="mt-2">Sticky</span>
              </div>
              <div class="text-center">
                  <img src="../assets/images/settings/dark/13.png" alt="transparent" class="mode dark-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                  <img src="../assets/images/settings/light/13.png" alt="transparent" class="mode light-img img-fluid btn-border p-0 flex-column mb-2" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                <span class="mt-2">Transparent</span>
              </div>
              <div class="btn btn-border active col-span-full mt-4 d-block" data-setting="navbar" data-name="navbar-default" data-value="default">
                <span class=""> Default Navbar</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Library Bundle Script -->
    <script src="{{ asset('assets/js/core/libs.min.js') }}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{ asset('assets/js/core/external.min.js') }}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{ asset('assets/js/charts/widgetcharts.js') }}"></script>
    
    <!-- mapchart Script -->
    <script src="{{ asset('assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('assets/js/charts/dashboard.js') }}" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{ asset('assets/js/plugins/fslightbox.js') }}"></script>
    
    <!-- Settings Script -->
    <script src="{{ asset('assets/js/plugins/setting.js') }}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{ asset('assets/js/plugins/slider-tabs.js') }}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{ asset('assets/js/plugins/form-wizard.js') }}"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}"></script>
    
    <!-- App Script -->
    <script src="{{ asset('assets/js/hope-ui.js') }}" defer></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
    <script>
      $(document).ready(function () {

        $('.triggerButton').on('click', function () {
            $('#fileInput').click();
        });

        $('#fileInput').on('change', function () {
              const file = this.files[0];
              if (file) {
                  const reader = new FileReader();
                  reader.onload = function (e) {
                      $('#preview')
                          .attr('src', e.target.result)
                          .show(); // Show the preview image
                  }
                  reader.readAsDataURL(file);
              }
        });
      });
    </script>
  </body>
</html>