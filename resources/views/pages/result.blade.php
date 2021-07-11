
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/fantra/fantra/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 02:40:41 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-popover-x.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>{{config('app.name')}}</title>

    <style>
        .dataTables_filter{
            margin-left: 750px !important;
        }
        .dataTables_filter label{
            color: #6c0092;  
        }
        .dataTables_length{
            display: block !important;
            margin-bottom: -90px !important;
        }
        .dataTables_length select option {
            color: #6c0092;
        }
        .dataTables_length label {
            color: #6c0092;
        }
        .dataTables_info {
            color: #6c0092;
        }
    </style>

    <style>
        .angka span{
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-size: 18px;
            font-weight: 600;
            background-image: -o-linear-gradient(4deg, #ec038b 0%, #fb6468 44%, #fbb936 100%);
            background-image: linear-gradient(
        86deg
        , #ec038b 0%, #fb6468 44%, #fbb936 100%);
            -webkit-box-shadow: 0px 7px 7px 0px rgb(243 42 126 / 23%);
            box-shadow: 0px 7px 7px 0px rgb(243 42 126 / 23%);
        }
    </style>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="top-header">
    <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-area-inner">
                            <a href="{{route('index')}}" class="logo">
                            <img src="https://igao-prod-herokuapp-com.global.ssl.fastly.net/msl-website-assets/msl-logo.svg" alt="Michigan State Lottery Logo">
                            </a>
                            <div class="right-area">
                                <div class="log-reg-area">
                                    {{-- <a href="#" class="custom-button1" data-toggle="modal"
                                        data-target="#registerModal">Izena eman</a> --}}
                                    <a href="{{route('index')}}" class="custom-button2">Hogar</a>
                                </div>
                                {{-- <div class="cart-area">
                                    <div class="icon">
                                        <img src="assets/images/cart.png" alt="">
                                        <span>06</span>
                                    </div>
                                    <div class="amount">
                                        <h4 class="mony">$ 23.60</h4>
                                        <p>To checkout</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <ul class="menu">
                        <li>
                            <a href="index.html" class="active">Home</a>
                        </li>
                        <li>
                            <a href="single-lottery.html">Lottery</a>
                        </li>
                        <li>
                            <a href="result.html">Results</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="right-tools">
                        <select class="select-bar">
                            <option value="">BTC</option>
                            <option value="">BDT</option>
                            <option value="">USD</option>
                        </select>
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">IN</option>
                            <option value="">BN</option>
                        </select>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div> --}}
    </header>

    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="content">
                <h2 class="title">
                Resultados
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="{{route('index')}}">
                            Hogar
                        </a>
                    </li>

                    <li>
                        <a href="{{route('result')}}">RESULTADOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Results-Section========== -->
    <section class="results">
        <div class="top-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="image">
                            <img src="assets/images/result.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lottery-result result-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="result-box">
                            <div class="result-list">
                                <table class="table" id="table">
                                    <thead class="text-black" style="background-image: linear-gradient(
                                        7deg
                                        , #ec1379 0%, #6c0092 100%); color: white">
                                        <tr style="font-size:11px">
                                            <th>FECHA</th>
                                            <th>HORA</th>
                                            <th>1ST</th>
                                            <th>2ND</th>
                                            <th>3RD</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: #6c0092; font-size: 15px">
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Results-Section========== -->
    

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="container">
           
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-lg-6 text-lg-left">
                        <div class="copyr-text">
                            <span>
                                Copyright © 2000.All Rights Reserved By
                            </span>
                            <a href="{{route('index')}}">{{config('app.name')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="footer-top-area">
                            <div class="right">
                                <a href="#">
                                    <img src="assets/images/v2.png" alt="" width="300px" class="bg-white rounded">
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->
    <!-- All js link starts hear -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/bootstrap-popover-x.min.js"></script>
    <script src="assets/js/amd.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>

    @push('js')
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/js/DataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                'ordering': false,
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('result') }}",
                },
                columns: [{
                    data: 'tanggal',
                    name: 'tanggal'
                }, {
                    data: 'waktu',
                    name: 'waktu'
                }, {
                    data: 'no_satu',
                    name: 'no_satu'
                }, {
                    data: 'no_dua',
                    name: 'no_dua'
                }, {
                    data: 'no_tiga',
                    name: 'no_tiga'
                }]
            });
        });
    </script>

</body>


<!-- Mirrored from pixner.net/fantra/fantra/result.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 02:41:09 GMT -->
</html>