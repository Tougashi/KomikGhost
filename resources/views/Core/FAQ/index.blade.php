@extends('layouts.index')
@section('container')
<div class="page-content">
<div class="row">
<div class="col-12 col-lg-9 mx-auto">
<div class="text-center">
    <h5 class="mb-0 text-uppercase">PERTANYAAN UMUM(FAQ<small class="text-lowercase">s</small>)</h5>
    <hr/>
</div>
<div class="card">
    <div class="card-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu "Komik Ghost"?
                    </button>
                </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>"Komik Ghost" adalah sebuah website yang menyediakan informasi, ulasan, dan konten terkait dengan komik DC dan Marvel. Kami berusaha untuk memberikan wawasan mendalam tentang karakter, cerita, dan dunia komik dari kedua penerbit ini.</p>
                                </div>
                            </div>
                        </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apakah "Komik Ghost" memiliki koneksi dengan DC dan Marvel?
                    </button>
                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Tidak, "Komik Ghost" adalah sebuah situs yang dibuat oleh penggemar untuk penggemar. Kami tidak memiliki koneksi resmi dengan DC Comics dan Marvel Comics. Kami adalah sumber informasi yang independen dan tidak berafiliasi dengan kedua penerbit tersebut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apakah konten di "Komik Ghost" gratis?
                    </button>
                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ya, semua konten di "Komik Ghost" dapat diakses secara gratis. Kami berusaha menyediakan konten yang bermanfaat dan menarik bagi para penggemar komik DC dan Marvel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Bagaimana saya bisa berkontribusi ke "Komik Ghost"?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Kami senang mendengar dari Anda! Jika Anda memiliki artikel, ulasan, atau karya lain yang ingin Anda bagikan kepada komunitas kami, silakan hubungi kami melalui halaman kontak di website ini. Kami akan dengan senang hati membahas kemungkinan kolaborasi.</p>
                       
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end row-->
</div>
@endsection