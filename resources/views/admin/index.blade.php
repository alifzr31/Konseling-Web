@include('admin/template/head')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Penjadwalan Test</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jadwal }} Pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                                <span>Menunggu penjadwalan test</span><br />
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
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Konfirmasi Pembayaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $k_bayar }} pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Menunggu konfirmasi pembayaran</span><br />
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
        <!-- New User Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Pengguna</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jml_user }} Pengguna</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Jumlah pengguna terdaftar</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($user as $usr)
                                <tr>
                                    <td>{{ $usr->nama }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->role }}</td>
                                    <td>
                                        <a href="{{ route('detailuser', $usr->id) }}" class="btn btn-info">Detail
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

        <!-- Message From Customer-->
        <div class="col-xl-4 col-lg-5">
            <div class="card" style="height: 95%;">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-light">Pesan melalui Contact Us</h6>
                </div>
                <div>
                    @forelse ($contacts as $ct)
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="#">
                                <div class="text-truncate message-title">{{ $ct->subjek }}</div>
                                <div class="small text-gray-500 message-time font-weight-bold">{{ $ct->nama }} ·
                                    {{ $ct->email }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="customer-message" style="border-bottom: none;">
                            <p class="lead text-gray-500 mx-auto text-center">Belum ada pesan</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin/template/modallogout')
@include('admin/template/foot')
