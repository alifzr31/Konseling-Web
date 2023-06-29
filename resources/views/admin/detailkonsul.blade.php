@include('admin/template/head')
  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Detail Data User</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Data User</a></li>
        <li class="breadcrumb-item">{{ $konsul->user_id }}</li>
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
            <form style="text-transform: capitalize">
              <div class="form-group">
                <label for="exampleInputPassword1">Kecenderungan</label>
                <br/>{{ $konsul->kecenderungan }}
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mulai Konsultasi</label>
                <br/>
                @if ($konsul->start_test == null)
                  -
                @else
                  {{ $konsul->start_test }}  
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Selesai Konsultasi</label>
                <br/>
                @if ($konsul->end_test == null)
                  -
                @else
                  {{ $konsul->end_test }}  
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Bukti Pembayaran</label>
                <br/>
                @if ($konsul->bukti_pembayaran == null)
                  -
                @else  
                  <a href="">{{ $konsul->bukti_pembayaran }}</a>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <br/>{{ $konsul->status }}
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
                  <th>Hasil</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Test</th>
                  <th>Mulai Test</th>
                  <th>Selesai Test</th>
                  <th>Hasil</th>
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
                      {{ $konsul->generalidea->start_test }}  
                    @endif
                  </td>
                  <td>
                    @if ($gicount == 0)
                      -
                    @else
                      {{ $konsul->generalidea->end_test }}  
                    @endif
                  </td>
                  <td>
                    @if ($gicount == null)
                      -
                    @else
                      {{ $konsul->generalidea->hasil }}  
                    @endif
                  </td>
                  <td>
                    @if ($gicount == 0)
                      <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModalScrollable" id="#modalScroll">
                        <span class="icon text-white-50">
                          <i class="fas fa-edit"></i>
                        </span>
                        <span class="text">Atur Jadwal</span>
                      </a>
                    @else
                    <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#modaldetailgi" id="#modalScroll">
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
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Hipotesis</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->
  </div>
@include('admin/template/modaldetailgi')
@include('admin/template/modalscrollable')
@include('admin/template/modallogout')
@include('admin/template/foot')