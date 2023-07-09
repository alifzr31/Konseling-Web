@include('admin/template/head')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Data Konsultasi User</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('detailuser', $user->id) }}">Data User</a></li>
            <li class="breadcrumb-item" style="text-transform: capitalize;">{{ $user->nama }}</li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data Konsultasi</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Konsultasi</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group" style="text-transform: capitalize">
                            <label for="exampleInputPassword1">Kecenderungan</label>
                            <br />{{ $konsul->kecenderungan }}
                        </div>
                        <div class="form-group" style="text-transform: capitalize">
                            <label for="exampleInputPassword1">Mulai Konsultasi</label>
                            <br />
                            @if ($konsul->start_test == null)
                                -
                            @else
                                <?php
                                $start_test = date_create($konsul->start_test);
                                ?>
                                {{ date_format($start_test, 'd F Y') }}
                            @endif
                        </div>
                        <div class="form-group" style="text-transform: capitalize">
                            <label for="exampleInputPassword1">Selesai Konsultasi</label>
                            <br />
                            @if ($konsul->end_test == null)
                                -
                            @else
                                <?php
                                $end_test = date_create($konsul->end_test);
                                ?>
                                {{ date_format($end_test, 'd F Y') }}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bukti Pembayaran</label>
                            <br />
                            @if ($konsul->bukti_pembayaran == null)
                                -
                            @else
                                <a href="">{{ $konsul->bukti_pembayaran }}</a>
                            @endif
                        </div>
                        <div class="form-group" style="text-transform: capitalize">
                            <label for="exampleInputEmail1">Status</label>
                            <br />{{ $konsul->status }}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Atur Jadwal Tes General Idea</h6>
          </div>
        </div>
      </div> --}}

        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Data Tes</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" style="text-transform: capitalize;">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Test</th>
                                <th>Mulai Test</th>
                                <th>Selesai Test</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Test</th>
                                <th>Mulai Test</th>
                                <th>Selesai Test</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>General Idea</td>
                                <td>
                                    @if ($gicount == 0)
                                        -
                                    @else
                                        <?php
                                        $start_gi = date_create($konsul->generalidea->start_test);
                                        ?>
                                        {{ date_format($start_gi, 'd F Y H:i:s') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($gicount == 0)
                                        -
                                    @else
                                        <?php
                                        $end_gi = date_create($konsul->generalidea->end_test);
                                        ?>
                                        {{ date_format($end_gi, 'd F Y H:i:s') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($gicount == null)
                                        -
                                    @else
                                        {{ $konsul->generalidea->status }}
                                    @endif
                                </td>
                                <td>
                                    @if ($gicount == 0)
                                        <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                            data-target="#exampleModalScrollable" id="#modalScroll">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Atur Jadwal</span>
                                        </a>
                                    @else
                                        <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal"
                                            data-target="#modaldetailgi" id="#modalScroll">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Detail Test</span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Anamnesa</td>
                                @if ($anmCount < 1)
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                @else
                                    <td>
                                        <?php
                                        $start_anamnesa = date_create($konsul->anamnesa->start_test);
                                        ?>
                                        {{ date_format($start_anamnesa, 'd F Y H:i:s') }}
                                    </td>
                                    <td>
                                        <?php
                                        $end_anamnesa = date_create($konsul->anamnesa->end_test);
                                        ?>
                                        {{ date_format($end_anamnesa, 'd F Y H:i:s') }}
                                    </td>
                                    <td>{{ $konsul->anamnesa->status }}</td>
                                @endif
                                <td>
                                    @if ($anmCount < 1)
                                        @if ($gicount > 0 && $konsul->generalidea->status == 'sudah')
                                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                                data-target="#aturjadwalanamnesa" id="#modalScroll">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Atur Jadwal</span>
                                            </a>
                                        @else
                                            <button disabled class="btn btn-primary btn-icon-split" data-toggle="modal"
                                                data-target="#aturjadwalanamnesa" id="#modalScroll">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Atur Jadwal</span>
                                            </button>
                                        @endif
                                    @else
                                        <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal"
                                            data-target="#modaldetailanamnesa" id="#modalScroll">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Detail Test</span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Hipotesis</td>
                                @if ($hipoCount < 1)
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                @else
                                    <td>
                                        <?php
                                        $start_hipo = date_create($konsul->hipotesis->start_test);
                                        ?>
                                        {{ date_format($start_hipo, 'd F Y H:i:s') }}
                                    </td>
                                    <td>
                                        <?php
                                        $end_hipo = date_create($konsul->hipotesis->end_test);
                                        ?>
                                        {{ date_format($end_hipo, 'd F Y H:i:s') }}
                                    </td>
                                    <td>{{ $konsul->hipotesis->status }}</td>
                                @endif
                                <td>
                                    @if ($hipoCount < 1)
                                        @if ($anmCount > 0 && $konsul->anamnesa->status == 'sudah')
                                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                                data-target="#inputhipotesis" id="#modalScroll">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Input Hipotesis</span>
                                            </a>
                                        @else
                                            <button disabled class="btn btn-primary btn-icon-split" data-toggle="modal"
                                                data-target="#inputhipotesis" id="#modalScroll">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Input Hipotesis</span>
                                            </button>
                                        @endif
                                    @else
                                        <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal"
                                            data-target="#modaldetailhipotesis" id="#modalScroll">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Detail Test</span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @if ($hipoCount > 0 && $konsul->hipotesis->status == 'sudah')
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Input
                            Hasil
                            Akhir</h6>
                    </div>
                    <div class="card-body">
                        @if ($hasilCount > 0)
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kondisi Psikologis</label>
                                <br />{{ $konsul->hasilakhir->kondisi_psikologis }}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Diagnosis</label>
                                <br />{!! nl2br($konsul->hasilakhir->diagnosis) !!}
                            </div>
                        @else
                            <form action="{{ route('hasilakhir-store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kondisi Psikologis</label>
                                    <textarea name="kondisi_psikologis" class="form-control @error('kondisi_psikologis') is-invalid @enderror"
                                        style="height: 200px; resize: none;"></textarea>

                                    @error('kondisi_psikologis')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Diagnosis</label>
                                    <textarea name="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror"
                                        style="height: 200px; resize: none;"></textarea>

                                    @error('diagnosis')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="user_id" value="{{ $konsul->user_id }}">
                                <input type="hidden" name="konsul_id" value="{{ $konsul->id }}">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

        @endif

    </div>
    <!--Row-->
</div>
@if ($gicount > 0)
    @include('admin/template/modaldetailgi')
@endif
@if ($anmCount > 0)
    @include('admin/template/modaldetailanamnesa')
@endif
@if ($hipoCount > 0)
    @include('admin/template/modaldetailhipotesis')
@endif
@include('admin/template/modalscrollable')
@include('admin/template/modallogout')
@include('admin/template/foot')
