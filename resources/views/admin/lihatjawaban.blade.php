@include('admin/template/head')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Soal dan Jawaban General Idea</h1>
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol> --}}
    </div>

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">{{ $user->nama }} - Konsultasi {{ $konsul->kecenderungan}}</h6>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>1. Ceritakan mengenai diri Anda!<h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j1 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>2. Apa alasan Anda melamar untuk posisi dan perusahaan ini?</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j2 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>3. Mengapa Anda meninggalkan pekerjaan Anda sebelumnya?</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j3 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>4. Mengapa Anda memutuskan untuk berpindah jalur karir?</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j4 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>5. Jelaskan mengenai peran Anda di perusahaan sebelumnya!</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j5 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>6. Apa kesulitan terbesar di peran Anda sebelumnya?</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j6 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>7. Apa pencapaian terbesar di peran Anda sebelumnya?</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j7 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>8. Ceritakan rencana Anda seputar karier dalam jangka pendek serta jangka panjang!</h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j8 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>
                                9. Hitung berapa jumlah pasangan huruf yang memiliki perbedaan di bawah:<br />
                                P p<br />
                                R r<br />
                                T r<br />
                                L l<br />
                                Sebutkan alasannya!
                            </h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j9 }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                10. Penarikan Kesimpulan<br />
                                Usia Dini 2 kali usia Ahmad. Raka lebih tua dari Dini. Siapakah yang paling tua?
                            </h4>
                        </div>
                        <div class="form-floating">
                            <p>{{ $gi->j10 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin/template/modallogout')
@include('admin/template/foot')
