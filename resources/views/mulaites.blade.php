@include('template/head')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Test General Idea</h1>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Test</p>
                    <h1 class="display-5 mb-2">General Idea</h1>                        
                </div>

                {{-- SOAL TEST --}}
                @if (Route::current()->getName() == 'mulaites')
                    @include('template/soalgi')
                @endif
            </div>
        </div>
    </div>
@include('template/foot')