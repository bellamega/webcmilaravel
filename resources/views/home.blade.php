@extends('layouts.app')

@section('content')
    <section class="py-5" style="background: linear-gradient(120deg, #ff5e62 0%, #ff9966 50%, #ffb6ea 100%);">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-5">
            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                {{-- Mengubah warna teks menjadi putih untuk kontras yang lebih baik --}}
                <h1 class="display-4 fw-bold text-white mb-3 hero-title" style="line-height: 1.1;">
                    Kami Mengobati<br>
                    Dengan<br>
                    <span class="highlight-yellow">Sepenuh Hati</span>
                </h1>
                <p class="lead text-white mb-4">Klinik Utama CMI Bandung Memberikan upaya pengobatan penyakit kronis dan pencegahan yang terintegrasi dengan <br> metode modern dan klasik.</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start gap-3">
                    <a href="#" class="btn btn-gradient-primary rounded-pill px-4 py-2">Schedule an appointment</a>
                    <a href="#" class="btn btn-outline-gradient-primary rounded-pill px-4 py-2">Download app</a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ asset('images/gedung-cmi.jpg') }}" alt="Gedung CMI" 
    class="img-fluid rounded shadow-lg hero-img-frame"
    style="max-width: 1000px; width: 100%; height: auto;">
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="display-5 fw-bold text-dark mb-5">
                Layanan Unggulan Kami  <span class="text-highlight-red">Menangani Penyakit Kronis</span> tanpa <span class="text-highlight-orange-v2">Tindakan Invasif (Operasi dan Kemoterapi) </span> dan Minim Efek Samping 
            </h2>
            <div class="row g-4"> {{-- g-4 untuk gap --}}
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 border-0 transform-hover"> {{-- 'transform-hover' adalah kelas kustom dari <style> di app.blade.php --}}
                        <img src="{{ asset('images/kanker.png') }}" class="card-img-top" alt="Physical Therapy" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title h5 text-dark">Kanker</h3>
                            <p class="card-text text-secondary mt-2">Pengobatan Tanpa Operasi dan Kemoterapi</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 border-0 transform-hover">
                        <img src="{{ asset('images/diabetes.png') }}" class="card-img-top" alt="Cancer Chemotherapy" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title h5 text-dark">Diabetes</h3>
                            <p class="card-text text-secondary mt-2">Pengobatan Tanpa Insulin dan Obat Kimia</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 border-0 transform-hover">
                        <img src="{{ asset('images/jantung.png') }}" class="card-img-top" alt="Radiation Therapy" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title h5 text-dark">Jantung</h3>
                            <p class="card-text text-secondary mt-2">Pengobatan Jantung Tanpa Ring dan Bypass</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card shadow-sm h-100 border-0 transform-hover">
                        <img src="{{ asset('images/ginjal.png') }}" class="card-img-top" alt="Blood Transfusion" style="height: 180px; object-fit: cover;">
                        <div class="card-body">
                            <h3 class="card-title h5 text-dark">Ginjal</h3>
                            <p class="card-text text-secondary mt-2">Pengobatan Tanpa Cuci Darah (Hemodialisa)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Pasien Sembuh -->
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold text-dark mb-4">Pasien Sembuh di Klinik Utama CMI</h2>
            <p class="lead text-secondary mb-4">Kami telah membantu ribuan pasien sembuh dari penyakit kronis tanpa tindakan invasif.</p>
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <h3 class="fw-bold text-success mb-0" style="font-size:2.5rem;">5.200+</h3>
                            <p class="mb-0 text-dark">Total Pasien Sembuh</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <h3 class="fw-bold text-primary mb-0" style="font-size:2.5rem;">98%</h3>
                            <p class="mb-0 text-dark">Tingkat Kepuasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimoni Pasien Sembuh -->
    <section class="py-5" style="background: linear-gradient(90deg, #ffb3b3 0%, #ffe082 100%);">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-2" style="color:#222;">
                Testimoni <span style="color:#ff2323;">Pasien</span>
            </h2>
            <p class="text-center text-secondary mb-5">Kepercayaan dan kepuasan pasien adalah prioritas utama kami</p>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 h-100" style="border-radius:24px;">
                        <div class="mb-3 text-center">
                            <span style="color:#FFD600; font-size:1.5rem;">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </span>
                        </div>
                        <blockquote class="fst-italic text-center mb-4">
                            "Pelayanan yang sangat baik dan profesional. Dokter dan perawat sangat ramah dan membantu proses pemulihan saya."
                        </blockquote>
                        <div class="d-flex align-items-center gap-3 justify-content-center">
                            <span style="background:#ff2323; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center;">
                                <span style="font-size:2rem;">👩‍⚕️</span>
                            </span>
                            <div>
                                <div class="fw-bold">Sarah Wijaya</div>
                                <div class="text-secondary small"><i class="bi bi-geo-alt"></i> Bandung</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 h-100" style="border-radius:24px;">
                        <div class="mb-3 text-center">
                            <span style="color:#FFD600; font-size:1.5rem;">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </span>
                        </div>
                        <blockquote class="fst-italic text-center mb-4">
                            "Fasilitas lengkap dan modern. Saya merasa sangat terbantu dengan layanan telemedicine yang disediakan."
                        </blockquote>
                        <div class="d-flex align-items-center gap-3 justify-content-center">
                            <span style="background:#ff2323; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center;">
                                <span style="font-size:2rem;">🧑‍⚕️</span>
                            </span>
                            <div>
                                <div class="fw-bold">Ahmad Fauzi</div>
                                <div class="text-secondary small"><i class="bi bi-geo-alt"></i> Cimahi</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm p-4 h-100" style="border-radius:24px;">
                        <div class="mb-3 text-center">
                            <span style="color:#FFD600; font-size:1.5rem;">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </span>
                        </div>
                        <blockquote class="fst-italic text-center mb-4">
                            "Alhamdulillah sudah sembuh total berkat pengobatan di CMI. Terima kasih untuk semua tim medis yang luar biasa."
                        </blockquote>
                        <div class="d-flex align-items-center gap-3 justify-content-center">
                            <span style="background:#ff2323; border-radius:50%; width:48px; height:48px; display:flex; align-items:center; justify-content:center;">
                                <span style="font-size:2rem;">😊</span>
                            </span>
                            <div>
                                <div class="fw-bold">Ibu Siti</div>
                                <div class="text-secondary small"><i class="bi bi-geo-alt"></i> Bandung</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Artikel -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-4" style="color:#222;">
                Artikel <span style="color:#ff2323;">Kesehatan</span>
            </h2>
            <div class="row g-4 justify-content-center">
                @if(isset($articles) && $articles->count())
    @foreach($articles as $article)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                @if($article->image)
                    <img src="{{ asset('storage/'.$article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="height:180px; object-fit:cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $article->title }}</h5>
                    <p class="card-text text-secondary">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                    <a href="#" class="btn btn-sm btn-gradient-primary rounded-pill px-3">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center">Belum ada artikel.</p>
@endif
            </div>
        </div>
    </section>

    <!-- Section FAQ -->
    <section class="py-5 bg-white">
        <div class="container d-flex flex-column flex-md-row align-items-start justify-content-between">
            {{-- ...FAQ content... --}}
        </div>
    </section>

    <footer class="bg-dark text-white py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="mb-3 mb-md-0">
            <img src="{{ asset('images/logo-cmi.png') }}" alt="Logo CMI" style="height: 48px;">
        </div>
        <div class="text-center text-md-end small">
            &copy; {{ date('Y') }} Klinik Utama CMI Bandung. All rights reserved.
        </div>
    </div>
</footer>

@endsection

<style>
/* Tambahkan di <style> pada app.blade.php atau file CSS utama */
.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    color: #fff;
    margin-bottom: 1rem;
    text-align: left;
}
.hero-title .highlight-yellow {
    color: #FFD600;
    display: block;
}
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.2rem;
        text-align: center;
    }
}
.text-highlight-red {
    color: #8e24aa; /* ungu */
    font-weight: 700;
}
footer img {
    filter: drop-shadow(0 2px 6px rgba(0,0,0,0.15));
}
/* Tambahkan di <style> pada app.blade.php atau di bawah style yang sudah ada */
.hero-img-frame {
    border: 8px solid #fff;
    border-radius: 32px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12), 0 1.5px 8px rgba(255,94,98,0.08);
    background: #fff;
    padding: 0;
}
</style>