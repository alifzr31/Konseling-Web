    <div class="modal modal-video fade" id="giModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Test General Idea</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                    @if ($gi->status == 'sudah')
                        <div class="alert alert-success mt-2 mb-4">
                            <div class="mb-2"><i class="fa fa-check"></i> <b>SELESAI!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Anda sudah menyelesaikan test!
                            </p>
                        </div>
                    @else
                        <div class="alert alert-info mt-2 mb-4">
                            <div class="mb-2"><i class="fa fa-info-circle"></i> <b>INFO!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Silahkan kerjakan test sesuai dengan jadwal yang sudah ditentukan!
                            </p>
                        </div>    
                    @endif
                    <div class="mb-4">
                        <h3 class="mb-3">Jadwal Test</h3>
                        <table class="table table-responsive mb-4" style="border: #fff;">
                            <tr>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </tr>
                            <tr>
                                <td>{{ $gi->start_test }}</td>
                                <td>{{ $gi->end_test }}</td>
                            </tr>
                        </table>
                        @if ($gi->status == 'sudah')
                            <div class="mb-4">
                                @if ($gi->hasil == null)
                                    <h4 class="text-center mb-4" style="color: rgba(150, 150, 150, 0.5); margin-top: 50px;">Hasil test belum ditentukan</h4>
                                @else
                                    <h3>Hasil Test</h3>
                                    <p>{{ $gi->hasil }}</p>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="mt-2 mb-4">
                        @if ($gi->start_test == null || $gi->status == 'sudah')
                        @else
                            <a href="{{ route('mulaites') }}" target="blank_" class="btn btn-info text-white px-3 py-2 col-lg-12">Mulai Test</a>                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>