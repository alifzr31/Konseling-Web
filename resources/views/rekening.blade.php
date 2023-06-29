@include('template/head')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Pembayaran</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.html" style="color: #ff5e14;">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('konsultasi') }}" style="color: #ff5e14;">Konsultasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Konsultasi</p>
                    <h1 class="display-5 mb-4">Pembayaran</h1>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <p>Silahkan melakukan pembayaran melalui no. rekening yang tertera untuk bisa melakukan tahapan-tahapan konsultasi.</p> --}}
                    <div class="bg-light text-center h-100 p-5">
                        @foreach ($ks as $k)
                            @if (!$k->bukti_pembayaran == null)
                                <h4>Anda sudah melakukan pembayaran</h4>
                            @else
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            {{-- <i class="fa fa-phone-alt fa-2x text-primary"></i> --}}
                            <img src="img/bca.png" style="width: 80%;" alt="">
                        </div>
                        <h4 class="mb-3">3460691027</h4>
                        <p class="mb-5">a/n<br/>Gilang Prasetya</p>

                                <p class="mb-5" style="color: red;">Silahkan melakukan pembayaran terlebih dahulu melalui no. rekening yang tertera agar bisa melakukan tahapan-tahapan konsultasi.</p>
                                <form action="{{ route('updatekonsul', $k->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror" id="bukti_pembayaran" name="bukti_pembayaran" placeholder="Your Name">
                                                <label for="name">Upload bukti pembayaran</label>
            
                                                @error('bukti_pembayaran')
                                                <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary py-2 px-3" type="submit">Upload Sekarang</button>
                                            <a href="{{ route('editprofil') }}" class="btn btn-danger py-2 px-3">Upload Nanti</a>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@include('template/foot')