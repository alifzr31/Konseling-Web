@include('admin/template/head')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Detail Data User</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Autentikasi</a></li>
        <li class="breadcrumb-item">Data User</li>
        <li class="breadcrumb-item active" aria-current="page">Detail Data User</li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" value="{{ $user->nama }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir" value="{{ $user->tempat_lahir }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir" value="{{ $user->tgl_lahir }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" style="height: 150px; resize: none;">{{ $user->alamat }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <select name="jk" class="form-control" id="exampleInputPassword1">
                  <option selected hidden disabled>Pilih Jenis Kelamin</option>
                  <option value="pria" @if ($user->jk == 'pria') {{'selected'}} @endif>Pria</option>
                  <option value="wanita" @if ($user->jk == 'wanita') {{'selected'}} @endif>Wanita</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No. Telp</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="No. Telp" value="{{ $user->no_telp }}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <select name="jk" class="form-control" id="exampleInputPassword1">
                  <option selected hidden disabled>Pilih Role User</option>
                  <option value="admin" @if ($user->jk == 'admin') {{'selected'}} @endif>Admin</option>
                  <option value="user" @if ($user->jk == 'user') {{'selected'}} @endif>User</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ $user->email }}" readonly disabled>
                <small id="emailHelp" class="form-text text-muted">
                  We'll never share your email with anyone else.
                </small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary" style="text-transform: capitalize;">Data Konsultasi {{ $user->nama }}</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" style="text-transform: capitalize;" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th>Kecenderungan</th>
                  <th>Mulai Konsultasi</th>
                  <th>Selesai Konsultasi</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kecenderungan</th>
                  <th>Mulai Konsultasi</th>
                  <th>Selesai Konsultasi</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($user->konsul()->get() as $ks)
                  <tr>
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
                    <td>{{ $ks->status }}</td>
                    <td>
                      {{-- <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalScrollable" id="#modalScroll">Lihat Data</button> --}}
                      @if (!$ks->bukti_pembayaran == null)
                        @if ($ks->status == 'menunggu konfirmasi')
                          <a href="{{ Storage::url('public/bukti_pembayaran/').$ks->bukti_pembayaran}}" class="btn btn-warning" target="_blank">Bukti Pembayaran</a>                        
                          <a href="{{ route('acc', $ks->id) }}" class="btn btn-success">
                            <i class="fas fa-check"></i>
                          </a>
                          <a href="#" class="btn btn-danger">
                            <i class="fas fa-times"></i>
                          </a>
                        @endif
                      @endif
                      <a href="{{ route('detailkonsul', $ks->id) }}" class="btn btn-primary">Detail Data</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
  </div>
{{-- @include('admin/template/modalscrollable') --}}
@include('admin/template/modallogout')
@include('admin/template/foot')