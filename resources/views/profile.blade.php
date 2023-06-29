@include('template/head')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Profile</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="index.html" style="color: #ff5e14;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Profile</p>
                    <h1 class="display-5 mb-4">Data Pribadi</h1>
                </div>
                <div class="col-lg-8 wow fadeInUp mb-5" data-wow-delay="0.5s">
                    <form action="{{ route('updateprofil') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Your Name" value="{{ Auth::user()->nama }}">
                                    <label for="name">Your Name</label>

                                    @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" placeholder="Your Name" value="{{ Auth::user()->tempat_lahir }}">
                                    <label for="name">Tempat Lahir</label>

                                    @error('tempat_lahir')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Your Name" value="{{ Auth::user()->tgl_lahir }}">
                                    <label for="name">Tanggal Lahir</label>

                                    @error('tgl_lahir')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control @error('jk') is-invalid @enderror" id="jk" name="jk" style="background-color: #fff;">
                                        <option value="pria" @if (Auth::user()->jk == 'pria') {{ 'selected' }} @endif>Pria</option>
                                        <option value="wanita" @if (Auth::user()->jk == 'wanita') {{ 'selected' }} @endif>Wanita</option>
                                    </select>
                                    <label for="name">Jenis Kelamin</label>

                                    @error('jk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                                        style="height: 200px; resize: none;">{{ Auth::user()->alamat }}</textarea>
                                    <label for="message">Alamat</label>

                                    @error('alamat')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email }}" readonly disabled>
                                    <label for="email">Email</label>

                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ Auth::user()->no_telp }}">
                                    <label for="no_telp">No. Telepon</label>

                                    @error('no_telp')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary py-3 px-5" type="submit">Edit Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Konsultasi</p>
                    <h1 class="display-5 mb-4">Riwayat Konsultasi Anda</h1>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: rgba(255, 94, 20, 0.9); color: rgb(2, 36, 91)">
                                    <th scope="col">ID.</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Kecenderungan</th>
                                    <th scope="col">Mulai Konsultasi</th>
                                    <th scope="col">Selesai Konsultasi</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                @forelse ($konsul as $ks)
                                    <tr>
                                        <td>{{ $ks->id }}</td>
                                        <td>{{ Auth::user()->nama }}</td>
                                        <td>{{ $ks->kecenderungan }}</td>
                                        
                                        @if ($ks->start_test == null)
                                            <td>-</td>
                                        @else
                                            <td>{{ $ks->start_test }}</td>
                                        @endif
                                        
                                        @if ($ks->end_test == null)
                                            <td>-</td>
                                        @else
                                            <td>{{ $ks->end_test }}</td>
                                        @endif

                                        @if ($ks->bukti_pembayaran == null)
                                            <td>
                                                <form action="{{ route('updatekonsul', $ks->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" name="bukti_pembayaran">
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                    <p style="color: red; font-size: 10pt; text-transform: none;" class="mb-1">*.jpg, .jpeg, .png | Max 2048 KB</p>
                                                </form>
                                            </td>
                                        @else
                                            <td><center><img src="{{ Storage::url('public/bukti_pembayaran/').$ks->bukti_pembayaran}}" style="width: 50%;"></center></td>
                                        @endif
                                        
                                        <td>{{ $ks->status }}</td>
                                        <td>
                                            <button class="btn btn-info" style="color: #fff;">Detail</button>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Anda Belum Melakukan Konsultasi
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        @error('bukti_pembayaran')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                        {{-- {{ $konsul->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@include('template/foot')