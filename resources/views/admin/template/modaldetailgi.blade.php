        <div class="modal fade" id="modaldetailgi" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalScrollableTitle" style="text-transform: capitalize;">Detail Data Test General Idea</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                @if ($konsul->generalidea->hasil == null)
                <form action="{{ route('inputhasil', $konsul->generalidea->id) }}" method="POST">
                  @csrf
                  <div class="modal-body">
                    <div class="alert alert-info mt-2 mb-4">
                      <div class="mb-2"><i class="fa fa-exclamation-triangle"></i> <b>INFO!</b></div>
                      <p class="mb-1" style="text-align: justify;">
                          Anda belum memberikan hasil penilaian. <a href="{{ route('lihatjawaban', $konsul->generalidea->id) }}" target="_blank" style="color: gold;"><b>Klik disini</b></a> untuk melihat jawaban test.
                      </p>
                    </div>
                    <h5 class="font-weight-bold">Hasil Test</h5>
                    <textarea name="hasil" class="form-control mb-3" style="height: 150px; resize: none;" placeholder="Anda belum memberikan hasil test"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Input Hasil Test</button>
                  </div>
                </form>
                @else
                  <div class="modal-body">
                    <div class="alert alert-success mt-2 mb-4">
                      <div class="mb-2"><i class="fa fa-check"></i> <b>Selesai!</b></div>
                      <p class="mb-1" style="text-align: justify;">
                          Anda sudah memberikan hasil penilaian.
                      </p>
                    </div>
                    <h5 class="font-weight-bold">Hasil Test</h5>
                    {{-- <textarea name="hasil" class="form-control mb-3" style="height: 150px; resize: none;" placeholder="Anda belum memberikan hasil test"></textarea> --}}
                    <p class="mb-3" style="text-align: justify;">{{ $konsul->generalidea->hasil }}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-primary">Input Hasil Test</button> --}}
                  </div>
                @endif
              </div>
            </div>
          </div>