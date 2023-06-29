@include('template/head')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Penjadwalan Test</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">400 Pengguna</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->
                  <span>Menunggu penjadwalan test</span>
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
                <div class="h5 mb-0 font-weight-bold text-gray-800">650 pengguna</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span>Menunggu konfirmasi pembayaran</span>
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
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366 Pengguna</div>
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

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
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
            <div class="customer-message align-items-center">
              <a class="font-weight-bold" href="#">
                <div class="text-truncate message-title">Hi there! I am wondering if you can help me with a
                  problem I've been having.</div>
                <div class="small text-gray-500 message-time font-weight-bold">Udin Cilok · 58m</div>
              </a>
            </div>
            <div class="customer-message align-items-center">
              <a href="#">
                <div class="text-truncate message-title">But I must explain to you how all this mistaken idea
                </div>
                <div class="small text-gray-500 message-time">Nana Haminah · 58m</div>
              </a>
            </div>
            <div class="customer-message align-items-center">
              <a class="font-weight-bold" href="#">
                <div class="text-truncate message-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </div>
                <div class="small text-gray-500 message-time font-weight-bold">Jajang Cincau · 25m</div>
              </a>
            </div>
            <div class="customer-message align-items-center">
              <a class="font-weight-bold" href="#">
                <div class="text-truncate message-title">At vero eos et accusamus et iusto odio dignissimos
                  ducimus qui blanditiis
                </div>
                <div class="small text-gray-500 message-time font-weight-bold">Udin Wayang · 54m</div>
              </a>
            </div>
            <div class="card-footer text-center">
              <a class="m-0 small text-primary card-link" href="#">View More <i
                  class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('template/modallogout')
@include('template/foot')