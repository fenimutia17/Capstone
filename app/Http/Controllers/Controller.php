<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    // Mengimpor Request
use App\Models\Feedback;        // Mengimpor model Feedback
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function submitFeedback(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'user' => 'required|string|max:255',
            'feedback' => 'required|string',
        ]);

        // Simpan data feedback ke dalam database
        Feedback::create($validated);

        // Kembalikan respons
        return redirect()->back()->with('success', 'Feedback berhasil disimpan.');
    }
}
