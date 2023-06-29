@include('template/head')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Konsultasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.html" style="color: #ff5e14;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @if ($kcount > 0)
                <div class="row g-5">
                        @foreach ($konsul as $ks)
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="fw-medium text-uppercase text-primary mb-2">Konsultasi</p>
                            <h1 class="display-5 mb-2">Kecenderungan {{$ks->kecenderungan}}</h1>                        
                        </div>
                        @if ($ks->status == 'pembayaran diterima' && $gicount == 0)
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class=" alert alert-info mt-2 mb-1">
                                    <div class="mb-2"><i class="fa fa-info-circle"></i> <b>INFO!</b></div>
                                    <p class="mb-1" style="text-align: justify;">
                                        @if ($gicount == 0)
                                            Jadwal test general idea belum ditentukan. Mohon ketersediaannya untuk menunggu terima kasih!
                                        @endif
                                        {{-- Jadwal test belum ditentukan. Mohon ketersediaannya untuk menunggu Terima Kasih! --}}
                                    </p>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light text-center h-100 p-5">
                                <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img src="img/jiwa.png" style="width: 50%;">
                                </div>
                                <h4 class="mb-3">General Idea</h4>
                                <button data-bs-toggle='modal' data-bs-target="#giModal" class="btn btn-primary px-4 py-3" @if ($ks->status == 'belum bayar' || $gicount == 0) {{ 'disabled' }} @endif>Buka Test <i class="fa fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light text-center h-100 p-5">
                                <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img src="img/jiwa.png" style="width: 50%;">
                                </div>
                                <h4 class="mb-3">Anamnesa</h4>
                                <button data-bs-toggle='modal' data-bs-target="#videoModal" class="btn btn-primary px-4 py-3" @if ($ks->status == 'belum bayar') {{ 'disabled' }} @endif>Buka Test <i class="fa fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light text-center h-100 p-5">
                                <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <img src="img/jiwa.png" style="width: 50%;">
                                </div>
                                <h4 class="mb-3">Hipotesis</h4>
                                <button data-bs-toggle='modal' data-bs-target="#videoModal" class="btn btn-primary px-4 py-3" @if ($ks->status == 'belum bayar') {{ 'disabled' }} @endif>Buka Test <i class="fa fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        @if ($ks->status == 'belum bayar')
                            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="alert alert-danger mt-2">
                                    <center>Silahkan lakukan pembayaran terlebih dahulu dan upload bukti pembayaan <a href="{{ route('rekening') }}">disini</a></center>
                                </div>
                            </div>
                        @endif
                        @endforeach
                </div>
            @else   
                <div class="row g-5 justify-content-center mb-5">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <img src="img/jiwa.png" style="width: 50%;">
                            </div>
                            <h4 class="mb-3">Kecenderungan Jiwa</h4>
                            <button data-bs-toggle='modal' data-bs-target="#videoModal" class="btn btn-primary px-4 py-3">Konsultasi Sekarang <i class="fa fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <img src="img/sosial.png" style="width: 50%;">
                            </div>
                            <h4 class="mb-3">Kecenderungan Sosial</h4>
                            <button data-bs-toggle='modal' data-bs-target="#sosialModal" class="btn btn-primary px-4 py-3">Konsultasi Sekarang <i class="fa fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Contact End -->
    @if ($gicount > 0)
        @include('template/modalgi')
    @endif
    @include('template/modal')
    @include('template/modal2')
@include('template/foot')