<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class RecommendationController extends Controller
{

    // Menampilkan form input rekomendasi
    public function showForm()
    
    {
        \Log::info('showForm dipanggil');
        return view('recommendation.form');
    }

    // Memproses rekomendasi dan menyimpan hasil
    public function getRecommendations(Request $request)
    {
        \Log::info('Request Data:', $request->all()); // Debug data form
    
// Validasi input
$request->validate([
    'product' => 'required',
    'skinType' => 'required',
    'skinconditions' => 'required',
]);


// Logika rekomendasi sederhana

        $recommendations= [
            'Face Wash' => [
                'Oily' => [
                    'acne' =>'COSRX Salicylic Acid Daily Gentle Cleanser (mengandung Salicylic Acid untuk mengontrol minyak dan mencegah jerawat)',
                    'kusam' => 'Innisfree Green Tea Foam Cleanser (mengandung green tea untuk hidrasi dan mencerahkan kulit)',
                    'komedo' => 'The Body Shop Tea Tree Skin Clearing Facial Wash (mengandung Tea Tree untuk membersihkan pori-pori)',
                    'flek hitam' => 'Kojie San Skin Lightening Soap (mengandung Kojic Acid untuk mengurangi hiperpigmentasi)',
                ],
                'Dry' => [
                    'acne' => 'CeraVe Hydrating Cleanser (mengandung ceramide dan hyaluronic acid untuk hidrasi tanpa mengiritasi kulit berjerawat)',
                    'kusam' => 'Cetaphil Gentle Skin Cleanser (membersihkan tanpa menghilangkan kelembapan kulit)',
                    'komedo' => 'La Roche-Posay Toleriane Hydrating Gentle Cleanser (lembut untuk kulit kering dengan komedo)',
                    'flek hitam' => 'Aveeno Positively Radiant Cleanser (mengandung kedelai untuk mencerahkan kulit)',
                ],
                'Sensitive' => [
                    'acne' => 'Avene Cleanance Cleansing Gel (lembut untuk kulit sensitif berjerawat)',
                    'kusam' => 'Simple Kind to Skin Refreshing Facial Wash (tanpa pewangi, cocok untuk kulit sensitif)',
                    'komedo' => 'La Roche-Posay Effaclar H Cleansing Cream (menenangkan kulit sensitif dengan komedo)',
                    'flek hitam' => 'Bioderma Sensibio Gel Moussant (lembut untuk kulit sensitif dengan hiperpigmentasi)',
                ],
                'Combination' => [
                    'acne' => 'Neutrogena Oil-Free Acne Wash (mengontrol minyak tanpa mengeringkan area kering)',
                    'kusam' => 'Garnier Pure Active Fruit Energy Gel Wash (mencerahkan area kusam dan menghidrasi)',
                    'komedo' => 'Cosrx Low pH Good Morning Gel Cleanser (membersihkan pori-pori tanpa iritasi)',
                    'flek hitam' => 'Hada Labo AHA/BHA Face Wash (mengandung AHA/BHA untuk mencerahkan kulit kombinasi)',
                ],
            ],
            'Toner' => [
                'Oily' => [
                    'acne' => 'Some By Mi AHA BHA PHA 30 Days Miracle Toner (mengandung AHA, BHA, PHA untuk eksfoliasi dan kontrol jerawat)',
                    'kusam' => 'Pixi Glow Tonic (mengandung Glycolic Acid untuk mencerahkan kulit)',
                    'komedo' => 'Cosrx BHA Blackhead Power Liquid (mengandung BHA untuk membersihkan komedo)',
                    'flek hitam' => 'Kiehl\'s Clearly Corrective Toner (mengurangi noda hitam pada kulit berminyak)',
                ],
                'Dry' => [
                    'acne' => 'Klairs Supple Preparation Unscented Toner (melembapkan dan menenangkan kulit berjerawat)',
                    'kusam' => 'Hada Labo Gokujyun Premium Lotion (kaya akan hyaluronic acid untuk kelembapan ekstra)',
                    'komedo' => 'Thayers Alcohol-Free Rose Petal Toner (lembut dan tidak mengiritasi kulit)',
                    'flek hitam' => 'Fresh Rose Deep Hydration Facial Toner (mencerahkan dan melembapkan kulit kering dengan flek hitam)',
                ],
                'Sensitive' => [
                    'acne' => 'Benton Aloe BHA Skin Toner (menenangkan kulit sensitif berjerawat)',
                    'kusam' => 'Etude House Soon Jung pH 5.5 Relief Toner (tanpa iritasi, cocok untuk kulit kusam dan sensitif)',
                    'komedo' => 'La Roche-Posay Effaclar Clarifying Toner (membersihkan komedo pada kulit sensitif)',
                    'flek hitam' => 'Dear Klairs Supple Preparation Toner (melembapkan dan mencerahkan kulit sensitif)',
                ],
                'Combination' => [
                    'acne' => 'Neogen Dermalogy Real Cica Pad (menghidrasi dan menenangkan kulit kombinasi)',
                    'kusam' => 'Mamonde Rose Water Toner (menghidrasi area kering dan menyegarkan area berminyak)',
                    'komedo' => 'Paula\'s Choice Skin Balancing Pore-Reducing Toner (mengontrol minyak dan membersihkan pori)',
                    'flek hitam' => 'Lancome Tonique Confort (melembapkan area kering dan mencerahkan area gelap)',
                ],
            ],
            'Moisturizer' => [
                'Oily' => [
                    'acne' => 'Neutrogena Hydro Boost Water Gel (ringan, berbahan dasar air, dan tidak menyumbat pori)',
                    'kusam' => 'Laneige Water Bank Moisture Cream (menghidrasi dan mencerahkan kulit kusam)',
                    'komedo' => 'COSRX Oil-Free Ultra-Moisturizing Lotion (tidak berminyak, cocok untuk kulit berminyak dengan komedo)',
                    'flek hitam' => 'Olay Luminous Tone Perfecting Cream (mengurangi hiperpigmentasi dan melembapkan)',
                ],
                'Dry' => [
                    'acne' => 'CeraVe Moisturizing Cream (mengandung ceramide untuk memperbaiki skin barrier)',
                    'kusam' => 'The Ordinary Natural Moisturizing Factors + HA (melembapkan dan memperbaiki kulit kering kusam)',
                    'komedo' => 'La Roche-Posay Toleriane Double Repair Face Moisturizer (melembapkan tanpa menyumbat pori-pori)',
                    'flek hitam' => 'Kiehl\'s Ultra Facial Cream (melembapkan dan mengurangi flek hitam pada kulit kering)',
                ],
                'Sensitive' => [
                    'acne' => 'Cetaphil Daily Hydrating Lotion (ringan dan lembut untuk kulit sensitif berjerawat)',
                    'kusam' => 'Aveeno Ultra-Calming Daily Moisturizer (menghidrasi dan menenangkan kulit kusam)',
                    'komedo' => 'Bioderma Sensibio Light Cream (melembapkan kulit sensitif tanpa menyumbat pori)',
                    'flek hitam' => 'Eucerin Anti-Pigment Day Cream (menghidrasi kulit sensitif dengan flek hitam)',
                ],
                'Combination' => [
                    'acne' => 'Clinique Dramatically Different Gel (ringan, cocok untuk kulit kombinasi dengan jerawat)',
                    'kusam' => 'The Body Shop Vitamin E Gel Moisture Cream (mencerahkan area kusam dan melembapkan)',
                    'komedo' => 'COSRX Aloe Vera Oil-Free Moisture Cream (mengontrol minyak tanpa menyumbat pori)',
                    'flek hitam' => 'Innisfree Jeju Orchid Gel Cream (melembapkan area kering dan mengurangi flek hitam)',
                ],
            ],
            'Sunscreen' => [
                'Oily' => [
                    'acne' => 'Biore UV Aqua Rich Watery Essence SPF 50 (ringan dan tidak menyumbat pori-pori)',
                    'kusam' => 'Skin Aqua Tone Up UV Essence (melindungi dari sinar UV dan memberikan efek cerah)',
                    'komedo' => 'Anessa Perfect UV Sunscreen Mild Milk (ringan, cocok untuk kulit berminyak)',
                    'flek hitam' => 'La Roche-Posay Anthelios Ultra-Light Sunscreen (melindungi dan membantu mencegah flek hitam)',
                ],
                'Dry' => [
                    'acne' => 'Supergoop! Unseen Sunscreen SPF 40 (melindungi kulit kering tanpa menyumbat pori)',
                    'kusam' => 'Missha All Around Safe Block Essence Sun Milk (melembapkan dan memberikan efek glowing)',
                    'komedo' => 'Hada Labo UV White Gel SPF 50 (melembapkan kulit kering tanpa rasa lengket)',
                    'flek hitam' => 'Neutrogena Ultra Sheer Dry-Touch Sunscreen (melindungi dari UV dan mengurangi hiperpigmentasi)',
                ],
                'Sensitive' => [
                    'acne' => 'La Roche-Posay Anthelios Ultra-Light Sunscreen (ringan dan cocok untuk kulit sensitif berjerawat)',
                    'kusam' => 'Bioré UV Bright Milk (melindungi dari sinar UV dan mencerahkan kulit sensitif)',
                    'komedo' => 'Avene Day Protector UV EX (melindungi tanpa menyumbat pori-pori sensitif)',
                    'flek hitam' => 'Eucerin Sun Pigment Control SPF 50 (melindungi kulit sensitif dengan flek hitam)',
                ],
                'Combination' => [
                    'acne' => 'Missha All Around Safe Block Aqua Sun Gel (ringan dan tidak menyumbat pori)',
                    'kusam' => 'Etude House Sunprise Mild Watery Light SPF 50 (melindungi dan mencerahkan)',
                    'komedo' => 'Anessa Perfect UV Sunscreen Skincare Milk (melindungi tanpa menyumbat pori-pori)',
                    'flek hitam' => 'Hada Labo UV White Gel SPF 50 (melembapkan dan mengurangi flek hitam)',
                ],
            ],
        ];


        $product = $request->input('Product');
        $skinType = $request->input('skin_type');
        $skinconditions = $request->input('skin_conditions');

        $recommendedProduct = $recommendations[$product][$skinType][$skinconditions] ?? 'No recommendation available';

        // Redirect ke halaman hasil rekomendasi
        return redirect()->route('recommendations.result')
            ->with([
                'product' => $product,
                'skinType' => $skinType,
                'skinconditions' => $skinconditions,
                'recommendedProduct' => $recommendedProduct,
            ]);
    }

    // Menampilkan hasil rekomendasi
    public function showRecommendation()
    {
        \Log::info('Session Data:', session()->all()); // Debug data session
        // Mendapatkan data dari session
        $product = session('product');
        $skinType = session('skinType');
        $skinconditions = session('skinconditions');
        $recommendedProduct = session('recommendedProduct');

        // Tampilkan hasil rekomendasi di halaman view
        return view('recommendation.result', compact('product', 'skinType', 'skinconditions', 'recommendedProduct'));
    }
    
  // Menampilkan form feedback
  public function showFeedbackForm()
  {
      return view('feedback.form');
  }

  // Memproses data feedback
  public function submitFeedback(Request $request)
  {
      // Validasi input
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email',
          'feedback' => 'required|string|max:1000',
      ]);

      // Logika penyimpanan feedback (contoh sederhana)
      // Anda bisa menggunakan database atau file log untuk menyimpan feedback ini
      \Log::info('Feedback Data:', $request->all());

      // Misalnya simpan ke session untuk demo
      session()->flash('success', 'Thank you for your feedback!');
      return redirect()->route('feedback.form');
    }
    // Menampilkan form input rekomendasi
    public function showFeedbacks()
    {
        // Ambil data feedback dari database (contoh model Feedback)
        $feedbacks = Feedback::all();
    
        // Kirim data ke view
        return view('feedbacks')

    })
  };

