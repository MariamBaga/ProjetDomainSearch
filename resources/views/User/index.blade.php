@extends('layouts.Usermaster')

@section('title', 'Tableau de Bord')

@section('content')
    <div class="content-inner pb-0 container" id="page_layout">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2 align-items-center">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_207_7366)">
                                        <path
                                            d="M23.641 14.9019C22.0377 21.3339 15.521 25.2439 9.09824 23.6405C2.66605 22.0371 -1.24389 15.5208 0.359518 9.09805C1.96283 2.66605 8.47002 -1.24389 14.9022 0.359519C21.325 1.95346 25.2444 8.46983 23.641 14.9019Z"
                                            fill="url(#paint0_linear_207_7366)"></path>
                                        <path
                                            d="M17.7131 10.5045C17.9475 8.91074 16.7381 8.04824 15.0693 7.47637L15.6131 5.31074L14.3006 4.98262L13.7756 7.09199C13.4287 7.00762 13.0725 6.92324 12.7162 6.84824L13.2412 4.72949L11.9287 4.40137L11.3943 6.55762C11.1037 6.49199 10.8225 6.42637 10.5506 6.36074V6.35137L8.73184 5.90137L8.38496 7.30762C8.38496 7.30762 9.35996 7.53262 9.34121 7.54199C9.87559 7.67324 9.96934 8.02949 9.95059 8.31074L9.33184 10.7764C9.36934 10.7857 9.41621 10.7951 9.47246 10.8232C9.42559 10.8139 9.37871 10.8045 9.33184 10.7857L8.46934 14.2357C8.40371 14.3951 8.23496 14.6389 7.86934 14.5451C7.87871 14.5639 6.91309 14.3107 6.91309 14.3107L6.25684 15.8201L7.97246 16.2514C8.29121 16.3357 8.60059 16.4107 8.90996 16.4951L8.36621 18.6795L9.67871 19.0076L10.2225 16.842C10.5787 16.9357 10.935 17.0295 11.2725 17.1139L10.7381 19.2701L12.0506 19.5982L12.5943 17.4139C14.8443 17.8357 16.5318 17.667 17.235 15.6326C17.8068 14.0014 17.2068 13.0545 16.0256 12.4357C16.8975 12.2389 17.5443 11.667 17.7131 10.5045ZM14.7037 14.7232C14.3006 16.3545 11.5443 15.4732 10.6537 15.2482L11.3756 12.3514C12.2662 12.5764 15.135 13.017 14.7037 14.7232ZM15.1162 10.4764C14.7412 11.967 12.4537 11.2076 11.7131 11.0201L12.3693 8.39512C13.11 8.58262 15.5006 8.92949 15.1162 10.4764Z"
                                            fill="white"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_207_7366" x1="11.9935" y1="-0.00575999"
                                            x2="11.9935" y2="23.9976" gradientUnits="userSpaceOnUse">
                                            <stop offset="1" stop-color="#F9AA4B"></stop>
                                            <stop offset="1" stop-color="#F7931A"></stop>
                                        </linearGradient>
                                        <clipPath id="clip0_207_7366">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <h6 class="mb-0">Total des Domaines</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray " id="dropdownMenuButton36" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36"
                                    style="">
                                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>4</h3>
                                <small class="text-success">+ 0.8%</small><small class="ms-2">(BTC/USDT)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2 align-items-center">
                            <div class="d-flex align-items-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="24" height="24" rx="12" fill="#E9ECEF"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6599 4.1047L6.08597 9.3151C5.67347 9.69832 5.66072 10.3261 6.05782 10.7267L11.5333 16.3137C11.7537 16.5378 12.1067 16.5385 12.3278 16.3159L18.2935 10.6841C18.6978 10.2842 18.6945 9.65647 18.2855 9.26189L13.3401 4.1047C12.9412 3.71891 12.296 3.72352 11.9087 4.11534ZM12.7069 9.74882C12.7069 10.4595 12.1548 11.0363 11.4622 11.0363C10.7695 11.0363 10.2174 10.4595 10.2174 9.74882C10.2174 9.03816 10.7695 8.46135 11.4622 8.46135C12.1548 8.46135 12.7069 9.03816 12.7069 9.74882ZM12.7209 15.5381C13.4412 15.5381 14.0277 14.9758 14.0277 14.2904C14.0277 13.6051 13.4412 13.0427 12.7209 13.0427C12.0006 13.0427 11.4141 13.6051 11.4141 14.2904C11.4141 14.9758 12.0006 15.5381 12.7209 15.5381Z"
                                        fill="#FF3D3D"></path>
                                </svg>
                                <h6 class="mb-0">Transactions</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray " id="dropdownMenuButton35" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton35"
                                    style="">
                                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>3</h3>
                                <small class="text-danger">-0.8%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres sections ici, selon vos besoins -->
        </div>
    </div>
@endsection
