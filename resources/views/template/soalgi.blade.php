                @if ($gi->status == 'sudah')
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="alert alert-success mt-2 mb-4">
                            <div class="mb-2"><i class="fa fa-check"></i> <b>SELESAI!</b></div>
                            <p class="mb-1" style="text-align: justify;">
                                Anda sudah menyelesaikan test!
                            </p>
                        </div>
                    </div>
                @else                    
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <form action="{{ route('submit_gi', $gi->id) }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>1. Ceritakan mengenai diri Anda!<h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j1" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j1') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>2. Apa alasan Anda melamar untuk posisi dan perusahaan ini?</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j2" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j2') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>3. Mengapa Anda meninggalkan pekerjaan Anda sebelumnya?</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j3" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j3') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>4. Mengapa Anda memutuskan untuk berpindah jalur karir?</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j4" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j4') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>5. Jelaskan mengenai peran Anda di perusahaan sebelumnya!</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j5" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j5') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>6. Apa kesulitan terbesar di peran Anda sebelumnya?</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j6" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j6') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>7. Apa pencapaian terbesar di peran Anda sebelumnya?</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j7" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j7') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>8. Ceritakan rencana Anda seputar karier dalam jangka pendek serta jangka panjang!</h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j8" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j8') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="mb-1">
                                        <h4>
                                            9. Hitung berapa jumlah pasangan huruf yang memiliki perbedaan di bawah:<br/>
                                            P p<br/>
                                            R r<br/>
                                            T r<br/>
                                            L l<br/>
                                            Sebutkan alasannya!
                                        </h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j9" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j9') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="mb-1">
                                        <h4>
                                            10. Penarikan Kesimpulan<br/>
                                            Usia Dini 2 kali usia Ahmad. Raka lebih tua dari Dini. Siapakah yang paling tua?
                                        </h4>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="j10" placeholder="Jawaban" style="height: 150px; resize: none;">{{ old('j10') }}</textarea>
                                        <label for="name">Jawaban</label>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary px-4 py-3">End Test</button>
                                </div>
                            </div>
                        </form>                        
                    </div>
                @endif