@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center my-4 text-pink-600">Step Skincare Rutin</h1>

    <div class="card shadow-lg">
        <div class="card-header bg-pink-500 text-black text-center">
            <h2 class="mb-0">Panduan Skincare Harian</h2>
        </div>
        <div class="card-body">
            <div class="steps">
                <!-- Step 1: Facial Wash -->
                <div class="step d-flex align-items-start">
                    <img src="{{ asset('images/facialwash.PNG') }}" alt="Facial Wash" class="step-img me-4 img-thumbnail" style="width: 120px;">
                    <div>
                        <h3>Facial Wash</h3>
                        <p>Gunakan pembersih wajah untuk mengangkat kotoran dan minyak berlebih di wajah. Pilih produk yang sesuai dengan jenis kulit Anda.</p>
                    </div>
                </div>

                <!-- Step 2: Toner -->
                <div class="step d-flex align-items-start">
                    <img src="{{ asset('images/toner.PNG') }}" alt="Toner" class="step-img me-4 img-thumbnail" style="width: 120px;">
                    <div>
                        <h3>Toner</h3>
                        <p>Gunakan toner untuk menyeimbangkan pH kulit dan mempersiapkan kulit untuk perawatan selanjutnya.</p>
                    </div>
                </div>

                <!-- Step 3: Serum -->
                <div class="step d-flex align-items-start">
                    <img src="{{ asset('images/serum.PNG') }}" alt="Serum" class="step-img me-4 img-thumbnail" style="width: 120px;">
                    <div>
                        <h3>Serum</h3>
                        <p>Serum mengandung bahan aktif yang dapat merawat berbagai masalah kulit, seperti penuaan atau jerawat.</p>
                    </div>
                </div>

                <!-- Step 4: Moisturizer -->
                <div class="step d-flex align-items-start">
                    <img src="{{ asset('images/moisturizer.PNG') }}" alt="Moisturizer" class="step-img me-4 img-thumbnail" style="width: 120px;">
                    <div>
                        <h3>Moisturizer</h3>
                        <p>Gunakan pelembap untuk menjaga kelembapan kulit dan membuat kulit terasa lebih halus dan kenyal.</p>
                    </div>
                </div>

                <!-- Step 5: Sunscreen -->
                <div class="step d-flex align-items-start">
                    <img src="{{ asset('images/sunscreenn.PNG') }}" alt="Sunscreen" class="step-img me-4 img-thumbnail" style="width: 120px;">
                    <div>
                        <h3>Sunscreen</h3>
                        <p>Jangan lupa untuk mengaplikasikan Sunscreen untuk melindungi kulit dari paparan sinar UV yang dapat merusak kulit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tombol Welcome Rekomendasi Skincare -->
<div class="text-center mt-5">
    <a href="{{ route('welcome') }}">
        <button class="btn btn-pink shadow-lg">
            Welcome Rekomendasi Skincare
        </button>
    </a>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .steps {
        margin-top: 20px;
    }
    .step {
        background-color: #f8d5e0; /* Warna pink muda */
        margin-bottom: 15px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .step h3 {
        font-size: 1.5rem;
        color: #ff85a1;
        margin-bottom: 10px;
    }
    .step p {
        font-size: 1rem;
        color: #555;
        line-height: 1.5;
    }
    .btn-pink {
        background-color: #ff85a1;
        color: white;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
    }
    .btn-pink:hover {
        background-color: #ff618a;
        color: white;
    }
</style>
@endpush
