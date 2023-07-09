@include('template/head')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Hasil Akhir</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="{{ route('index') }}" style="color: #ff5e14;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hasil Akhir</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<?php
    $tgl_lahir = date_create(Auth::user()->tgl_lahir);
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="col-lg-12 col-md-12 wow fadeInUp mt-5" data-wow-delay="0.1s">
            <div class="bg-light text-center p-5">
                <h2>Hasil Akhir</h2>
            </div>
            <div class="bg-light p-5" style="text-transform: capitalize;">
                <h4 class="mb-3">Identitas</h4>
                <p>Nama : {{ Auth::user()->nama }}</p>
                <p>Tempat, Tanggal Lahir : {{ Auth::user()->tempat_lahir }}, {{ date_format($tgl_lahir, 'd F Y') }}</p>
                <p>Jenis Kelamin : {{ Auth::user()->jk }}</p>
            </div>
            @if ($hasilAkhir != null)
                <div class="bg-light p-5">
                    <h4 class="mb-3">Gambaran Kondisi Psikologis</h4>
                    <p>{{ $hasilAkhir->kondisi_psikologis }}</p>
                </div>
                <div class="bg-light p-5">
                    <h4 class="mb-3">Diagnosis</h4>
                    <p>{!! nl2br($hasilAkhir->diagnosis) !!}</p>
                </div>
            @else
                <div class="bg-light p-5">
                    <h4 class="mb-3">Gambaran Kondisi Psikologis</h4>
                    <p>-</p>
                </div>
                <div class="bg-light p-5">
                    <h4 class="mb-3">Diagnosis</h4>
                    <p>-</p>
                </div>
            @endif
        </div>
    </div>
</div>

@include('template/foot')
