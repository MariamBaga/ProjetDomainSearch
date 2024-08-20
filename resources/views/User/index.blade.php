@extends('layouts.Usermaster')

@section('title', 'Dashboard')

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
                                <h6 class="mb-0">Total de Domaine</h6>
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
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3> $34.850,10</h3>
                                <small class="text-success">+ 0.8%</small><small class="ms-2">(BTC/USDT)</small>
                            </div>
                            <div id="crypto-chart-01" style="min-height: 80px;">
                                <div id="apexchartsrmguefx"
                                    class="apexcharts-canvas apexchartsrmguefx apexcharts-theme-light"
                                    style="width: 87px; height: 80px;"><svg id="SvgjsSvg8506" width="87" height="80"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="87" height="80">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 40px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect8511" width="0" height="0" x="0" y="0" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG8547" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG8508" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 1)">
                                            <defs id="SvgjsDefs8507">
                                                <clipPath id="gridRectMaskrmguefx">
                                                    <rect id="SvgjsRect8513" width="93" height="84" x="-3" y="-3"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskrmguefx"></clipPath>
                                                <clipPath id="nonForecastMaskrmguefx"></clipPath>
                                                <clipPath id="gridRectMarkerMaskrmguefx">
                                                    <rect id="SvgjsRect8514" width="91" height="82" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <line id="SvgjsLine8512" x1="0" y1="0" x2="0"
                                                y2="78" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="78" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG8520" class="apexcharts-grid">
                                                <g id="SvgjsG8521" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine8524" x1="0" y1="0"
                                                        x2="87" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine8525" x1="0" y1="78"
                                                        x2="87" y2="78" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG8522" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine8527" x1="0" y1="78" x2="87"
                                                    y2="78" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine8526" x1="0" y1="1" x2="0"
                                                    y2="78" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG8523" class="apexcharts-grid-borders" style="display: none;">
                                            </g>
                                            <g id="SvgjsG8515" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG8516" class="apexcharts-series" zIndex="0"
                                                    seriesName="Bitcoin" data:longestSeries="true" rel="1"
                                                    data:realIndex="0">
                                                    <path id="SvgjsPath8519"
                                                        d="M 0 78 L 6.214285714285714 63.7 L 12.428571428571429 71.5 L 18.642857142857142 50.7 L 24.857142857142858 53.300000000000004 L 31.071428571428573 36.400000000000006 L 37.285714285714285 40.300000000000004 L 43.5 11.700000000000003 L 49.714285714285715 37.7 L 55.92857142857143 24.700000000000003 L 62.142857142857146 49.400000000000006 L 68.35714285714286 24.700000000000003 L 74.57142857142857 24.700000000000003 L 80.78571428571429 19.5 L 87 13"
                                                        fill="none" fill-opacity="1" stroke="rgba(26,160,83,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMaskrmguefx)"
                                                        pathTo="M 0 78 L 6.214285714285714 63.7 L 12.428571428571429 71.5 L 18.642857142857142 50.7 L 24.857142857142858 53.300000000000004 L 31.071428571428573 36.400000000000006 L 37.285714285714285 40.300000000000004 L 43.5 11.700000000000003 L 49.714285714285715 37.7 L 55.92857142857143 24.700000000000003 L 62.142857142857146 49.400000000000006 L 68.35714285714286 24.700000000000003 L 74.57142857142857 24.700000000000003 L 80.78571428571429 19.5 L 87 13"
                                                        pathFrom="M -1 91 L -1 91 L 6.214285714285714 91 L 12.428571428571429 91 L 18.642857142857142 91 L 24.857142857142858 91 L 31.071428571428573 91 L 37.285714285714285 91 L 43.5 91 L 49.714285714285715 91 L 55.92857142857143 91 L 62.142857142857146 91 L 68.35714285714286 91 L 74.57142857142857 91 L 80.78571428571429 91 L 87 91"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG8517"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle8551" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wfqw03pt3 no-pointer-events"
                                                                stroke="#ffffff" fill="#1aa053" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG8518" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine8528" x1="0" y1="0" x2="87"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine8529" x1="0" y1="0" x2="87"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG8530" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG8531" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 4)"></g>
                                            </g>
                                            <g id="SvgjsG8548" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG8549" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG8550" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(26, 160, 83);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
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
                                        d="M11.6596 5.3999H7.40015V11.0393H4.80078V12.9191H7.40015V18.5585H11.6596C13.9078 18.5585 14.3923 18.3238 15.3612 17.8543C15.4364 17.8179 15.5145 17.78 15.5966 17.7408C16.7364 17.1956 17.6221 16.428 18.2539 15.438C18.8856 14.448 19.2015 13.2951 19.2015 11.9792C19.2015 10.6633 18.8856 9.5104 18.2539 8.52036C17.6221 7.53033 16.7364 6.76276 15.5966 6.21761C14.4569 5.67247 13.1445 5.3999 11.6596 5.3999ZM10.5657 12.9191V16.0583H11.5035C12.8712 16.0583 13.9621 15.6918 14.7763 14.9587C15.5904 14.2255 15.9974 13.2324 15.9974 11.9792C15.9974 10.726 15.5904 9.73283 14.7763 8.99971C13.9621 8.26658 12.8712 7.90002 11.5035 7.90002H10.5657V11.0393H13.5932V12.9191H10.5657Z"
                                        fill="#2647c8"></path>
                                </svg>
                                <h6 class="mb-0 ms-2">Total feacture</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray " id="dropdownMenuButton38" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton38"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>$34.850,10</h3>
                                <small class="text-success">+ 0.8%</small><small class="ms-2">LTC/USDT</small>
                            </div>
                            <div id="crypto-chart-02" style="min-height: 80px;">
                                <div id="apexcharts8vrwnp94g"
                                    class="apexcharts-canvas apexcharts8vrwnp94g apexcharts-theme-light"
                                    style="width: 87px; height: 80px;"><svg id="SvgjsSvg8553" width="87"
                                        height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="87" height="80">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 40px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect8558" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG8594" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG8555" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 1)">
                                            <defs id="SvgjsDefs8554">
                                                <clipPath id="gridRectMask8vrwnp94g">
                                                    <rect id="SvgjsRect8560" width="93" height="84" x="-3" y="-3"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask8vrwnp94g"></clipPath>
                                                <clipPath id="nonForecastMask8vrwnp94g"></clipPath>
                                                <clipPath id="gridRectMarkerMask8vrwnp94g">
                                                    <rect id="SvgjsRect8561" width="91" height="82" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <line id="SvgjsLine8559" x1="0" y1="0" x2="0"
                                                y2="78" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="78" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG8567" class="apexcharts-grid">
                                                <g id="SvgjsG8568" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine8571" x1="0" y1="0"
                                                        x2="87" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine8572" x1="0" y1="78"
                                                        x2="87" y2="78" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG8569" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine8574" x1="0" y1="78" x2="87"
                                                    y2="78" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine8573" x1="0" y1="1" x2="0"
                                                    y2="78" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG8570" class="apexcharts-grid-borders" style="display: none;">
                                            </g>
                                            <g id="SvgjsG8562" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG8563" class="apexcharts-series" zIndex="0"
                                                    seriesName="Bitcoin" data:longestSeries="true" rel="1"
                                                    data:realIndex="0">
                                                    <path id="SvgjsPath8566"
                                                        d="M 0 78 L 6.214285714285714 63.7 L 12.428571428571429 71.5 L 18.642857142857142 50.7 L 24.857142857142858 53.300000000000004 L 31.071428571428573 36.400000000000006 L 37.285714285714285 40.300000000000004 L 43.5 11.700000000000003 L 49.714285714285715 37.7 L 55.92857142857143 24.700000000000003 L 62.142857142857146 49.400000000000006 L 68.35714285714286 24.700000000000003 L 74.57142857142857 24.700000000000003 L 80.78571428571429 19.5 L 87 13"
                                                        fill="none" fill-opacity="1" stroke="rgba(26,160,83,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMask8vrwnp94g)"
                                                        pathTo="M 0 78 L 6.214285714285714 63.7 L 12.428571428571429 71.5 L 18.642857142857142 50.7 L 24.857142857142858 53.300000000000004 L 31.071428571428573 36.400000000000006 L 37.285714285714285 40.300000000000004 L 43.5 11.700000000000003 L 49.714285714285715 37.7 L 55.92857142857143 24.700000000000003 L 62.142857142857146 49.400000000000006 L 68.35714285714286 24.700000000000003 L 74.57142857142857 24.700000000000003 L 80.78571428571429 19.5 L 87 13"
                                                        pathFrom="M -1 91 L -1 91 L 6.214285714285714 91 L 12.428571428571429 91 L 18.642857142857142 91 L 24.857142857142858 91 L 31.071428571428573 91 L 37.285714285714285 91 L 43.5 91 L 49.714285714285715 91 L 55.92857142857143 91 L 62.142857142857146 91 L 68.35714285714286 91 L 74.57142857142857 91 L 80.78571428571429 91 L 87 91"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG8564"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle8598" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wi0p3p151 no-pointer-events"
                                                                stroke="#ffffff" fill="#1aa053" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG8565" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine8575" x1="0" y1="0" x2="87"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine8576" x1="0" y1="0" x2="87"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG8577" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG8578" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, 4)"></g>
                                            </g>
                                            <g id="SvgjsG8595" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG8596" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG8597" class="apexcharts-point-annotations"></g>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(26, 160, 83);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
