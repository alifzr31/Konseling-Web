<div class="modal modal-video fade" id="anamnesaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Test Anamnesa</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                @if ($anm->status == 'sudah')
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
                            Pada test ini dilakukan dengan cara berkomunikasi secara chatting melalui whatsapp.<br />
                            Pastikan untuk meluangkan waktu sesuai dengan jadwal yang sudah ditentukan!
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
                            <td>{{ $anm->start_test }}</td>
                            <td>{{ $anm->end_test }}</td>
                        </tr>
                    </table>
                </div>
                <div class="mt-2 mb-4">
                    @if ($anm->start_test == null || $anm->status == 'sudah')
                    @else
                        <div class="mt-2 mb-4">
                            <a href="https://wa.me/+6282115788040" target="blank_"
                                class="btn btn-success text-white px-3 py-2 col-lg-12">Mulai Test <i
                                    class="fa fa-whatsapp" style="color:white; font-size: 24px;"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
