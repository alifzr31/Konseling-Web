        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">
                            Detail Data Konsultasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('generalidea-store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h5 class="font-weight-bold">Mulai Test</h5>
                            <input type="datetime-local" name="start_test" class="form-control mb-3">
                            <h5 class="font-weight-bold">Selesai Test</h5>
                            <input type="datetime-local" name="end_test" class="form-control mb-3">
                            <input type="hidden" name="user_id" value="{{ $konsul->user_id }}">
                            <input type="hidden" name="konsul_id" value="{{ $konsul->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Atur Jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="aturjadwalanamnesa" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">
                            Atur Jadwal Anamnesa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('anamnesa-store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h5 class="font-weight-bold">Mulai Test</h5>
                            <input type="datetime-local" name="start_test" class="form-control mb-3">
                            <h5 class="font-weight-bold">Selesai Test</h5>
                            <input type="datetime-local" name="end_test" class="form-control mb-3">
                            <input type="hidden" name="user_id" value="{{ $konsul->user_id }}">
                            <input type="hidden" name="konsul_id" value="{{ $konsul->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Atur Jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="inputhipotesis" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">
                            Input Hipotesis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('hipotesis-store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h5 class="font-weight-bold mb-3">Hasil Analisis</h5>
                            <textarea class="form-control @error('hasil_analisis') is-invalid @enderror" id="hasil_analisis"
                                name="hasil_analisis" style="height: 300px; resize: none;" autofocus></textarea>
                            <input type="hidden" name="user_id" value="{{ $konsul->user_id }}">
                            <input type="hidden" name="konsul_id" value="{{ $konsul->id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Input Hipotesis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
