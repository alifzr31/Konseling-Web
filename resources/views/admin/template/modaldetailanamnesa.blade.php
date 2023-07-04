        <div class="modal fade" id="modaldetailanamnesa" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">
                            Detail Data Test Anamnesa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if ($konsul->anamnesa->status == 'belum')
                        <div class="modal-body">
                            <div class="alert alert-info mt-2 mb-4">
                                <div class="mb-2"><i class="fa fa-exclamation-triangle"></i> <b>INFO!</b></div>
                                <p class="mb-1" style="text-align: justify;">
                                    Apakah tes anamnesa sudah selesai?
                                </p>
                            </div>
                            <form action="{{ route('selesai_anamnesa', $konsul->anamnesa->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file"
                                                class="form-control @error('bukti_chat') is-invalid @enderror"
                                                id="bukti_chat" name="bukti_chat">
                                            <label for="name" style="color: black">Upload bukti chat</label><br/>
                                            <label for="name" style="color: red"><i>*File bukti chat bisa berupa screenshoot atau berupa ekspor chat .txt</i></label>

                                            @error('bukti_chat')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Selesai</button>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Belum</button>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="modal-body">
                            <div class="alert alert-success mt-2 mb-4">
                                <div class="mb-2"><i class="fa fa-check"></i> <b>Selesai!</b></div>
                                <p class="mb-1" style="text-align: justify;">
                                    Anda sudah menyelesaikan test anamnesa.
                                </p>
                            </div>
                            <h5 class="font-weight-bold">Bukti Chat</h5>
                            <a href="{{ Storage::url('public/bukti_chat/').$konsul->anamnesa->bukti_chat}}" target="_blank">{{ $konsul->anamnesa->bukti_chat }}</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            {{-- <button type="submit" class="btn btn-primary">Input Hasil Test</button> --}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
