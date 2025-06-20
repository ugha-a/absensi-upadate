<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/dist/images/favicon.svg') }}" type="image/x-icon">
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f0fdfa 100%);
            min-height: 100vh;
        }

        .dashboard .card {
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
        }

        .dashboard .card:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
        }

        .dashboard .card-icon {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            padding-bottom: 12px;
            padding-right: 10px;
            /* align-self: : center; */
            justify-content: center;
            color: #fff;
        }

        /* Icon warna berbeda */
        .card-icon.bg-primary {
            background-color: #6366f1 !important;
        }

        .card-icon.bg-success {
            background-color: #10b981 !important;
        }

        .card-icon.bg-warning {
            background-color: #f59e42 !important;
        }

        .card-icon.bg-danger {
            background-color: #f43f5e !important;
        }

        .card-icon.bg-info {
            background-color: #0ea5e9 !important;
        }

        .card-icon.bg-purple {
            background-color: #a21caf !important;
        }


        .dashboard h5.card-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: #334155;
        }

        .dashboard h6 {
            font-size: 1.7rem;
            font-weight: 800;
            color: #0f172a;
        }

        .dashboard .text-muted {
            color: #64748b !important;
        }

        .bg-purple {
            background-color: #a21caf !important;
            color: #fff;
        }
    </style>
    @yield('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo d-flex align-items-center overflow-hidden" style="max-width: 100%;">
                            <img class="img-error rounded-circle me-2"
                                src="{{ asset('assets/dist/images/logo/logio.png') }}" alt="Logo"
                                style="width: 60px; height: 60px; object-fit: cover;">
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block">
                                <i class="bi bi-x bi-middle"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="sidebar-menu">
                    @include('template-admin.sidebar')
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                @yield('header-content')
            </div>
            <div class="page-content">
                <section class="row">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>
    </div>




    </div>
    </div>
    <script src="{{ asset('assets/dist/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/dist/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/dist/js/main.js') }}"></script>
    @yield('js')
</body>

</html>
