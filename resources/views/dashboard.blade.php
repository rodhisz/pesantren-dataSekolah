<!--
=========================================================
* Material Dashboard 2 PRO - v3.0.2
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Tamu
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    @include('includes.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <script>
                        console.log(@json($tamus))
                    </script>

                    {{-- Chart Card --}}
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 mt-4 mb-4">
                            <div class="card z-index-2 ">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <div class="chart">
                                            <canvas id="chartBar-tamu" height="170"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-0 ">Jumlah Kunjungan Tamu</h6>
                                    <p class="text-sm ">Jumlah Kunjungan IDN Boarding School Setiap Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Chart Card --}}

                    {{-- Table Card --}}
                    <div class="card mb-4 ">
                        <div class="d-flex">
                            <div
                                class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                                <i class="fas fa-users opacity-10"></i>
                            </div>
                            <h6 class="mt-3 mb-2 ms-3 ">Data Tamu</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-7">
                                    <div class="table-responsive">
                                        <table class="table table-flush" id="datatable-basic">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Nama</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Asal</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Keperluan</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jumlah Tamu</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Nomor HP</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jenis Kendaraan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tamu as $row)
                                                <tr>
                                                    <td class="text-sm font-weight-normal">{{$row->nama}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->asal}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->keperluan}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jumlah_tamu}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->nomor_hp}}</td>
                                                    <td class="text-sm font-weight-normal">{{$row->jenis_kendaraan}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Table Card --}}

                </div>
            </div>
        </div>
    </main>

    {{-- Script --}}
    @include('includes.script')
    {{-- End Script --}}

</body>

</html>
