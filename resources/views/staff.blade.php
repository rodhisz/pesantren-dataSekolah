<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.head')
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

                    {{-- Table Card --}}
                    <div class="card mb-4 ">
                        <div class="d-flex">
                            <div
                                class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                                <i class="fas fa-users opacity-10"></i>
                            </div>
                            <h6 class="mt-3 mb-2 ms-3 ">Data Staff</h6>
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
                                                        NIPD</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Jeni Kelamin</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        NISN</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Status</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Tempat Lahir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_sekolah as $row)
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">{{ $row->nama }}</td>
                                                        <td class="text-sm font-weight-normal">{{ $row->nipd }}</td>
                                                        <td class="text-sm font-weight-normal">
                                                            {{ $row->jenis_kelamin }}
                                                        </td>
                                                        <td class="text-sm font-weight-normal">{{ $row->nisn }}</td>
                                                        <td class="text-sm font-weight-normal">{{ $row->status }}</td>
                                                        <td class="text-sm font-weight-normal">
                                                            {{ $row->tempat_lahir }}
                                                        </td>
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
