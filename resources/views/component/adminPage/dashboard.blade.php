@extends('layout.adminPage.app')
@section('title', 'Dashboard')
@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('status') }}"
            });
        </script>
    @endif
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Sales Summary</h4>
                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                            <div class="ml-auto d-flex no-block align-items-center">
                                <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                    <li class="list-inline-item text-info"><i class="fa fa-circle"></i>
                                        Iphone</li>
                                    <li class="list-inline-item text-primary"><i class="fa fa-circle"></i>
                                        Ipad</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-12">
                                <div class="campaign ct-charts"></div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection
