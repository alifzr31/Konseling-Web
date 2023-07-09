@include('admin/template/head')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Konsultasi</h1>
    </div>

    <div class="row mb-3">
        {{-- <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">General Idea</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Test General Idea</span><br />
                                @if ($jadwal > 0)
                                    <span class="text-success mr-2"><a href="#">Selengkapnya <i
                                                class="fa fa-arrow-right"></i></a></span>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-day fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Anamnesa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Test Anamnesa</span><br />
                                @if ($k_bayar > 0)
                                    <span class="text-success mr-2"><a href="#">Selengkapnya <i
                                                class="fa fa-arrow-right"></i></a></span>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-check-alt fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Hipotesis</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> Pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Hasil Analisis</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-xl-12 col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Konsultasi</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Kecenderungan</th>
                                <th>Nama Pasien</th>
                                <th>Mulai Konsultasi</th>
                                <th>Selesai Konsultasi</th>
                                <th>Status Konsultasi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kecenderungan</th>
                                <th>Nama Pasien</th>
                                <th>Mulai Konsultasi</th>
                                <th>Selesai Konsultasi</th>
                                <th>Status Konsultasi</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($list_konsul as $konsul)
                                <?php
                                $user = \App\Models\User::where('id', $konsul->user_id)->first();
                                $start_test = date_create($konsul->start_test);
                                $end_test = date_create($konsul->end_test);
                                ?>
                                <tr style="text-transform: capitalize;">
                                    <td>Kecenderungan {{ $konsul->kecenderungan }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ date_format($start_test, 'd F Y') }}</td>
                                    <td>
                                        @if ($konsul->end_test == null)
                                            -
                                        @else
                                            {{ date_format($end_test, 'd F Y') }}
                                        @endif
                                    </td>
                                    <td>{{ $konsul->status }}</td>
                                    <td>
                                        <a href="{{ route('detailkonsul', $konsul->id) }}" class="btn btn-info">Detail
                                            Data</a>
                                    </td>
                                </tr>
                            @empty
                                Belum ada data user
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@include('admin/template/modallogout')
@include('admin/template/foot')
