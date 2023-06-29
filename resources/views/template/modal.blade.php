    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Konsultasi Kecenderungan Jiwa</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @forelse ($konsul as $ks)
                    @if ($ks->status == 'selesai')
                    <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                        <div class="alert alert-warning mt-2">
                            <div class="mb-2"><i class="fa fa-exclamation-triangle"></i> <b>PENTING!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Anda memilih konsultasi kecenderungan jiwa, 
                                dan anda tidak dapat melakukan konsultasi lagi sebelum konsultasi yang anda pilih saat ini selesai. 
                                Apakah anda sudah yakin?
                            </p>
                        </div>
                        <div class="mt-2 mb-4">
                            <a href="{{ route('konsuljiwa') }}" class="btn btn-primary px-4 py-3">Yakin</a>
                            <button class="btn btn-danger px-4 py-3" data-bs-dismiss="modal" aria-label="Close">Tidak Yakin</button>
                        </div>
                    </div>
                    @else
                    <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                        <div class="alert alert-info mt-2 mb-4">
                            <div class="mb-2"><i class="fa fa-exclamation-triangle"></i> <b>INFO!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Anda sedang menjalani masa konsultasi. Silahkan untuk menyelesaikan terlebih dahulu agar bisa mendaftar konsultasi yang baru.
                            </p>
                        </div>
                    </div>
                    @endif
                @empty
                <div class="modal-body" style="padding-left: 10px; padding-right: 10px;">
                    <div class="alert alert-warning mt-2">
                        <div class="mb-2"><i class="fa fa-exclamation-triangle"></i> <b>PENTING!</b></div>
                        <p class="mb-1" style="text-align: justify;">
                            Anda memilih konsultasi kecenderungan jiwa, 
                            dan anda tidak dapat melakukan konsultasi lagi sebelum konsultasi yang anda pilih saat ini selesai. 
                            Apakah anda sudah yakin?
                        </p>
                    </div>
                    <div class="mt-2 mb-4">
                        <a href="{{ route('konsuljiwa') }}" class="btn btn-primary px-4 py-3">Yakin</a>
                        <button class="btn btn-danger px-4 py-3" data-bs-dismiss="modal" aria-label="Close">Tidak Yakin</button>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>