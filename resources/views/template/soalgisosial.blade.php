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
                                            <h4>
                                                1. Aku merasa tak seorangpun yang mengerti akan diriku
                                                <h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j1" value="ya">Ya
                                            <input type="radio" name="j1" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                2. Aku sanggup bekerja sebagaimana mestinya
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j2" value="ya">Ya
                                            <input type="radio" name="j2" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                3. Bilamana aku melamar pekerjaan baru, aku ingin tahu siapa yang harus
                                                aku hubungi lebih
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j3" value="ya">Ya
                                            <input type="radio" name="j3" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                4. Keluargaku tidak senang pada pekerjaan yang telah atau akan kupilih
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j4" value="ya">Ya
                                            <input type="radio" name="j4" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                5. Aku bekerja dalam ketegangan yang sangat besar
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j5" value="ya">Ya
                                            <input type="radio" name="j5" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                6. Aku rasa lebih baik tutup mulut bila dalam kesulitan
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j6" value="ya">Ya
                                            <input type="radio" name="j6" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                7. Tidurku sering terganggu dan terjaga
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j7" value="ya">Ya
                                            <input type="radio" name="j7" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                8. Rasanya aku lebih baik apabila semua undang - undang ditiadakan
                                            </h4>
                                        </div>
                                        <div class="form-floating">
                                            <input type="radio" name="j8" value="ya">Ya
                                            <input type="radio" name="j8" value="tidak">Tidak
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-1">
                                            <h4>
                                                9. Selagi muda aku pernah dilarang masuk sekolah karena keberandalanku
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
                                                10. Aku kira banyak orang suka melebih - lebihkan kemalangannya untuk
                                                memperoleh simpati dan pertolongan orang lain
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
                                                11. Aku memang kurang kepercayaan pada diriku sendiri
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
                                                12. Kadang - kadang aku merasa benar - benar tidak berguna
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
                                                13. Aku senang pergi ke pesta dan keramaian
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
                                                14. Aku sulit memulai percakapan bila bertemu dengan orang yang baru
                                                kukenal
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
                                                15. Aku ingin juga menjadi anggota dari beberapa perkumpulan
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
                                                16. Aku sering sekali murung dan merenung
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
                                                17. Pada saat - saat tertentu aku merasa sangat gelisah sekali, sehingga
                                                tidak dapat duduk tenang
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
                                                18. Tiada seorangpun yang banyak memperdulikan apa yang akan terjadi
                                                padaku
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
                                                19. Aku kadang - kadang memilih orang -orang yang tidak kukenal dalam
                                                suatu pemilihan
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
                                                20. Lebih aman untuk tidak mempercayai seorangpun
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
                                                21. Aku sering merasa orang - orang yang tidak kukenal memperhatikan aku
                                                secara teliti
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
                                                22. Aku yakin bahwa aku dipergunjingkan orang
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
                                                23. Aku merasa sukar untuk berbicara didepan kelas waktu sekolah
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
                                                24. Aku merasa sukar untuk berbicara didepan kelas waktu sekolah
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
