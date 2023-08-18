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
    @if (now() < $gi->start_test)
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="alert alert-info mt-2 mb-4">
                <div class="mb-2"><i class="fa fa-check"></i> <b>INFO!</b></div>
                <p class="mb-1" style="text-align: justify;">
                    Jadwal test tidak sesuai. Silahkan buka kembali saat jadwal sudah sesuai.
                    Terimakasih!
                </p>
            </div>
        </div>
    @elseif (now() > $gi->end_test)
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="alert alert-info mt-2 mb-4">
                <div class="mb-2"><i class="fa fa-check"></i> <b>INFO!</b></div>
                <p class="mb-1" style="text-align: justify;">
                    Jadwal test sudah berakhir. Anda tidak dapat mengerjakan test lagi. Terimakasih!
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
                            <h4>1. Aku bangun dengan rasa nyaman hampir setiap hari<h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j1" value="ya">Ya
                            <input type="radio" name="j1" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>2. Tidurku sering terganggu dan terjaga</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j2" value="ya">Ya
                            <input type="radio" name="j2" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>3. Aku mudah terbangun oleh suara berisik</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j3" value="ya">Ya
                            <input type="radio" name="j3" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>4. Aku senang membaca berita kejahatan di surat kabar
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j4" value="ya">Ya
                            <input type="radio" name="j4" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>5. Kehidupanku sehari - hari terisi penuh dengan hal - hal yang menyenangkan dan menarik</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j5" value="ya">Ya
                            <input type="radio" name="j5" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>6. Aku senang cerita detektif dan cerita yang menyeramkan</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j6" value="ya">Ya
                            <input type="radio" name="j6" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>7. Aku merasa bahwa hidup ini tidak adil</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j7" value="ya">Ya
                            <input type="radio" name="j7" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>8. Aku pernah ingin sekali lari dari rumah</h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j8" value="ya">Ya
                            <input type="radio" name="j8" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="mb-1">
                            <h4>
                                9. Pada waktu - waktu tertentu aku tertawa dan menangis tanpa dapat kukuasai
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j9" value="ya">Ya
                            <input type="radio" name="j9" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                10. Prinsipku adalah berusaha membalas orang yang berbuat salah padaku
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j10" value="ya">Ya
                            <input type="radio" name="j10" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                11. Kadang - kadang aku merasa seakan - akan aku harus melukai diriku sendiri atau orang lain
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j11" value="ya">Ya
                            <input type="radio" name="j11" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                12. Kadang - kadang aku merasa ingin mengumpat - caci
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j12" value="ya">Ya
                            <input type="radio" name="j12" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                13. Dalam suatu masa tertentu waktu masih muda aku pernah melakukan pencurian
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j13" value="ya">Ya
                            <input type="radio" name="j13" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                14. Selagi muda aku pernah dilarang masuk sekolah karena keberandalanku
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j14" value="ya">Ya
                            <input type="radio" name="j14" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                15. Kadang - kadang aku ingin membanting barang - barang
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j15" value="ya">Ya
                            <input type="radio" name="j15" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                16. Pada umumnya aku lebih senang duduk melamun daripada mengerjakan yang lain
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j16" value="ya">Ya
                            <input type="radio" name="j16" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                17. Rasanya aku lebih baik apabila semua undang - undang ditiadakan
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j17" value="ya">Ya
                            <input type="radio" name="j17" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                18. Aku menjalani hidup yang tidak dibenarkan
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j18" value="ya">Ya
                            <input type="radio" name="j18" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                19. Aku sering murung
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j19" value="ya">Ya
                            <input type="radio" name="j19" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                20. Aku kadang - kadang mengganggu binatang
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j20" value="ya">Ya
                            <input type="radio" name="j20" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                21. Aku rajin pergi ke tempat ibadah
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j21" value="ya">Ya
                            <input type="radio" name="j21" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                22. Aku tidak takut atau terganggu melihat darah
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j22" value="ya">Ya
                            <input type="radio" name="j22" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                23. Aku pernah mengalami tidak mampu menguasai pergerakan dan pembicaraanku, walaupun sadar
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j23" value="ya">Ya
                            <input type="radio" name="j23" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                24. Aku takut menjadi gila
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j24" value="ya">Ya
                            <input type="radio" name="j24" value="tidak">Tidak
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="mb-1">
                            <h4>
                                25. Aku ingin berbahagia seperti orang lain
                            </h4>
                        </div>
                        <div class="form-floating">
                            <input type="radio" name="j25" value="ya">Ya
                            <input type="radio" name="j25" value="tidak">Tidak
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary px-4 py-3">End Test</button>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endif
