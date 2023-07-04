<div class="modal modal-video fade" id="hipotesisModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Test Hipotesis</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                <div class="alert alert-success mt-2 mb-4">
                    <div class="mb-2"><i class="fa fa-check"></i> <b>SELESAI!</b></div>
                    <p class="mb-1" style="text-align: justify;">
                        Anda sudah menyelesaikan test!
                    </p>
                </div>
                <div class="mb-4">
                    <h3 class="mb-3">Hasil Analisis</h3>
                    <p>{{ $hipo->hasil_analisis }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
