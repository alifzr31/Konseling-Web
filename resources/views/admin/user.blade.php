@include('admin/template/head')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Autentikasi</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item">User & Konsultasi</li>
        <li class="breadcrumb-item active" aria-current="page">Autentikasi</li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <!-- DataTable with Hover -->
      <div class="col-lg-12">
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
                    <a href="{{ route('detailuser', $usr->id) }}" class="btn btn-info">Detail Data</a>
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
    <!--Row-->
  </div>
@include('admin/template/modallogout')
@include('admin/template/foot')