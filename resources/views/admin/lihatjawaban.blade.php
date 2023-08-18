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
                <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">{{ $user->nama }} -
                    Konsultasi {{ $konsul->kecenderungan }}</h6>
            </div>
            <div class="card-body">
                @if ($konsul->kecenderungan == 'jiwa')
                    @include('admin.template.soalgijiwa')
                @else
                    @include('admin.template.soalgisosial')
                @endif
            </div>
        </div>
    </div>
</div>
@include('admin/template/modallogout')
@include('admin/template/foot')
