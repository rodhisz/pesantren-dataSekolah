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
        @include('includes.head')
    </head>

<body class="g-sidenav-show  bg-gray-200">

    @include('includes.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="mb-3">Upload Excel</h5>
                <form action="{{route('dataImport')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" required>
                    <input type="submit" class="btn btn-primary" value="Upload Excel"/>
                </form>
            </div>
        </div>

    </main>

    {{-- Script --}}
    @include('includes.script')
    {{-- End Script --}}

</body>

</html>
