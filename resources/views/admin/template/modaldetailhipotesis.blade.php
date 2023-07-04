        <div class="modal fade" id="modaldetailhipotesis" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">
                            Detail Data Test Hipotesis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success mt-2 mb-4">
                            <div class="mb-2"><i class="fa fa-check"></i> <b>Selesai!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Anda sudah menyelesaikan test hipotesis.
                            </p>
                        </div>
                        <h5 class="font-weight-bold">Hasil Analisis</h5>
                        <p class="mb-3" style="text-align: justify;">{{ $konsul->hipotesis->hasil_analisis }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        {{-- <button type="submit" class="btn btn-primary">Input Hasil Test</button> --}}
                    </div>
                </div>
            </div>
        </div>
